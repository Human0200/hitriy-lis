class ItcModal {
  #elem;
  #template = '<div class="itc-modal-backdrop"><div class="itc-modal-content itc-modal-scrollable"><div class="itc-modal-header"><div class="itc-modal-title">{{title}}</div><span class="itc-modal-btn-close" title="Закрыть">×</span></div><div class="itc-modal-body">{{content}}</div>{{footer}}</div></div>';
  #templateFooter = '<div class="itc-modal-footer">{{buttons}}</div>';
  #templateBtn = '<button type="button" class="{{class}}" data-action={{action}}>{{text}}</button>';
  #eventShowModal = new Event('show.itc.modal', { bubbles: true });
  #eventHideModal = new Event('hide.itc.modal', { bubbles: true });
  #disposed = false;
  #webhookUrl = ''; // Укажите здесь ваш Webhook URL от Bitrix24
  
  constructor(options = []) { 
    this.#elem = document.createElement('div');
    this.#elem.classList.add('itc-modal');
    
    // HTML формы для отправки в Bitrix24
    const formHtml = `
      <h1 class="modal__h1">Забронируйте</h1> 
      <br> 
      <p class="modal__p">Волшебный отдых в Хитром Лисе</p>
      <form id="bitrixForm" class="modal-form">
        <div class="modal__form__input">
          <label>Ваше имя</label>
          <input type="text" name="name" placeholder="Введите имя" required>
        </div>
        <div class="modal__form__input">
          <label>Ваш телефон</label>
          <input type="tel" name="phone" placeholder="+7" required>
        </div>
        <div class="modal__form__input">
          <label>Дата</label>
          <input type="date" name="date" required>
        </div>
        <div class="modal__form__input">
          <label>Время</label>
          <input type="text" name="time" placeholder="10:00" required>
        </div>
        <button type="submit" class="modal__form-button" id="submitBtn">
          <span id="btnText">Отправить</span>
          <div id="loadingSpinner" style="display:none; width:20px; height:20px; border:2px solid #f3f3f3; border-top:2px solid #4CAF50; border-radius:50%; animation:spin 1s linear infinite;"></div>
        </button>
      </form>
      <div id="successMessage" style="display:none; background-color:#dff0d8; border:1px solid #d6e9c6; color:#3c763d; padding:15px; border-radius:5px; margin:20px 0; text-align:center;">
        <p>✅ Заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.</p>
      </div>
      <div id="errorMessage" style="display:none; background-color:#f2dede; border:1px solid #ebccd1; color:#a94442; padding:15px; border-radius:5px; margin:20px 0; text-align:center;">
        <p>❌ Произошла ошибка. Пожалуйста, попробуйте еще раз.</p>
      </div>
      <span class="modal__span">Нажимая кнопку "ОСТАВИТЬ ЗАЯВКУ", вы соглашаетесь на <br>обработку своих персональных данных в соответствии с <br> <b><a href="/"> Политикой конфиденциальности</a></b></span>
      <style>
        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
      </style>
    `;
    
    let html = this.#template.replace('{{title}}', options.title || '');
    html = html.replace('{{content}}', options.content || formHtml);
    
    const buttons = (options.footerButtons || []).map((item) => {
      let btn = this.#templateBtn.replace('{{class}}', item.class);
      btn = btn.replace('{{action}}', item.action);
      return btn.replace('{{text}}', item.text);
    });
    
    const footer = buttons.length ? this.#templateFooter.replace('{{buttons}}', buttons.join('')) : '';
    html = html.replace('{{footer}}', footer);
    this.#elem.innerHTML = html;
    document.body.append(this.#elem);
    
    this.#elem.addEventListener('click', this.#handlerCloseModal.bind(this));
    
    setTimeout(() => {
      this.#setupFormHandlers();
    }, 0);
  }

  #setupFormHandlers() {
    const form = this.#elem.querySelector('#bitrixForm');
    if (form) {
      form.addEventListener('submit', this.#handleFormSubmit.bind(this));
    }
  }

  async #handleFormSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('#submitBtn');
    const btnText = form.querySelector('#btnText');
    const spinner = form.querySelector('#loadingSpinner');
    const successMessage = this.#elem.querySelector('#successMessage');
    const errorMessage = this.#elem.querySelector('#errorMessage');
    
    successMessage.style.display = 'none';
    errorMessage.style.display = 'none';

    const formData = new FormData(form);
    const data = {
      name: formData.get('name'),
      phone: formData.get('phone'),
      date: formData.get('date'),
      time: formData.get('time')
    };

    if (!data.name || !data.phone || !data.date || !data.time) {
      alert('Пожалуйста, заполните все поля');
      return;
    }
    
    submitBtn.disabled = true;
    btnText.textContent = 'Отправка...';
    spinner.style.display = 'inline-block';
    
    try {
      const bitrixData = {
        fields: {
          TITLE: `Заявка от ${data.name}`,
          TYPE_ID: "SALE",
          CATEGORY_ID: 0,
          STAGE_ID: "NEW",
          ASSIGNED_BY_ID: 16,
          CURRENCY_ID: "RUB",
          OPPORTUNITY: 0,
          SOURCE_ID: "WEB",
          SOURCE_DESCRIPTION: "Заявка с формы на сайте",
          COMMENTS: `Имя: ${data.name}\nТелефон: ${data.phone}\nДата: ${data.date}\nВремя: ${data.time}\n\nЗаявка создана: ${new Date().toLocaleString()}`,
          BEGINDATE: new Date().toISOString(),
        },
        params: {
          REGISTER_SONET_EVENT: "N"
        }
      };
      
      const response = await fetch(this.#webhookUrl + 'crm.deal.add', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify(bitrixData)
      });
      
      const result = await response.json();
      
      if (result.result) {
        successMessage.style.display = 'block';
        form.style.display = 'none';
        
        setTimeout(() => {
          this.hide();
        }, 3000);
      } else {
        throw new Error(result.error_description || 'Ошибка при создании сделки');
      }
      
    } catch (error) {
      console.error('❌ Ошибка отправки формы:', error);
      errorMessage.style.display = 'block';
      
    } finally {
      submitBtn.disabled = false;
      btnText.textContent = 'Отправить';
      spinner.style.display = 'none';
    }
  }

  #handlerCloseModal(e) {
    if (e.target.closest('.itc-modal-btn-close') || e.target.classList.contains('itc-modal-backdrop')) {
      this.hide();
    }
  }

  show() {
    if (this.#disposed) {
      return;
    }
    this.#elem.classList.add('itc-modal-show');
    const scrollbarWidth = Math.abs(window.innerWidth - document.documentElement.clientWidth);
    if (window.innerWidth > document.body.clientWidth + scrollbarWidth) {
      return;
    }
    document.body.style.paddingRight = `${scrollbarWidth}px`;
    document.body.style.overflow = 'hidden';
    this.#elem.dispatchEvent(this.#eventShowModal);
  }

  hide() {
    this.#elem.classList.remove('itc-modal-show');
    this.#elem.dispatchEvent(this.#eventHideModal);
    document.body.style.paddingRight = '';
    document.body.offsetHeight;
    this.#elem.addEventListener('transitionend', () => {
      document.body.style.overflow = '';
    }, { once: true });
  }

  dispose() {
    this.#elem.remove();
    this.#elem.removeEventListener('click', this.#handlerCloseModal);
    this.#disposed = true;
  }

  setBody(html) {
    this.#elem.querySelector('.itc-modal-body').innerHTML = html;
    setTimeout(() => this.#setupFormHandlers(), 0);
  }

  setTitle(text) {
    this.#elem.querySelector('.itc-modal-title').innerHTML = text;
  }
}
class ItcModalForm extends ItcModal {
  // Можно оставить пустым или добавить специфичные методы
  constructor(options = []) {
    super(options);
  }
}