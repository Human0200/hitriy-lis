<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/minstyles.css">
    <link rel="stylesheet" href="/style/sliders.css">
    <title><?= (isset($P_TITLE) ? $P_TITLE : "Хитрый Лис"); ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <script defer src="/lib/js/sliders.js"></script>
    <script src="/lib/js/modal.js"></script>
</head>

<body class="page">
    <div class="container">
        <header>
            <div class="header-top">
                <div class="header-top__container">
                    <div class="header-top__center">
                        <div class="header-top__center-pd">
                            <div class="header-top__adress">
                                <span>Режим работы: c <b>10:00-21:00</b></span> <br>
                                <span>Горно-Алтайск,  Проспект Коммунистический 81/3</span>
                            </div>
                            <div class="header-top__contacts">
                                <div class="phone-icon"><a href="/"><img src="/img/icon/i-03 1.svg" alt=""></a></div>
                                <div class="header-top__phone">
                                    <span>89030744166</span>
                                </div>
                                <div class="tg"><a href="https://t.me/hitryyy_lis"><img src="/img/icon/tg.png" alt=""></a></div>
                                <div class="vk"><a href="https://vk.com/hitryyliss"><img src="/img/icon/vk.png" alt=""></a></div>
                            </div>

                            <div class="burger-menu">
                                <div class="mmenu">
                                    <span class="toggle-button">
                                        <div class="menu-bar menu-bar-top"></div>
                                        <div class="menu-bar menu-bar-middle"></div>
                                        <div class="menu-bar menu-bar-bottom"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="header">
                <div class="header__container">
                    <div class="header__center">
                        <div class="header__menu">
                            <div class="logo">
                                <div class="logo__container"><a href="/"><img src="/img/logo.png" alt=""></a></div>
                            </div>
                            <div class="header-menu__wrap">
                                <div class="el-menu"><a href="/anons">Афиша</a></div>
                                <div class="el-menu"><a href="/sale">Акции</a></div>
                                <div class="el-menu"><a href="/price">Цены</a></div>
                                <div class="el-menu"><a href="#map" class="scrollto">Контакты</a></div>
                                <div class="el-menu"><a href="/prazdniki">Праздники</a></div>
                                <!-- <div class="el-menu"><a href="/park">Парк</a></div> -->
                            </div>
                        </div>
                        <button id="show-modal" class="btn header-btn__modal ">Заказать праздник</button>
                    </div>
                </div>
            </div>
            <div class="menu-wrap">
                <div class="sidebar">
                    <div class="package-modal_title">
                        <div class="package-modal_title-wrap">
                            <h1 class="mmenu-h1">Хитрый Лис</h1>
                        </div>
                        <div class="mmenu-logo"><a href="/"><img src="/img/logo.png" alt=""></a></div>

                    </div>
                    <ul class="menu-sidebar">
                        <li><a href="/anons" class="scrollto">Афиша</a></li>
                        <li><a href="/sale" class="scrollto">Акции</a></li>
                        <li><a href="/price" class="scrollto">Цены</a></li>
                        <li><a href="/prazdniki" class="scrollto">Праздники</a></li>
                        <!-- <li><a href="/park" class="scrollto">Парк</a></li> -->
                    </ul>
                    <div class="messenger">
                        <div class="messenger-wrap">
                            <a href="https://vk.com/hitryyliss" target="_blank">
                                <div class="icon-messenger">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xml:space="preserve" width="100%" height="100%"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 21000 29700">
                                        <defs>
                                            <style type="text/css">
                                                <![CDATA[
                                                .fil0 {
                                                    fill: #FC8700
                                                }
                                                ]]>
                                            </style>
                                        </defs>
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M20889.43 19679.3c-25.56,-54.64 -49.21,-100.34 -71.26,-136.77 -364.61,-656.05 -1060.61,-1461.65 -2088.3,-2416.49l-22.05 -21.73 -10.86 -11.18 -10.86 -10.55 -10.88 0c-466.55,-444.82 -761.82,-743.61 -885.49,-897 -225.93,-291.12 -277.06,-586.39 -153.07,-885.17 87.88,-225.93 415.74,-703.34 984.24,-1432.57 298.79,-386.02 535.58,-695.68 710.69,-929.59 1260.97,-1676.4 1807.41,-2747.55 1639.97,-3214.42l-65.83 -109.29c-43.78,-65.83 -156.9,-125.91 -339.05,-180.55 -182.15,-54.64 -415.42,-63.27 -699.51,-27.16l-3148.91 22.37c-72.86,-7.35 -145.72,-5.43 -218.9,5.11 -72.86,11.18 -120.15,22.05 -142.2,32.91 -22.05,11.18 -39.94,20.13 -54.64,27.16l-43.78 32.91c-36.43,21.73 -76.37,60.08 -120.15,115.04 -43.78,54.64 -80.53,118.24 -109.29,191.41 -342.56,881.98 -732.42,1701.96 -1169.9,2460.27 -269.71,451.85 -517.68,843.95 -743.29,1175.33 -225.93,332.02 -415.42,576.16 -568.49,732.42 -153.07,156.58 -291.76,282.81 -415.42,377.08 -123.99,95.23 -218.9,134.85 -284.09,120.47 -65.83,-14.38 -127.82,-29.08 -185.98,-44.1 -101.94,-65.51 -184.38,-154.67 -246.06,-267.79 -61.99,-112.8 -103.86,-255.01 -125.91,-426.29 -21.73,-171.28 -34.83,-318.92 -38.03,-442.91 -3.83,-123.99 -1.92,-298.79 5.43,-524.71 7.35,-225.93 10.86,-378.67 10.86,-459.2 0,-276.74 5.43,-577.44 16.62,-902.11 10.86,-324.35 20.13,-581.27 27.16,-770.77 7.35,-189.18 10.86,-389.86 10.86,-601.41 0,-210.91 -12.78,-377.08 -38.35,-497.55 -25.56,-120.15 -63.91,-236.47 -114.72,-349.91 -51.13,-112.8 -125.91,-200.36 -224.33,-262.04 -98.42,-61.99 -220.49,-111.21 -366.21,-147.64 -386.66,-87.56 -878.46,-134.53 -1476.03,-142.2 -1355.88,-14.06 -2226.99,73.5 -2613.34,262.68 -153.07,80.53 -291.76,189.5 -415.42,328.18 -131.34,160.42 -149.55,248.3 -54.64,262.04 437.47,65.83 747.12,222.73 929.27,470.39l65.83 131.02c50.81,95.23 101.94,262.68 153.07,502.98 51.13,240.63 83.72,506.5 98.42,798.25 36.43,532.06 36.43,987.43 0,1366.74 -36.43,379.31 -70.94,674.26 -103.86,885.17 -32.91,211.55 -82.13,382.51 -147.64,513.85 -65.83,131.66 -109.29,211.87 -131.34,240.95 -22.05,29.08 -39.94,47.29 -54.64,54.64 -94.91,36.11 -193.01,54.64 -295.27,54.64 -102.26,0 -225.93,-51.13 -371.96,-153.39 -145.72,-101.62 -297.19,-242.22 -453.77,-420.86 -156.9,-178.31 -333.3,-428.21 -530.46,-749.04 -196.85,-320.52 -401.04,-699.51 -612.27,-1136.98l-174.8 -317.32c-109.29,-203.88 -258.84,-501.07 -448.34,-890.92 -189.5,-389.86 -357.26,-766.94 -502.98,-1131.87 -58.48,-152.75 -145.72,-269.39 -262.36,-349.91l-54.64 -32.89c-36.43,-29.08 -94.91,-60.08 -175.12,-92.67 -80.53,-32.91 -163.93,-56.56 -251.49,-71.26l-2995.84 21.73c-306.14,0 -513.85,69.66 -623.14,208.03l-43.78 65.51c-22.05,36.75 -32.91,95.23 -32.91,175.12 0,80.52 22.05,178.63 65.83,294.95 437.47,1028.01 912.97,2019.28 1426.82,2973.8 514.17,955.16 960.27,1724.33 1339.58,2307.2 378.99,583.51 765.34,1133.47 1159.03,1651.15 393.69,517.68 654.13,849.06 781.64,994.78 127.5,146.04 227.52,255.33 300.7,328.18l273.22 262.68c174.8,174.8 432.04,384.43 770.77,628.57 339.05,244.46 714.21,484.77 1126.12,721.24 411.59,237.11 891.24,429.8 1437.69,579.68 546.76,149.55 1078.82,209.63 1596.19,180.23l1257.45 -0.01c255.33,-21.73 448.34,-101.62 579.36,-240.63l43.78 -54.64c29.08,-43.46 56.56,-111.21 82.13,-201.96 25.24,-91.07 38.35,-191.41 38.35,-300.7 -7.67,-313.49 16.3,-596.29 70.94,-847.46 54.64,-251.49 116.64,-440.99 185.98,-568.81 69.34,-127.18 147.32,-234.87 235.19,-322.43 87.56,-87.56 149.23,-139.97 185.98,-158.5 36.43,-17.9 65.83,-30.68 87.56,-38.35 174.8,-58.16 380.59,-1.6 617.7,169.37 236.79,171.6 459.2,382.51 666.92,634.32 207.71,251.49 457.29,533.66 749.04,847.46 291.44,313.49 546.44,546.44 765.34,699.51l218.9 131.66c145.72,87.24 335.22,167.45 568.49,240.63 233.28,72.54 437.47,91.07 612.27,54.64l2799 -44.1c277.06,0 492.12,-45.38 645.19,-136.77 153.07,-90.43 244.14,-191.41 273.22,-300.7 29.08,-109.29 31,-232.64 5.43,-371.64 -25.57,-138.39 -51.13,-234.89 -76.38,-289.54z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://t.me/hitryyy_lis" target="_blank">
                                <div class="icon-messenger">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xml:space="preserve" width="100%" height="100%"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 21000 29700">
                                        <defs>
                                            <style type="text/css">
                                                <![CDATA[
                                                .fil0 {
                                                    fill: #FC8700
                                                }
                                                ]]>
                                            </style>
                                        </defs>
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M20333.38 5876.42l-20026.85 7634.43c-403.45,156.72 -409.04,783.25 -15.44,962.97l5129.92 2104 1910.49 6025.53c113.68,324.6 518.12,433.68 779.31,209.94l2934.24 -2730.55 5578.38 3699.76c289.45,181.03 670.89,17.41 738.57,-317.05l3627.15 -17035.76c77.55,-379.14 -295.35,-693.23 -655.77,-553.27zm-12059.61 11842.44l-325.92 3097.53 -1548.77 -4768.19 10922.52 -7172.81 -9047.83 8843.47z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://wa.me/79030744166" target="_blank">
                                <div class="icon-messenger">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xml:space="preserve" width="100%" height="100%"
                                        style=" shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 21000 29700">
                                        <defs>
                                            <style type="text/css">
                                                <![CDATA[
                                                .fil0 {
                                                    fill: #FC8700
                                                }
                                                ]]>
                                            </style>
                                        </defs>
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <g id="_3203939706352">
                                                <path class="fil0"
                                                    d="M17940.84 7365.9c-1974.09,-1976.52 -4599.56,-3065.44 -7396.7,-3066.49 -5763.15,0 -10454.12,4690.27 -10456.22,10455.51 -0.7,1842.89 480.79,3641.83 1395.6,5227.23l-1483.52 5418.44 5542.99 -1453.87c1527.14,833.18 3246.87,1272.09 4996.61,1272.79l4.19 0c5762.8,0 10453.77,-4690.97 10456.21,-10455.86 1.74,-2794.35 -1084.73,-5421.23 -3059.16,-7397.75zm-7396.35 16087.47l-3.49 0c-1559.59,-0.7 -3089.17,-419.73 -4423.37,-1211.38l-317.5 -188.41 -3289.44 862.83 877.83 -3207.1 -206.54 -329.01c-869.81,-1383.74 -1329.31,-2982.75 -1328.61,-4625.03 1.74,-4791.8 3900.7,-8690.07 8694.26,-8690.07 2321.24,0.7 4503.26,906.1 6144.15,2548.72 1640.88,1642.63 2543.84,3826.05 2543.14,6148.33 -1.75,4792.51 -3900.37,8691.12 -8690.43,8691.12z">
                                                </path>
                                                <path class="fil0"
                                                    d="M15311.52 16944.28c-261.33,-130.84 -1545.63,-762.7 -1785.33,-849.92 -239.35,-87.23 -413.8,-130.84 -587.9,130.84 -174.1,261.68 -674.77,849.92 -827.24,1024.37 -152.47,174.45 -304.94,196.08 -565.92,65.24 -261.33,-130.84 -1103.22,-406.47 -2101.08,-1296.86 -776.65,-692.92 -1301.05,-1548.42 -1453.52,-1809.75 -152.47,-261.68 -16.4,-402.98 114.44,-533.12 117.58,-117.23 261.33,-305.29 391.82,-457.76 130.49,-152.47 174.1,-261.68 261.33,-435.78 87.23,-174.45 43.61,-326.92 -21.63,-457.76 -65.24,-130.84 -587.9,-1416.89 -805.61,-1939.89 -212.13,-509.4 -427.4,-440.31 -587.9,-448.34 -152.12,-7.68 -326.57,-9.07 -500.67,-9.07 -174.1,0 -457.06,65.24 -696.76,326.92 -239.35,261.68 -914.47,893.54 -914.47,2179.58 0,1286.05 936.1,2528.49 1066.94,2702.59 130.49,174.45 1842.2,2813.19 4463.14,3945.02 623.49,269.35 1109.85,429.85 1489.46,550.22 625.93,198.87 1195.33,170.96 1645.77,103.62 502.07,-75.01 1545.63,-631.86 1763.35,-1242.09 217.71,-610.23 217.71,-1133.58 152.47,-1242.44 -65.26,-109.19 -239.36,-174.78 -500.69,-305.62z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="btn-wrapper btn-call">
                        <button id="show-modalForm" class="btn header-btn__modal-form ">Заказать праздник</button>
                    </div>
                    <div class="btn-wrapper btn-call">
                        <a href="tel:+79030744166" id="show-modalForm" class="btn header-btn__modal-form ">Позвонить</a>
                    </div>
                </div>
            </div>
        </header>