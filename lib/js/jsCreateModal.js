
        // создаём модальное окно
        const modal = new ItcModal();
        // при клике по кнопке #show-modal
        document.querySelector('#show-modal').addEventListener('click', () => {
            // откроем модальное окно
            modal.show();
        });
     // создаём модальное окно
        const modalForm = new ItcModalForm();
        // при клике по кнопке #show-modal
        document.querySelector('#show-modalForm').addEventListener('click', () => {
            // откроем модальное окно
            modal.show();
        });
