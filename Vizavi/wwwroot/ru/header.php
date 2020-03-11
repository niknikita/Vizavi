<?php
    $link = "";
    $url = $_SERVER['REQUEST_URI'];
    $url_array = explode("/", $url);
    if (is_array($url_array) && isset($url_array[2]) && $url_array[2] != "") {
        if (is_array($url_array) && isset($url_array[1]) && $url_array[1] != "") {
            $link = "/" . $url_array[2];
        } else {
            $link = "/ru" . $url_array[2];
        }
    } else {
        if (is_array($url_array) && isset($url_array[1]) && $url_array[1] != "") {
            $link = "/";
        } else {
            $link = "/ru";
        }
    }
?>
<header class="header">
    <!-- begin .header__main -->
    <div class="header__main">
        <!-- begin .header__wrap -->
        <div class="header__wrap flex">
            <!-- begin .header__base -->
            <div class="header__base flex"><a class="header__logo header-logo" href="/ru/"><svg fill="none" height="40"
                        preserveaspectratio="xMidYMid" viewbox="0 0 133 40" width="133"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path
                                d="M62.855 10.42h5.254l-6.976 19.573h-4.488L49.668 10.42h5.254l3.036 9.567.878 4.646h.08l.877-4.62 3.062-9.593zM75.105 30.02h-4.897V10.447h4.897V30.02zM91.975 10.447l1.042 1.66-8.566 13.74 11.107-.054.218 4.227H78.18l-.904-1.827 8.376-13.16h-7.775v-4.586h14.098z"
                                fill="#000"></path>
                            <path
                                d="M110.164 30.02h-5.253l-1.261-3.927h-5.175l-1.2 3.927H92.02l6.758-19.573h4.462l6.923 19.573zm-7.695-8.32l-1.34-5.72h-.139l-1.425 5.72h2.904zM120.513 10.42h5.253l-6.976 19.573h-4.488l-6.976-19.573h5.254l3.036 9.567.877 4.646h.08l.877-4.62 3.063-9.593zM132.763 30.02h-4.898V10.447h4.898V30.02z"
                                fill="#000"></path>
                            <path
                                d="M27.711 2.433L8.896 32.393l18.842-.106-2.668 7.573.013.02H40V-.207H26.041l1.67 2.64zM0 26.553l11.118-17.14H0v17.14z"
                                fill="#EA252C"></path>
                        </g>
                        <defs>
                            <clippath id="clip0">
                                <path d="M0 0h133v40H0z" fill="#fff"></path>
                            </clippath>
                        </defs>
                    </svg> </a>

                <nav class="header-menu__box">
                    <ul class="header__menu header-menu">
                        <li class="header-menu__item"><a class="header-menu__link js_header-link" data-href="#trading"
                                href="#a"><span>Трейдинг</span> </a></li>
                        <li class="header-menu__item"><a class="header-menu__link"
                                href="/ru/investor"><span>Инвестору</span> </a></li>
                        <li class="header-menu__item"><a class="header-menu__link js_header-link" data-href="#about"
                                href="#a"><span>О компании</span> </a></li>
                    </ul>
                </nav>
            </div>
            <!-- end .header__base -->
            <!-- begin .header__aside -->

            <div class="header__aside flex">
                <!-- begin .header__search-action -->
                <!-- end .header__search-action -->
                <!-- begin .header__language -->
                <div class="header__language">
                    <!-- begin .header__language-action --><button
                        class="header__language-action language-action js_language-action"
                        title="Сменить язык интерфейса">
                            <span class="language-action__box">
                                <span class="language-action__flag">
                                    <img alt="Русский язык" src="/ru/assets/images/language/ru.png" style="width: 20px; border: 1px solid #ccc;" />
                                </span>
                                <span class="language-action__icon">
                                    <svg fill="none" height="6"
                                    width="9" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.815 5.076L8.865.968a.446.446 0 0 0 0-.639C8.82.238 8.685.192 8.55.192a.406.406 0 0 0-.315.137L4.5 4.118.765.329A.406.406 0 0 0 .45.192.406.406 0 0 0 .135.33.417.417 0 0 0 0 .65c0 .137.045.228.135.32l4.05 4.107c.09.091.18.137.315.137s.27-.046.315-.137z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </span>
                        </button><!-- end .header__language-action -->
                    <!-- begin .header__language-list -->

                    <ul class="header__language-list language-list js_language-list">
                        <li class="language-list__item is-active"><a class="language-list__link"
                                href="javascript:void(0);"><span class="language-list__flag"><img alt="Русский язык"
                                        src="/ru/assets/images/language/ru.png" /> </span> <span
                                    class="language-list__name">Русский</span> </a></li>
                        <li class="language-list__item"><a class="language-list__link" href="<? echo htmlspecialchars($link, ENT_QUOTES, 'UTF-8') ?>"><span
                                    class="language-list__flag"><img alt="English language"
                                        src="/ru/assets/images/language/en-gb.png" />
                                </span> <span class="language-list__name">English</span> </a></li>
                    </ul>
                    <!-- end .header__language-list -->
                </div>
                <!-- end .header__language -->
                <!-- begin .header__user-action -->

                <div class="header__user-action"><a class="user-action" href="https://my.vizavi.com/login"
                        title="Авторизация пользователя"><span class="user-action__icon"><svg fill="none" viewbox="0 0 15 15" height="20"
                                width="20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.5 0C3.375 0 0 3.375 0 7.5S3.375 15 7.5 15 15 11.625 15 7.5 11.625 0 7.5 0zm0 2.25c1.275 0 2.25.975 2.25 2.25S8.775 6.75 7.5 6.75 5.25 5.775 5.25 4.5s.975-2.25 2.25-2.25zm0 11.427c-2.426 0-4.099-1.31-5.074-2.736C3.75 8.824 6 8.382 7.5 8.382s3.75.662 5.073 2.56c-.975 1.424-2.647 2.735-5.073 2.735z"
                                    fill="currentColor"></path>
                            </svg> </span> <span class="user-action__name">Войти</span> </a></div>
                <!-- end .header__user-action -->
                <!-- begin .header-toggle__box -->

                <div class="header-toggle js_header-toggle" data-href="#mobile_nav"><button class="toggle-button"
                        title="Открыть меню сайта">
                        <span class="toggle-button__item"></span>
                        <span class="toggle-button__item"></span>
                        <span class="toggle-button__item"></span>
                    </button></div>
                <!-- end .header-toggle__box -->
            </div>
            <!-- end .header__aside -->
        </div>
        <!-- end .header__wrap -->
    </div>
    <!-- end .header__main -->
    <!-- begin .header__cloud -->

    <div class="header__cloud header-cloud js_header__cloud ">
        <!-- begin .header__wrap -->
        <div class="header__wrap header-cloud__wrap">
            <!-- begin .header__finder -->
            <div class="header__finder header-finder js_header-finder">
                <!-- begin .header__finder-item -->
                <div class="header__finder-item has_title" id="trading">
                    <div class="finder-menu-icon">
                        <div><svg fill="none" height="42" viewbox="0 0 56 42" width="56"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.26471 26.2754C2.26471 26.4783 2.36765 26.7826 2.57353 26.9855C2.88235 27.2898 3.60294 27.2898 3.91176 26.9855C4.11765 26.7826 4.22059 26.5797 4.22059 26.2754C4.22059 26.0725 4.11765 25.7681 3.91176 25.5652C3.70588 25.4638 3.5 25.3623 3.19118 25.3623C2.88235 25.3623 2.67647 25.4638 2.47059 25.6667C2.36765 25.7681 2.26471 26.0725 2.26471 26.2754Z"
                                    fill="#EA252C"></path>
                                <path
                                    d="M2.26471 33.1739C2.26471 33.6812 2.67647 34.0869 3.19118 34.0869C3.70588 34.0869 4.11765 33.6812 4.11765 33.1739V3.24638L4.73529 3.85507C5.14706 4.26087 5.76471 4.26087 6.07353 3.85507C6.27941 3.65217 6.38235 3.44927 6.38235 3.14493C6.38235 2.94203 6.27941 2.63768 6.07353 2.43478L3.91176 0.304348C3.5 -0.101449 2.88235 -0.101449 2.57353 0.304348L0.308824 2.53623C-0.102941 2.94203 -0.102941 3.55072 0.308824 3.85507C0.720588 4.26087 1.33824 4.26087 1.64706 3.85507L2.26471 3.24638V33.1739Z"
                                    fill="#EA252C"></path>
                                <path
                                    d="M55.6912 38.1449L53.4265 35.913C53.0147 35.5072 52.3971 35.5072 52.0882 35.913C51.8824 36.1159 51.7794 36.3188 51.7794 36.6232C51.7794 36.8261 51.8824 37.1304 52.0882 37.3333L52.7059 37.942H47.9706V21.913C47.9706 21.4058 47.5588 21 47.0441 21C46.5294 21 46.1176 21.4058 46.1176 21.913V37.8406H35.4118V30.4348C35.4118 29.9275 35 29.5217 34.4853 29.5217C33.9706 29.5217 33.5588 29.9275 33.5588 30.4348V37.8406H23.6765V19.5797C23.6765 19.0725 23.2647 18.6667 22.75 18.6667C22.2353 18.6667 21.8235 19.0725 21.8235 19.5797V37.8406H12.3529V30.6377C12.3529 30.1304 11.9412 29.7246 11.4265 29.7246C10.9118 29.7246 10.5 30.1304 10.5 30.6377V37.8406H4.22059V31.1449C4.22059 30.6377 3.80882 30.2319 3.29412 30.2319C2.77941 30.2319 2.36765 30.6377 2.36765 31.1449V38.7536C2.36765 39.2609 2.77941 39.6667 3.29412 39.6667H52.7059L52.0882 40.2754C51.8824 40.4783 51.7794 40.6812 51.7794 40.9855C51.7794 41.1884 51.8824 41.4927 52.0882 41.6956C52.5 42.1014 53.1176 42.1014 53.4265 41.6956L55.6912 39.4638C55.8971 39.2609 56 39.058 56 38.7536C56 38.5507 55.8971 38.3478 55.6912 38.1449Z"
                                    fill="#EA252C"></path>
                                <path
                                    d="M11.2206 27.5942C13.3824 27.5942 15.1324 25.8696 15.1324 23.7391C15.1324 23.1304 14.9265 22.4203 14.6176 21.8116L14.5147 21.7101L20.4853 15.8261L20.5882 15.9275C21.8235 16.6377 23.4706 16.6377 24.7059 15.8261L24.8088 15.7246L30.8824 21.7101L30.7794 21.8116C30.4706 22.4203 30.2647 23.029 30.2647 23.7391C30.2647 25.8696 32.0147 27.5942 34.1765 27.5942C36.3382 27.5942 38.0882 25.8696 38.0882 23.7391C38.0882 23.1304 37.8824 22.4203 37.5735 21.913L37.4706 21.8116L46.5294 12.8841L46.6324 12.9855C47.25 13.3913 47.9706 13.5942 48.6912 13.5942C50.8529 13.5942 52.6029 11.8696 52.6029 9.73913C52.6029 7.60869 50.8529 5.88406 48.6912 5.88406C46.5294 5.88406 44.7794 7.60869 44.7794 9.73913C44.7794 10.3478 44.8824 10.9565 45.1912 11.4638L45.2941 11.5652L36.1324 20.5942L36.3382 20.2899C35.2059 19.6812 33.6618 19.6812 32.5294 20.2899H32.4265L26.25 14.2029L26.3529 14.1014C26.5588 13.5942 26.6618 13.087 26.6618 12.4783C26.6618 10.3478 24.9118 8.62319 22.75 8.62319C20.5882 8.62319 18.8382 10.3478 18.8382 12.4783C18.8382 13.087 19.0441 13.7971 19.3529 14.3043L19.4559 14.4058L13.4853 20.2899H13.1765C12.5588 19.9855 11.9412 19.7826 11.3235 19.7826C9.16177 19.7826 7.41176 21.5072 7.41176 23.6377C7.30882 25.7681 9.05882 27.5942 11.2206 27.5942ZM49.1029 7.50724C50.2353 7.50724 51.1618 8.42029 51.1618 9.53623C51.1618 10.6522 50.2353 11.5652 49.1029 11.5652C47.9706 11.5652 47.0441 10.6522 47.0441 9.53623C47.0441 8.42029 47.9706 7.50724 49.1029 7.50724ZM34.4853 21.7101C35.6176 21.7101 36.5441 22.6232 36.5441 23.7391C36.5441 24.8551 35.6176 25.7681 34.4853 25.7681C33.3529 25.7681 32.4265 24.8551 32.4265 23.7391C32.4265 22.6232 33.3529 21.7101 34.4853 21.7101ZM22.6471 10.4493C23.7794 10.4493 24.7059 11.3623 24.7059 12.4783C24.7059 13.5942 23.7794 14.5072 22.6471 14.5072C21.5147 14.5072 20.5882 13.5942 20.5882 12.4783C20.6912 11.3623 21.6176 10.4493 22.6471 10.4493ZM11.2206 21.7101C11.7353 21.7101 12.25 21.913 12.6618 22.3188C13.0735 22.7246 13.2794 23.2319 13.2794 23.7391C13.2794 24.8551 12.3529 25.7681 11.2206 25.7681C10.0882 25.7681 9.16176 24.8551 9.16176 23.7391C9.26471 22.6232 10.0882 21.7101 11.2206 21.7101Z"
                                    fill="#EA252C"></path>
                            </svg>

                            <div class="finder-menu-icon_text">Трейдинг</div>
                        </div>
                    </div>

                    <ul class="finder-menu">
                        <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/trading-account">Торговый счет</a></li>
                        <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/trading-terminal">Типы счетов</a></li>
                    </ul>
                </div>
                <!-- end .header__finder-item -->
                <!-- begin .header__finder-item -->

                <div class="header__finder-item has_title" id="about">
                    <div class="finder-menu-icon">
                        <div><svg fill="none" height="75" style="fill: none !important" viewbox="0 0 75 75" width="75"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="37.5" cy="37.5" r="36.5" stroke="#EA252C" stroke-width="2"></circle>
                                <path d="M26.8895 44.8574L25.978 46.2834H37.3755L38.0591 44.8574H26.8895Z"
                                    fill="#E8272E"></path>
                                <path d="M29.967 39.4131L29.1691 40.839H40.3386L41.1365 39.4131H29.967Z" fill="#E8272E">
                                </path>
                                <path d="M28.3712 42.1353L27.5732 43.5612H38.8571L39.655 42.1353H28.3712Z"
                                    fill="#E8272E"></path>
                                <path d="M22.2163 53.0244L21.4183 54.3205H50.938L51.3937 53.0244H22.2163Z"
                                    fill="#E8272E"></path>
                                <path d="M21.9885 55.7466L22.6721 57.0427H50.1401L50.5959 55.7466H21.9885Z"
                                    fill="#E8272E"></path>
                                <path d="M25.2937 47.5801L24.4957 49.006H52.5338L52.9895 47.5801H25.2937Z"
                                    fill="#E8272E"></path>
                                <path d="M31.4486 36.6909L30.6506 38.1168H41.8202L42.5038 36.6909H31.4486Z"
                                    fill="#E8272E"></path>
                                <path d="M23.6987 50.3022L22.9008 51.5984H51.7368L52.1925 50.3022H23.6987Z"
                                    fill="#E8272E"></path>
                                <path d="M37.6034 25.8018L36.9198 27.2277H47.7479L48.5458 25.8018H37.6034Z"
                                    fill="#E8272E"></path>
                                <path d="M23.1286 17.7642L22.6729 19.0603H52.1925L52.9905 17.7642H23.1286Z"
                                    fill="#E8272E"></path>
                                <path d="M22.2164 20.4868L21.7606 21.7829H50.7102L51.5081 20.4868H22.2164Z"
                                    fill="#E8272E"></path>
                                <path d="M32.9301 33.9692L32.2465 35.3952H43.3025L44.1005 33.9692H32.9301Z"
                                    fill="#E8272E"></path>
                                <path d="M24.0401 15.0425L23.5844 16.3386H52.4204L51.7368 15.0425H24.0401Z"
                                    fill="#E8272E"></path>
                                <path d="M34.5259 31.2461L33.728 32.672H44.784L45.5819 31.2461H34.5259Z" fill="#E8272E">
                                </path>
                                <path d="M36.1219 28.5239L35.324 29.9499H46.2656L47.0635 28.5239H36.1219Z"
                                    fill="#E8272E"></path>
                                <path d="M21.1904 23.0801L20.8483 24.506H49.2286L50.0265 23.0801H21.1904Z"
                                    fill="#E8272E"></path>
                            </svg>

                            <div class="finder-menu-icon_text">О компании</div>
                        </div>
                    </div>

                    <ul class="finder-menu">
                        <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/about">О нас</a></li>
                        <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/partners">Партнерам</a></li>
                        <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/safety">Сохранность
                                средств</a></li>
                        <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/documents">Регламентирующие
                                документы</a></li>
                        <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/contact-form">Обратная
                                связь</a></li>
                    </ul>
                </div>
                <!-- end .header__finder-item -->
            </div>
            <!-- end .header__finder -->

            <div class="header__finder header-finder js_header-finder">
                <!-- begin .header__finder-item -->
                <div class="header__finder-item has_title" id="mobile_nav">
                    <ul class="finder-menu finder-menu_mobile">
                        <li class="finder-menu__item has_child"><a class="finder-menu__link" href="#a">Трейдинг</a>

                            <ul class="finder-menu">
                                <li class="finder-menu__item"><a class="finder-menu__link"
                                        href="/ru/trading-account">Торговый счет</a></li>
                                <li class="finder-menu__item"><a class="finder-menu__link"
                                        href="/ru/trading-terminal">Типы счетов</a></li>
                            </ul>
                        </li>
                        <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/investor">Инвестору</a></li>
                        <li class="finder-menu__item has_child"><a class="finder-menu__link" href="#a">О
                                компании</a>
                            <ul class="finder-menu">
                                <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/about">О
                                        нас</a></li>
                                <li class="finder-menu__item"><a class="finder-menu__link"
                                        href="/ru/partners">Партнерам</a></li>
                                <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/safety">Сохранность
                                        средств</a></li>
                                <li class="finder-menu__item"><a class="finder-menu__link"
                                        href="/ru/documents">Регламентирующие документы</a></li>
                                <li class="finder-menu__item"><a class="finder-menu__link" href="/ru/contact-form">Обратная
                                        связь</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end .header__wrap -->
    </div>
    <!-- end .header__cloud -->
</header>