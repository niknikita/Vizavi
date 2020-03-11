<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <title>Home Vizavi</title>
    <meta name="description" content="European broker with a clean state" />
    <meta name="keywords" content="" />
    <?php
        include 'head_tag_in.php';
    ?>
</head>

<body>
    <!-- begin .wrap-overlay -->
    <div class="wrap-overlay"></div>
    <!-- end .wrap-overlay -->

    <main>
        
        <?php
            include 'header.php';
        ?>

        <!-- begin .headlie -->
        <div class="headline-slider">
            <!-- begin .headline-slider__body -->
            <div class="headline-slider__list owl-carousel js_headline-slider">
                <!-- begin .headline-slider__item -->
                <div class="headline-slider__item">
                    <!-- begin .headline -->
                    <div class="headline headline--infinite">
                        <!-- begin .headline__wrap -->
                        <div class="headline__wrap">
                            <!-- begin .headline__content -->
                            <div class="headline__content">
                                <h1 class="h2"><span>Limitless</span> Trading with Vizavi</h1>

                                <p>Direct access to global markets from one trading account.</p>
                                
                                <ul class="horisontal-list">
                                    <li>Currencies</li>
                                    <li>Cryptocurrencies</li>
                                    <li>Stocks</li>
                                    <li>Commodities</li>
                                    <li>Indices</li>
                                    <li>Metals</li>
                                </ul>
                            </div>
                            <!-- end .headline__content -->
                            <!-- begin .headline__actions -->

                            <div class="headline__actions headline-actions">
                                <!-- begin .headline__actions__buttons -->
                                <div class="headline__actions__buttons"><a class="button button-red"
                                        href="https://my.vizavi.com/registration">Get access</a></div>
                                <!-- end .headline__actions__buttons -->
                            </div>
                            <!-- end .headline__actions -->
                            <!-- begin .headline__picture -->
                            <!-- end .headline__picture -->
                        </div>
                        <!-- end .headline__wrap -->
                    </div>
                    <!-- end .headline -->
                </div>
                <!-- end .headline-slider__item -->
                <!-- begin .headline-slider__item -->

                <div class="headline-slider__item">
                    <!-- begin .headline--bitcoin -->
                    <div class="headline--main headline--bitcoin">
                        <!-- begin .headline__wrap -->
                        <div class="headline__wrap">
                            <!-- begin .headline__content -->
                            <div class="headline__content">
                                <h1 class="h2"><span>Cryptocurrency</span> trading in&nbsp;one&nbsp;click</h1>
                                
                                <p><span style="display: block;"><strong>VIZAVI</strong>&nbsp;&mdash; is the only broker</span> that provides<br class="db" style="display: none;" />
                                its customers <strong style="display: block;">with<br class="db"
                                            style="display: none;" />
                                        cryptocurrency<br class="db" style="display: none;" />
                                        derivatives.</strong></p>
                            </div>
                            <!-- end .headline__content -->
                            <!-- begin .headline__actions -->

                            <div class="headline__actions headline-actions">
                                <!-- begin .headline__actions__buttons -->
                                <div class="headline__actions__buttons">
                                    <a class="button button-red" href="https://my.vizavi.com/registration">Start trading</a>
                                </div>
                                <!-- end .headline__actions__buttons -->
                            </div>
                            <!-- end .headline__actions -->
                            <!-- begin .headline__picture -->

                            <div class="headline__picture">
                            </div>
                            <!-- end .headline__picture -->
                        </div>
                        <!-- end .headline__wrap -->
                    </div>
                    <!-- end .headline--bitcoin -->
                </div>
                <!-- end .headline-slider__item -->
                <!-- begin .headline-slider__item -->

                <div class="headline-slider__item">
                    <!-- begin .headline--keyhole -->
                    <div class="headline--main headline--fast-order">
                        <!-- begin .headline__wrap -->
                        <div class="headline__wrap">
                            <!-- begin .headline__content -->
                            <div class="headline__content">
                                <h1 class="h2"><span>The fastest order execution</span>
                                    on the market</h1>

                                <p>
                                    Order execution speed
                                    <strong>starts from 0.05</strong>
                                    <br class="db" style="display: none;" />
                                    seconds.
                                </p>
                            </div>
                            <!-- end .headline__content -->
                            <!-- begin .headline__actions -->

                            <div class="headline__actions headline-actions">
                                <!-- begin .headline__actions__buttons -->
                                <div class="headline__actions__buttons"><a class="button button-red"
                                        href="https://my.vizavi.com/registration">Start trading</a></div>
                                <!-- end .headline__actions__buttons -->
                            </div>
                            <!-- end .headline__actions -->
                            <!-- begin .headline__award -->

                            <div class="headline__award">
                                <!-- begin .company-awards__box -->
                                <div class="company-awards__box flex flex-center">
                                    <!-- begin .company-awards__name -->
                                    <div class="company-awards__name"><span>The fastest</span>  orders execution
                                    </div>
                                    <!-- end .company-awards__name -->
                                    <!-- begin .company-awards__type -->

                                    <div class="company-awards__type">IAFT Awards 2018</div>
                                    <!-- end .company-awards__type -->
                                </div>
                                <!-- end .company-awards__box -->
                            </div>
                            <!-- end .headline__award -->
                        </div>
                        <!-- end .headline__wrap -->
                    </div>
                    <!-- end .headline--keyhole -->
                </div>
                <!-- end .headline-slider__item -->
                <!-- begin .headline-slider__item -->

                <div class="headline-slider__item">
                    <!-- begin .headline--keyhole -->
                    <div class="headline--main headline--keyhole">
                        <!-- begin .headline__wrap -->
                        <div class="headline__wrap">
                            <!-- begin .headline__content -->
                            <div class="headline__content">
                                <h1 class="h2">
                                    <span>Expand horizons</span>
                                    Affiliate Program Designer
                                    <!-- конструктор<br class="db" style="display: none;" />
                                    условий<br class="db" style="display: none;" />
                                    трейдинга -->
                                </h1>

                                <p>Simulation of accounts<br class="db" style="display: none;">
                                for corporate clients<br class="db" style="display: none;">
                                and the trading conditions<br class="db" style="display: none;">
                                constructor.</p>
                            </div>
                            <!-- end .headline__content -->
                            <!-- begin .headline__actions -->

                            <div class="headline__actions headline-actions">
                                <!-- begin .headline__actions__buttons -->
                                <div class="headline__actions__buttons">
                                    <!-- <a class="button button-red" href="javascript:void(0);">
                                        Learn more
                                    </a> -->
                                    <a class="button button-red" href="/partners">To Partners</a>
                                </div>
                                <!-- end .headline__actions__buttons -->
                            </div>
                            <!-- end .headline__actions -->
                        </div>
                        <!-- end .headline__wrap -->
                    </div>
                    <!-- end .headline--keyhole -->
                </div>
                <!-- end .headline-slider__item -->
            </div>
            <!-- end .headline-slider__body -->
            <!-- begin .headline-slider__wrap -->

            <div class="headline-slider__wrap">
                <!-- begin .headline__features -->
                <div class="headline__features headline-features">
                    <!-- begin .headline-feature -->
                    <div class="headline-feature">
                        <!-- begin .headline-feature__box -->
                        <div class="headline-feature__box">
                            <!-- begin .headline-feature__icon -->
                            <div class="headline-feature__icon"><svg height="36" width="40">
                                    <use xlink:href="#i_tools" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg></div>
                            <!-- end .headline-feature__icon -->
                            <!-- begin .headline-feature__description -->

                            <div class="headline-feature__description">
                                <!-- begin .headline-feature__title -->
                                <div class="headline-feature__title">500 +</div>
                                <!-- end .headline-feature__title -->
                                <!-- begin .headline-feature__info -->

                                <div class="headline-feature__info">trading tools</div>
                                <!-- end .headline-feature__info -->
                            </div>
                            <!-- end .headline-feature__description -->
                        </div>
                        <!-- end .headline-feature__box -->
                    </div>
                    <!-- end .headline-feature -->
                    <!-- begin .headline-feature -->

                    <div class="headline-feature">
                        <!-- begin .headline-feature__box -->
                        <div class="headline-feature__box">
                            <!-- begin .headline-feature__icon -->
                            <div class="headline-feature__icon"><svg height="40" width="37">
                                    <use xlink:href="#i_analytics" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg></div>
                            <!-- end .headline-feature__icon -->
                            <!-- begin .headline-feature__description -->

                            <div class="headline-feature__description">
                                <!-- begin .headline-feature__title -->
                                <div class="headline-feature__title">6 markets</div>
                                <!-- end .headline-feature__title -->
                                <!-- begin .headline-feature__info -->

                                <div class="headline-feature__info">trading all asset classes</div>
                                <!-- end .headline-feature__info -->
                            </div>
                            <!-- end .headline-feature__description -->
                        </div>
                        <!-- end .headline-feature__box -->
                    </div>
                    <!-- end .headline-feature -->
                    <!-- begin .headline-feature -->

                    <div class="headline-feature">
                        <!-- begin .headline-feature__box -->
                        <div class="headline-feature__box">
                            <!-- begin .headline-feature__icon -->
                            <div class="headline-feature__icon"><svg height="43" width="41">
                                    <use xlink:href="#i_certified" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg></div>
                            <!-- end .headline-feature__icon -->
                            <!-- begin .headline-feature__description -->

                            <div class="headline-feature__description">
                                <!-- begin .headline-feature__title -->
                                <div class="headline-feature__title">Licensed</div>
                                <!-- end .headline-feature__title -->
                                <!-- begin .headline-feature__info -->

                                <div class="headline-feature__info">liquidity <br>providers</div>
                                <!-- end .headline-feature__info -->
                            </div>
                            <!-- end .headline-feature__description -->
                        </div>
                        <!-- end .headline-feature__box -->
                    </div>
                    <!-- end .headline-feature -->
                    <!-- begin .headline-feature -->

                    <div class="headline-feature">
                        <!-- begin .headline-feature__box -->
                        <div class="headline-feature__box">
                            <!-- begin .headline-feature__icon -->
                            <div class="headline-feature__icon"><svg height="37" width="38">
                                    <use xlink:href="#i_fullday" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg></div>
                            <!-- end .headline-feature__icon -->
                            <!-- begin .headline-feature__description -->

                            <div class="headline-feature__description">
                                <!-- begin .headline-feature__title -->
                                <div class="headline-feature__title">24/7</div>
                                <!-- end .headline-feature__title -->
                                <!-- begin .headline-feature__info -->

                                <div class="headline-feature__info">support</div>
                                <!-- end .headline-feature__info -->
                            </div>
                            <!-- end .headline-feature__description -->
                        </div>
                        <!-- end .headline-feature__box -->
                    </div>
                    <!-- end .headline-feature -->
                </div>
                <!-- end .headline__features -->
            </div>
            <!-- end .headline-slider__wrap -->
        </div>
        <!-- end .headlie -->
        <!-- begin .main-world -->

        <div class="main-world">
            <!-- begin .main-world__flag -->
            <div class="main-world__flag"></div>
            <!-- end .main-world__flag -->
            <!-- begin .main-world__bg -->

            <div class="main-world__bg"></div>
            <!-- end .main-world__bg -->
            <!-- begin .main-world__wrap -->

            <div class="main-world__wrap">
                <!-- begin .intro-box -->
                <div class="intro-box">
                    <h2 class="h2"><span>European broker</span> with a clean state</h2>
                </div>
                <!-- end .intro-box -->
                <!-- begin .main-world__content -->

                <div class="main-world__content flex flex-stretch">
                    <!-- begin .main-world__item -->
                    <div class="main-world__item col-half">
                        <!-- begin .main-world__content-box -->
                        <div class="main-world__content-box">
                            <!-- begin .main-world__title -->
                            <div class="main-world__title">
                                <h3 class="h2">Our<br>mission</h3>
                            </div>
                            <!-- end .main-world__title -->
                            <!-- begin .main-world__body -->

                            <div class="main-world__body body-mission">
                                <p>
                                    <strong>To serve as a beacon in the world of electronic commerce.</strong> 
                                    To show everyone the safe way to make profit in financial markets.
                                </p>
                            </div>
                            <!-- end .main-world__body -->
                        </div>
                        <!-- end .main-world__content-box -->
                    </div>
                    <!-- end .main-world__item -->
                    <!-- begin .main-world__item -->

                    <div class="main-world__item col-half">
                        <!-- begin .main-world__content-box -->
                        <div class="main-world__content-box">
                            <!-- begin .main-world__title -->
                            <div class="main-world__title">
                                <h3 class="h2">Our<br>priorities</h3>
                            </div>
                            <!-- end .main-world__title -->
                            <!-- begin .main-world__body -->

                            <div class="main-world__body">
                                <p>
                                    The foundation on which Vizavi business model is built:
                                    <strong>technology, security and service</strong>.
                                    We respond to modern market challenges and do what other companies are afraid to offer to their customers.
                                </p>
                            </div>
                            <!-- end .main-world__body -->
                        </div>
                        <!-- end .main-world__content-box -->
                    </div>
                    <!-- end .main-world__item -->
                </div>
                <!-- end .main-world__content -->
            </div>
            <!-- end .main-world__wrap -->
        </div>
        <!-- end .main-world -->
        <!-- begin .main-features -->

        <div class="main-features">
            <!-- begin .main-features__bg -->
            <div class="main-features__bg"></div>
            <!-- end .main-features__bg -->
            <!-- begin .main-features__wrap -->

            <div class="main-features__wrap">
                <!-- begin .main-features__cards -->
                <div class="main-features__cards">
                    <!-- begin .icon-cards -->
                    <div class="icon-cards icon-cards--white">
                        <!-- begin .icon-card -->
                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="34" width="43">
                                            <use xlink:href="#i_speedometer" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            </use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                    <!-- begin .icon-card__icon-decor -->

                                    <div class="icon-card__icon-decor"></div>
                                    <!-- end .icon-card__icon-decor -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p>
                                        Orders execution time is
                                        <strong>from 0.05 seconds</strong>
                                    </p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                        <!-- begin .icon-card -->

                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="47" width="47">
                                            <use xlink:href="#i_loop" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                    <!-- begin .icon-card__icon-decor -->

                                    <div class="icon-card__icon-decor"></div>
                                    <!-- end .icon-card__icon-decor -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p><strong>Instant </strong> withdrawal</p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                        <!-- begin .icon-card -->

                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="42" width="56">
                                            <use xlink:href="#i_balance-scales"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                    <!-- begin .icon-card__icon-decor -->

                                    <div class="icon-card__icon-decor"></div>
                                    <!-- end .icon-card__icon-decor -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p>Leverage <strong>1:500</strong></p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                        <!-- begin .icon-card -->

                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="46" width="46">
                                            <use xlink:href="#i_banknotes" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            </use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                    <!-- begin .icon-card__icon-decor -->

                                    <div class="icon-card__icon-decor"></div>
                                    <!-- end .icon-card__icon-decor -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p><strong>Affiliate</strong> program with payment of up to 80%</p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                    </div>
                    <!-- end .icon-cards -->
                </div>
                <!-- end .main-features__cards -->
            </div>
            <!-- end .main-features__wrap -->
        </div>
        <!-- end .main-features -->
        <!-- begin .cut-bubble -->

        <div class="cut-bubble cut-bubble--main">
            <!-- begin .cut-bubble__wrap -->
            <div class="cut-bubble__wrap flex ">
                <!-- begin .cut-bubble__message -->
                <div class="cut-bubble__message col-half cut-bubble-message cut-bubble-message--main">
                    <!-- begin .cut-bubble-message__box -->
                    <div class="cut-bubble-message__box">
                        <!-- begin .cut-bubble-message__content -->
                        <div class="cut-bubble-message__content">
                            <h2 class="h2">
                                <span>All the depth</span> of the market in your smartphone
                            </h2>

                            <p>
                                <strong>Get the best Bid</strong> and Ask prices each time you make a transaction.
                            </p>
                            <!-- begin .cut-bubble-message__actions -->

                            <div class="cut-bubble-message__actions"><a class="button button-red"
                                    href="https://my.vizavi.com/registration">Open account</a></div>
                            <!-- end .cut-bubble-message__actions -->
                        </div>
                        <!-- end .cut-bubble-message__content -->
                    </div>
                    <!-- end .cut-bubble-message__box -->
                </div>
                <!-- end .cut-bubble__message -->
                <!-- begin .cut-bubble__picture -->

                <div class="cut-bubble__picture col-half cut-bubble-picture">
                    <!-- begin .cut-bubble-picture__box -->
                    <div class="cut-bubble-picture__box">
                        <picture class="picture-box">
                            <source class="vizavi-picture" draggable="false" srcset="/assets/images/main/vizavi-phone-angle.webp,
                    assets/images/main/vizavi-phone-angle@2x.webp 2x,
                    assets/images/main/vizavi-phone-angle@3x.webp 3x
                    " type="image/webp" /> <img alt="" class="vizavi-picture" draggable="false"
                                src="/assets/images/main/vizavi-phone-angle.png" srcset="/assets/images/main/vizavi-phone-angle.png,
                    assets/images/main/vizavi-phone-angle@2x.png 2x,
                    assets/images/main/vizavi-phone-angle@3x.png 3x
                    " /> </picture>
                    </div>
                    <!-- end .cut-bubble-picture__box -->
                </div>
                <!-- end .cut-bubble__picture -->
            </div>
            <!-- end .cut-bubble__wrap -->
        </div>
        <!-- end .cut-bubble -->
        <!-- begin .why-we -->

        <div class="why-we">
            <!-- begin .why-we__wrap -->
            <div class="why-we__wrap">
                <!-- begin .intro-box -->
                <div class="intro-box text-left">
                    <h2 class="h2">Why choose us?</h2>
                </div>
                <!-- end .intro-box -->
                <!-- begin .why-we__lists -->

                <div class="why-we__lists">
                    <!-- begin .why-we__list -->
                    <div class="why-we__list">
                        <h3 class="h3">Technology</h3>

                        <ul class="list-check">
                            <li class="list-check__item">The most advanced platform MetaTrader 5</li>
                            <li class="list-check__item">6 markets and over 500 trading instruments</li>
                            <li class="list-check__item">Execution of orders in 50 milliseconds</li>
                            <li class="list-check__item">Direct withdrawal of transactions under the FIX protocol</li>
                            <li class="list-check__item">Support all trading strategies</li>
                        </ul>
                    </div>
                    <!-- end .why-we__list -->
                    <!-- begin .why-we__list -->

                    <div class="why-we__list">
                        <h3 class="h3">Security</h3>

                        <ul class="list-check">
                            <li class="list-check__item">Compliance with international norms and standards AML, KYC, DD</li>
                            <li class="list-check__item">Using encryption protocols and preserving data integrity</li>
                            <li class="list-check__item">Quick withdrawal</li>
                            <li class="list-check__item">Not a single refusal to withdraw funds</li>
                            <li class="list-check__item">Separate storage of customer funds</li>
                        </ul>
                    </div>
                    <!-- end .why-we__list -->
                    <!-- begin .why-we__list -->

                    <div class="why-we__list">
                        <h3 class="h3">Service</h3>

                        <ul class="list-check">
                            <li class="list-check__item">24-hour support</li>
                            <li class="list-check__item">Trade 24/7 (trade on weekends and holidays)</li>
                            <li class="list-check__item">Many methods of depositing and withdrawing funds including cryptocurrency</li>
                            <li class="list-check__item">Affiliate program with guaranteed payout up to 80%</li>
                            <li class="list-check__item">Quick verification</li>
                        </ul>
                    </div>
                    <!-- end .why-we__list -->
                </div>
                <!-- end .why-we__lists -->
            </div>
            <!-- end .why-we__wrap -->
        </div>
        <!-- end .why-we -->
        <!-- begin .trading-market -->

        <div class="trading-market">
            <!-- begin .trading-market__bg -->
            <div class="trading-market__bg trading-market__bg-red"></div>
            <!-- end .trading-market__bg -->
            <!-- begin .trading-market__bg -->

            <div class="trading-market__bg trading-market__bg-light"></div>
            <!-- end .trading-market__bg -->
            <!-- begin .trading-market__wrap -->

            <div class="trading-market__wrap">
                <!-- begin. heading for mobile version -->
                <div class="intro-box">
                    <h2 class="h2 mobile-visible"><span>Markets</span></h2>
                </div>
                <!-- end. heading for mobile version -->
                <!-- begin .trading-market__content -->

                <div class="trading-market__content tab-container" id="trading-market-content">
                    <!-- begin .trading-market__controls -->
                    <div class="trading-market__controls col-half">
                        <!-- begin .trading-market__controls-img -->
                        <div class="trading-market__controls-img"><span id="is-select"><a
                                    class="t-market-control t-market-control--bitcoin is-active"
                                    href="#tm_bitcoin"><span class="t-market-control__box"><span
                                            class="t-market-control__icon"><svg height="38" width="25">
                                                <use xlink:href="#i_bitcoin" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                </use>
                                            </svg> </span> <span class="t-market-control__name">Bitcoin</span> </span>
                                </a></span> <span><a class="t-market-control t-market-control--currencies"
                                    href="#tm_currencies"> <span class="t-market-control__box"> <span
                                            class="t-market-control__icon"> <svg height="35" width="43">
                                                <use xlink:href="#i_money" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                </use>
                                            </svg> </span> <span class="t-market-control__name">Currencies</span> </span>
                                </a></span> <span><a class="t-market-control t-market-control--cfdstock"
                                    href="#tm_cfdstock"> <span class="t-market-control__box"> <span
                                            class="t-market-control__icon"> <svg height="37" width="25">
                                                <use xlink:href="#i_cert" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                </use>
                                            </svg> </span> <span class="t-market-control__name">CFD<br />
                                                Stocks</span> </span> </a></span> <span><a
                                    class="t-market-control t-market-control--cfdmetals" href="#tm_cfdmetals"> <span
                                        class="t-market-control__box"> <span class="t-market-control__icon"> <svg
                                                height="49" width="55">
                                                <use xlink:href="#i_metal" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                </use>
                                            </svg> </span> <span class="t-market-control__name">CFD<br />
                                                Metals</span> </span> </a></span> <span><a
                                    class="t-market-control t-market-control--cfdindexes" href="#tm_cfdindexes"> <span
                                        class="t-market-control__box"> <span class="t-market-control__icon"> <svg
                                                height="39" width="35">
                                                <use xlink:href="#i_loupe-with-graph"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                            </svg> </span> <span class="t-market-control__name">CFD<br />
                                                Indices</span> </span> </a></span> <span><a
                                    class="t-market-control t-market-control--cfdproducts" href="#tm_cfdproducts"> <span
                                        class="t-market-control__box"> <span class="t-market-control__icon"> <svg
                                                height="29" width="24">
                                                <use xlink:href="#i_jewel" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                </use>
                                            </svg> </span> <span class="t-market-control__name">CFD<br />
                                                Products</span> </span> </a></span></div>
                        <!-- end .trading-market__controls-img -->
                        <!-- begin .trading-market__actions -->

                        <div class="trading-market__actions"><a class="button button-light"
                                href="https://my.vizavi.com/registration">Start trading</a></div>
                        <!-- end .trading-market__actions -->
                    </div>
                    <!-- end .trading-market__controls -->
                    <!-- begin .trading-market__container -->

                    <div class="trading-market__container col-half">
                        <h2 class="h2"><span>Markets</span></h2>
                        <!-- begin .panel-container -->

                        <div class="panel-container">
                            <!-- begin #tm_bitcoin -->
                            <div id="tm_bitcoin">
                                <!-- begin .trading-market__body -->
                                <div class="trading-market__body">
                                    <h3 class="h3">Cryptocurrencies</h3>

                                    <p>
                                        Progressive financial asset. It is traded <strong>24 hours a day, 7 days a week,</strong> and that is why this asset compares favorably with other trading instruments. You can trade the most popular cryptocurrencies without the mediation of banks and other financial organizations.     
                                    </p>
                                    <!-- begin .trading-market__actions -->

                                    <div class="trading-market__actions"><a class="button button-light"
                                            href="https://my.vizavi.com/registration">Start trading</a></div>
                                    <!-- end .trading-market__actions -->
                                </div>
                                <!-- end .trading-market__body -->
                            </div>
                            <!-- end #tm_bitcoin -->
                            <!-- begin #tm_currencies -->

                            <div id="tm_currencies">
                                <!-- begin .trading-market__body -->
                                <div class="trading-market__body">
                                    <h3 class="h3">Currencies</h3>

                                    <p>The most liquid financial instrument. <strong>You can earn on the difference in exchange rates in any direction of their movement,</strong> since the fall in the value of one currency means the growth of another. Whatever the economic situation in the world, you can always find the right currency pair to make profit.
                                    </p>
                                    <!-- begin .trading-market__actions -->

                                    <div class="trading-market__actions"><a class="button button-light"
                                            href="https://my.vizavi.com/registration">Start trading</a></div>
                                    <!-- end .trading-market__actions -->
                                </div>
                                <!-- end .trading-market__body -->
                            </div>
                            <!-- end #tm_currencies -->
                            <!-- begin #tm_cfdstock -->

                            <div id="tm_cfdstock">
                                <!-- begin .trading-market__body -->
                                <div class="trading-market__body">
                                    <h3 class="h3">CFD Stocks</h3>

                                    <p>
                                        CFDs on stock prices of the largest companies in the world <strong>enable any trader to trade shares of Facebook, Google, Apple and other international giants</strong> without large start-up capital. Get access to the stock market and the opportunity to join the success of your favorite companies.
                                    </p>
                                    <!-- begin .trading-market__actions -->

                                    <div class="trading-market__actions"><a class="button button-light"
                                            href="https://my.vizavi.com/registration">Start trading</a></div>
                                    <!-- end .trading-market__actions -->
                                </div>
                                <!-- end .trading-market__body -->
                            </div>
                            <!-- end #tm_cfdstock -->
                            <!-- begin #tm_cfdmetals -->

                            <div id="tm_cfdmetals">
                                <!-- begin .trading-market__body -->
                                <div class="trading-market__body">
                                    <h3 class="h3">CFD Metals</h3>

                                    <p>
                                        CFDs on gold, silver, platinum and other metals are considered to be one of <strong>the most popular assets for risk diversification</strong>. Trade in metals without storage costs and their subsequent resale.
                                    </p>
                                    <!-- begin .trading-market__actions -->

                                    <div class="trading-market__actions"><a class="button button-light"
                                            href="https://my.vizavi.com/registration">Start trading</a></div>
                                    <!-- end .trading-market__actions -->
                                </div>
                                <!-- end .trading-market__body -->
                            </div>
                            <!-- end #tm_cfdmetals -->
                            <!-- begin #tm_cfdindexes -->

                            <div id="tm_cfdindexes">
                                <!-- begin .trading-market__body -->
                                <div class="trading-market__body">
                                    <h3 class="h3">CFD Indices</h3>

                                    <p>
                                        CFDs on the most famous stock indices give <strong>the opportunity to trade the indices of the leading stock exchanges, which are formed from the shares of public companies</strong>. You can earn on the state of a particular market industry or the economy in general.
                                    </p>
                                    <!-- begin .trading-market__actions -->

                                    <div class="trading-market__actions"><a class="button button-light"
                                            href="https://my.vizavi.com/registration">Start trading</a></div>
                                    <!-- end .trading-market__actions -->
                                </div>
                                <!-- end .trading-market__body -->
                            </div>
                            <!-- end #tm_cfdindexes -->
                            <!-- begin #tm_cfdproducts -->

                            <div id="tm_cfdproducts">
                                <!-- begin .trading-market__body -->
                                <div class="trading-market__body">
                                    <h3 class="h3">CFD Products</h3>

                                    <p>
                                        CFDs on oil, gas and other commodities is a <strong>convenient way to make money buying and selling goods without delivering a real physical asset</strong>. You will get direct access to product markets with minimum start-up capital requirements.
                                    </p>
                                    <!-- begin .trading-market__actions -->

                                    <div class="trading-market__actions"><a class="button button-light"
                                            href="https://my.vizavi.com/registration">Start trading</a></div>
                                    <!-- end .trading-market__actions -->
                                </div>
                                <!-- end .trading-market__body -->
                            </div>
                            <!-- end #tm_cfdproducts -->
                        </div>
                        <!-- end .panel-container -->
                    </div>
                    <!-- end .trading-market__container -->
                </div>
                <!-- end .trading-market__content -->
            </div>
            <!-- end .trading-market__wrap -->
        </div>
        <!-- end .trading-market -->
        <!-- begin .popular-terminal -->

        <div class="popular-terminal">
            <!-- begin .popular-terminal__wrap -->
            <div class="popular-terminal__wrap flex">
                <!-- begin .popular-terminal__info -->
                <div class="popular-terminal__info col-half">
                    <!-- begin .popular-terminal__headline -->
                    <div class="popular-terminal__headline">
                        <h2 class="h2">
                            <span class="h2-break">Trade</span>
                            in
                            <span>the most popular</span>
                            terminal in the world</h2>
                    </div>
                    <!-- end .popular-terminal__headline -->
                    <!-- begin .popular-terminal__body -->

                    <div class="popular-terminal__body">
                        <p>
                            <strong>MetaTrader 5 is the newest trading terminal</strong>,
                            which has all the tools for successful trading. Make transactions in several markets at the same time, create trading robots, copy deals from experienced traders and implement any trading ideas.
                            <strong>Regardless of your level of qualification in the MetaTrader 5 terminal you will find everything you need to make a profit from trading in financial markets!</strong>
                        </p>
                    </div>
                    <!-- end .popular-terminal__body -->
                    <!-- begin .popular-terminal__actions -->

                    <div class="popular-terminal__actions popular-terminal-actions">
                        <!-- begin .popular-terminal-actions__title -->
                        <div class="popular-terminal-actions__title">Download terminal</div>
                        <!-- end .popular-terminal-actions__title -->
                        <!-- begin .popular-terminal-actions__buttons -->

                        <div class="popular-terminal-actions__buttons">
                            <a 
                                href="https://download.mql5.com/cdn/web/12591/mt5/vzvimpex5setup.exe"
                                class="button button-mini button-red button-with-icon">
                                <span class="button-with-icon__icon">
                                    <svg height="30" width="30">
                                        <use xlink:href="#i_windows-logo" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </span>
                                <span class="button-with-icon__text">Windows</span>
                            </a>
                            <a 
                                href="https://download.mql5.com/cdn/mobile/mt5/ios?server=VZVImpex-MetaTrader5"
                                class="button button-mini button-red button-with-icon">
                                <span class="button-with-icon__icon">
                                    <svg height="26" width="20">
                                        <use xlink:href="#i_apple-logo" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </span>
                                <span class="button-with-icon__text">iPhone</span>
                            </a>
                            <a 
                                href="https://download.mql5.com/cdn/mobile/mt5/android?server=VZVImpex-MetaTrader5"
                                class="button button-mini button-red button-with-icon">
                                <span class="button-with-icon__icon">
                                    <svg height="36" width="29">
                                        <use xlink:href="#i_android-logo" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </span>
                                <span class="button-with-icon__text">Android</span>
                            </a>
                        </div>
                        <!-- end .popular-terminal-actions__buttons -->
                    </div>
                    <!-- end .popular-terminal__actions -->
                </div>
                <!-- end .popular-terminal__info -->
                <!-- begin .popular-terminal__screen -->

                <div class="popular-terminal__screen col-half">
                    <picture class="picture-box">
                        <source class="metatrader-picture" draggable="false" type="image/webp" /> <img
                            alt="" class="metatrader-picture" draggable="false"
                            src="/assets/images/main/metatrader5.png" /> </picture>
                </div>
                <!-- end .popular-terminal__screen -->
            </div>
            <!-- end .popular-terminal__wrap -->
        </div>
        <!-- end .popular-terminal -->
        <!-- begin .security-of-means -->

        <div class="security-of-means">
            <!-- begin .security-of-means__wrap -->
            <div class="security-of-means__wrap flex">
                <!-- begin .security-of-means__content -->
                <div class="security-of-means__content">
                    <!-- begin .intro-box -->
                    <div class="intro-box text-left p-decor">
                        <h2 class="h2"><span>Security</span> of your funds</h2>

                        <p>
                            <strong>Vizavi company pays special attention to the safety of their customers' funds.</strong>
                            We guarantee you maximum protection of monetary assets, complete security of transactions and timely fulfillment of financial obligations.
                        </p>
                    </div>
                    <!-- end .intro-box -->
                </div>
                <!-- end .security-of-means__content -->
                <!-- begin .security-of-means__cards -->

                <div class="security-of-means__cards">
                    <!-- begin .icon-cards -->
                    <div class="icon-cards icon-cards--black _horizontal_scroll_mobile_sm" data-mobile_items="1"
                        data-stage_padding="1">
                        <!-- begin .icon-card -->
                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="35" width="40">
                                            <use xlink:href="#i_bank" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p><strong>Segregated accounts</strong> in major world banks</p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                        <!-- begin .icon-card -->

                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="38" width="41">
                                            <use xlink:href="#i_shield" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            </use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p><strong>Automatic negative</strong> balance protection</p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                        <!-- begin .icon-card -->

                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="46" width="31">
                                            <use xlink:href="#i_graduate" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            </use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p><strong>Legal protection</strong> of deposit and withdrawal operations</p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                        <!-- begin .icon-card -->

                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="42" width="40">
                                            <use xlink:href="#i_certified" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            </use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p>Due Diligence <strong>Partner and Counterparty Review</strong></p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                        <!-- begin .icon-card -->

                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="49" width="40">
                                            <use xlink:href="#i_shield-check"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p>Protection from suspicious AML and KYC operations</p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                        <!-- begin .icon-card -->

                        <div class="icon-card">
                            <!-- begin .icon-card__box -->
                            <div class="icon-card__box">
                                <!-- begin .icon-card__icon -->
                                <div class="icon-card__icon">
                                    <!-- begin .icon-card__icon-ico -->
                                    <div class="icon-card__icon-ico"><svg height="47" width="47">
                                            <use xlink:href="#i_planet-bitcoin"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg></div>
                                    <!-- end .icon-card__icon-ico -->
                                </div>
                                <!-- end .icon-card__icon -->
                                <!-- begin .icon-card__content -->

                                <div class="icon-card__content">
                                    <p>The ability to store a deposit in cryptocurrency</p>
                                </div>
                                <!-- end .icon-card__content -->
                            </div>
                            <!-- end .icon-card__box -->
                        </div>
                        <!-- end .icon-card -->
                    </div>
                    <!-- end .icon-cards -->
                </div>
                <!-- end .security-of-means__cards -->
            </div>
            <!-- end .security-of-means__wrap -->
        </div>
        <!-- end .security-of-means -->
        <!-- begin .one-click -->

        <div class="one-click">
            <!-- begin .one-click__bg -->
            <div class="one-click__bg"></div>
            <!-- end .one-click__bg -->
            <!-- begin .one-click__bg -->

            <div class="one-click__bgbox"></div>
            <!-- end .one-click__bg -->
            <!-- begin .one-click__wrap -->

            <div class="owl-wrap_outside">
                <div class="one-click__wrap">
                    <!-- begin .intro-box -->
                    <div class="intro-box">
                        <h2 class="h2">
                            <span>Copy</span>
                            the best
                            <span class="h2-break">traders in one click!</span>
                        </h2>
                    </div>
                    <!-- end .intro-box -->

                    <div class="one-click__wrap-inside">
                        <!-- begin .one-click__cards -->
                        <div class="one-click__cards">
                            <!-- begin .one-click__item -->
                            <div class="one-click__item">
                                <!-- begin .one-click__box -->
                                <div class="one-click__box">
                                    <!-- begin .one-click__content -->
                                    <div class="one-click__content">
                                        <!-- begin .one-click__icon -->
                                        <div class="one-click__icon"><svg height="80" width="85">
                                                <use xlink:href="#i_cooltrader"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                            </svg></div>
                                        <!-- end .one-click__icon -->
                                        <!-- begin .one-click__step -->

                                        <div class="one-click__step">Step 1</div>
                                        <!-- end .one-click__step -->
                                        <!-- begin .one-click__body -->

                                        <div class="one-click__body">
                                            <strong>Choose the most talented managers</strong>
                                            among successful traders from 192 countries.
                                        </div>
                                        <!-- end .one-click__body -->
                                    </div>
                                    <!-- end .one-click__content -->
                                </div>
                                <!-- end .one-click__box -->
                            </div>
                            <!-- end .one-click__item -->
                            <!-- begin .one-click__item -->

                            <div class="one-click__item">
                                <!-- begin .one-click__box -->
                                <div class="one-click__box">
                                    <!-- begin .one-click__content -->
                                    <div class="one-click__content">
                                        <!-- begin .one-click__icon -->
                                        <div class="one-click__icon"><svg height="54" width="52">
                                                <use xlink:href="#i_target-width-bag"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                            </svg></div>
                                        <!-- end .one-click__icon -->
                                        <!-- begin .one-click__step -->

                                        <div class="one-click__step">Step 2</div>
                                        <!-- end .one-click__step -->
                                        <!-- begin .one-click__body -->

                                        <div class="one-click__body">
                                            <strong>Build your portfolio</strong>
                                            and get automatic calculation of risk and return.
                                        </div>
                                        <!-- end .one-click__body -->
                                    </div>
                                    <!-- end .one-click__content -->
                                </div>
                                <!-- end .one-click__box -->
                            </div>
                            <!-- end .one-click__item -->
                            <!-- begin .one-click__item -->

                            <div class="one-click__item">
                                <!-- begin .one-click__box -->
                                <div class="one-click__box">
                                    <!-- begin .one-click__content -->
                                    <div class="one-click__content">
                                        <!-- begin .one-click__icon -->
                                        <div class="one-click__icon"><svg height="62" width="62">
                                                <use xlink:href="#i_its-rule"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                            </svg></div>
                                        <!-- end .one-click__icon -->
                                        <!-- begin .one-click__step -->

                                        <div class="one-click__step">Step 3</div>
                                        <!-- end .one-click__step -->
                                        <!-- begin .one-click__body -->

                                        <div class="one-click__body">
                                            <strong>Create your</strong>
                                            own 
                                            <strong>trading rules</strong>.
                                        </div>
                                        <!-- end .one-click__body -->
                                    </div>
                                    <!-- end .one-click__content -->
                                </div>
                                <!-- end .one-click__box -->
                            </div>
                            <!-- end .one-click__item -->
                            <!-- begin .one-click__item -->

                            <div class="one-click__item">
                                <!-- begin .one-click__box -->
                                <div class="one-click__box">
                                    <!-- begin .one-click__content -->
                                    <div class="one-click__content">
                                        <!-- begin .one-click__icon -->
                                        <div class="one-click__icon"><svg height="63" width="60">
                                                <use xlink:href="#i_growth-on-chart"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                            </svg></div>
                                        <!-- end .one-click__icon -->
                                        <!-- begin .one-click__step -->

                                        <div class="one-click__step">Step 4</div>
                                        <!-- end .one-click__step -->
                                        <!-- begin .one-click__body -->

                                        <div class="one-click__body">
                                            Watch your <strong>deposit grow</strong>!
                                        </div>
                                        <!-- end .one-click__body -->
                                    </div>
                                    <!-- end .one-click__content -->
                                </div>
                                <!-- end .one-click__box -->
                            </div>
                            <!-- end .one-click__item -->
                        </div>
                        <!-- end .one-click__cards -->
                    </div>
                </div>
            </div>
            <!-- end .one-click__wrap -->
        </div>
        <!-- end .one-click -->
        <!-- begin .top-traders -->

        <div class="top-traders">
            <!-- begin .top-traders__bg -->
            <div class="top-traders__bg"></div>
            <!-- end .top-traders__bg -->
            <!-- begin .top-traders__wrap -->

            <div class="owl-wrap_outside">
                <div class="top-traders__wrap flex">
                    <!-- begin .top-traders__info -->
                    <div class="top-traders__info">
                        <!-- begin .intro-box -->
                        <div class="intro-box text-left intro-box--dark">
                            <h2 class="h2"><span>This week's</span> best traders</h2>

                            <p>
                                <strong>We will protect your deposit from losses and negative balance</strong>.
                                Only proven experts who qualify after three months of trading and making at least 50 transactions participate in the rating.
                            </p>
                            <!-- begin .top-traders__actions -->

                            <div class="top-traders__actions mobile-hidden">
                                <a class="button button-red" href="https://my.vizavi.com/registration">Copy transactions</a>
                            </div>
                            <!-- end .top-traders__actions -->
                        </div>
                        <!-- end .intro-box -->
                    </div>
                    <!-- end .top-traders__info -->
                    <!-- begin .top-traders__list -->

                    <div class="top-traders__list">
                        <!-- begin .traders-slider__left -->
                        <div class="traders-slider__left js_slider-left"><svg fill="none" height="38" width="22"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.523 20.22l17.143 16.902c.762.751 1.905.751 2.667 0 .38-.188.571-.751.571-1.315 0-.563-.19-.939-.571-1.314L5.523 18.906l15.81-15.587c.38-.375.571-.751.571-1.314 0-.564-.19-.94-.571-1.315C20.952.314 20.57.127 20 .127c-.572 0-.953.187-1.334.563L1.523 17.591c-.38.376-.571.752-.571 1.315s.19 1.127.571 1.315z"
                                    fill="currentColor"></path>
                            </svg></div>
                        <!-- end .traders-slider__left -->
                        <!-- begin .traders-list -->

                        <div class="traders-list js_traders-list-main owl-carousel">

                            <div class="traders-list__item">
                                <div class="trader-card">
                                    <div class="trader-card__box">

                                        <div class="trader-card__avatar">
                                            <img alt="Trader Nikita_Profit" height=""
                                                src="/assets/images/svg/user-avatar.svg" width="" />
                                        </div>

                                        <div class="trader-card__header">
                                            <div class="trader-card__header-name">Nikita_Profit</div>
                                        </div>

                                        <div class="trader-card__graph">
                                            <div class="trader-card__graph-box graph-container" id="graph-container_5"
                                                data-graph="[7, 8, 9, 6, 10]">
                                            </div>
                                        </div>

                                        <div class="trader-card__body">

                                            <div class="trader-card__row trader-card__row--full">
                                                <div class="trader-card__name">Connected investors</div>
                                                <div class="trader-card__value">67</div>
                                            </div>

                                            <div class="trader-card__row">
                                                <div class="trader-card__name">Trader's profit</div>
                                                <div class="trader-card__value">524.15%</div>
                                            </div>

                                            <div class="trader-card__row is-accent">
                                                <div class="trader-card__name">Your profit</div>
                                                <div class="trader-card__value">524.15%</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="traders-list__item">
                                <div class="trader-card">
                                    <div class="trader-card__box">

                                        <div class="trader-card__avatar">
                                            <img alt="Trader RecordsMan" height=""
                                                src="/assets/images/svg/user-avatar.svg" width="" />
                                        </div>

                                        <div class="trader-card__header">
                                            <div class="trader-card__header-name">RecordsMan</div>
                                        </div>

                                        <div class="trader-card__graph">
                                            <div class="trader-card__graph-box graph-container" id="graph-container_6"
                                                data-graph="[7, 6, 5, 7, 8]">
                                            </div>
                                        </div>

                                        <div class="trader-card__body">

                                            <div class="trader-card__row trader-card__row--full">
                                                <div class="trader-card__name">Connected investors</div>
                                                <div class="trader-card__value">59</div>
                                            </div>

                                            <div class="trader-card__row">
                                                <div class="trader-card__name">Trader's profit</div>
                                                <div class="trader-card__value">413.72%</div>
                                            </div>

                                            <div class="trader-card__row is-accent">
                                                <div class="trader-card__name">Your profit</div>
                                                <div class="trader-card__value">413.72%</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="traders-list__item">
                                <div class="trader-card">
                                    <div class="trader-card__box">

                                        <div class="trader-card__avatar">
                                            <img alt="Trader Pasha_VIP" height="" src="/assets/images/svg/user-avatar.svg"
                                                width="" />
                                        </div>

                                        <div class="trader-card__header">
                                            <div class="trader-card__header-name">Pasha_VIP</div>
                                        </div>

                                        <div class="trader-card__graph">
                                            <div class="trader-card__graph-box graph-container" id="graph-container_7"
                                                data-graph="[5, 8, 5, 3, 4]">
                                            </div>
                                        </div>

                                        <div class="trader-card__body">

                                            <div class="trader-card__row trader-card__row--full">
                                                <div class="trader-card__name">Connected investors</div>
                                                <div class="trader-card__value">26</div>
                                            </div>

                                            <div class="trader-card__row">
                                                <div class="trader-card__name">Trader's profit</div>
                                                <div class="trader-card__value">214.64%</div>
                                            </div>

                                            <div class="trader-card__row is-accent">
                                                <div class="trader-card__name">Your profit</div>
                                                <div class="trader-card__value">214.64%</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="traders-list__item">
                                <div class="trader-card">
                                    <div class="trader-card__box">

                                        <div class="trader-card__avatar">
                                            <img alt="Trader Gold_Digger" height=""
                                                src="/assets/images/svg/user-avatar.svg" width="" />
                                        </div>

                                        <div class="trader-card__header">
                                            <div class="trader-card__header-name">Gold_Digger</div>
                                        </div>

                                        <div class="trader-card__graph">
                                            <div class="trader-card__graph-box graph-container" id="graph-container_2"
                                                data-graph="[5, 4, 6, 5, 7]">
                                            </div>
                                        </div>

                                        <div class="trader-card__body">

                                            <div class="trader-card__row trader-card__row--full">
                                                <div class="trader-card__name">Connected investors</div>
                                                <div class="trader-card__value">32</div>
                                            </div>

                                            <div class="trader-card__row">
                                                <div class="trader-card__name">Trader's profit</div>
                                                <div class="trader-card__value">189.12%</div>
                                            </div>

                                            <div class="trader-card__row is-accent">
                                                <div class="trader-card__name">Your profit</div>
                                                <div class="trader-card__value">189.12%</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="traders-list__item">
                                <div class="trader-card">
                                    <div class="trader-card__box">

                                        <div class="trader-card__avatar">
                                            <img alt="Trader MoneyHunt" height=""
                                                src="/assets/images/svg/user-avatar.svg" width="" />
                                        </div>

                                        <div class="trader-card__header">
                                            <div class="trader-card__header-name">MoneyHunt</div>
                                        </div>

                                        <div class="trader-card__graph">
                                            <div class="trader-card__graph-box graph-container" id="graph-container_4"
                                                data-graph="[6, 8, 7, 8, 10]">
                                            </div>
                                        </div>

                                        <div class="trader-card__body">

                                            <div class="trader-card__row trader-card__row--full">
                                                <div class="trader-card__name">Connected investors</div>
                                                <div class="trader-card__value">19</div>
                                            </div>

                                            <div class="trader-card__row">
                                                <div class="trader-card__name">Trader's profit</div>
                                                <div class="trader-card__value">168.96%</div>
                                            </div>

                                            <div class="trader-card__row is-accent">
                                                <div class="trader-card__name">Your profit</div>
                                                <div class="trader-card__value">168.96%</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- begin .traders-slider__right -->

                        <div class="traders-slider__right js_slider-right"><svg fill="none" height="38" width="22"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.332 17.78L4.19.877c-.762-.751-1.904-.751-2.666 0-.381.188-.572.751-.572 1.315 0 .563.19.939.572 1.314l15.81 15.587-15.81 15.587c-.381.376-.572.751-.572 1.315 0 .563.19.938.572 1.314.38.376.762.563 1.333.563s.952-.187 1.333-.563l17.143-16.901c.381-.376.572-.752.572-1.315s-.19-1.127-.572-1.315z"
                                    fill="currentColor"></path>
                            </svg></div>
                        <!-- end .traders-slider__right -->
                    </div>
                    <!-- end .top-traders__list -->
                    <!-- begin .top-traders__actions mobile -->

                    <div class="top-traders__actions mobile-visible"><a class="button button-red"
                            href="https://my.vizavi.com/registration">Copy transactions</a></div>
                    <!-- end .top-traders__actions mobile -->
                </div>
            </div>
            <!-- end .top-traders__wrap -->
        </div>
        <!-- end .top-traders -->
        <!-- begin .start-trading -->

        <div class="start-trading">
            <div class="owl-wrap_outside">
                <!-- begin .start-trading__wrap -->
                <div class="start-trading__wrap">
                    <!-- begin .intro-box -->
                    <div class="intro-box slash">
                        <h2 class="h2"><span>Start trading</span> with Vizavi</h2>

                        <p>Get access to all markets in 3 minutes:</p>
                    </div>
                    <!-- end .intro-box -->
                    <!-- begin .start-trading__cards -->

                    <div class="start-trading__cards">
                        <!-- begin .advantage-cards -->
                        <div class="advantage-cards advantage-cards--shadow">
                            <!-- begin .advantage-card -->
                            <div class="advantage-card">
                                <!-- begin .advantage-card__shadow -->
                                <div class="advantage-card__shadow">
                                    <!-- begin .advantage-card__box -->
                                    <div class="advantage-card__box">
                                        <!-- begin .advantage-card__icon -->
                                        <div class="advantage-card__icon"><svg height="62" width="79">
                                                <use xlink:href="#i_management"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                            </svg></div>
                                        <!-- end .advantage-card__icon -->
                                        <!-- begin .advantage-card__name -->

                                        <div class="advantage-card__name">Step 1</div>
                                        <!-- end .advantage-card__name -->
                                        <!-- begin .advantage-card__body -->

                                        <div class="advantage-card__body new-line">
                                            <strong>Register</strong>
                                            your personal account
                                        </div>
                                        <!-- end .advantage-card__body -->
                                    </div>
                                    <!-- end .advantage-card__box -->
                                </div>
                                <!-- end .advantage-card__shadow -->
                            </div>
                            <!-- end .advantage-card -->
                            <!-- begin .advantage-card -->

                            <div class="advantage-card">
                                <!-- begin .advantage-card__shadow -->
                                <div class="advantage-card__shadow">
                                    <!-- begin .advantage-card__box -->
                                    <div class="advantage-card__box">
                                        <!-- begin .advantage-card__icon -->
                                        <div class="advantage-card__icon"><svg height="65" width="49">
                                                <use xlink:href="#i_passport"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                            </svg></div>
                                        <!-- end .advantage-card__icon -->
                                        <!-- begin .advantage-card__name -->

                                        <div class="advantage-card__name">Step 2</div>
                                        <!-- end .advantage-card__name -->
                                        <!-- begin .advantage-card__body -->

                                        <div class="advantage-card__body">
                                            Attach <strong>an ID</strong>
                                        </div>
                                        <!-- end .advantage-card__body -->
                                    </div>
                                    <!-- end .advantage-card__box -->
                                </div>
                                <!-- end .advantage-card__shadow -->
                            </div>
                            <!-- end .advantage-card -->
                            <!-- begin .advantage-card -->

                            <div class="advantage-card">
                                <!-- begin .advantage-card__shadow -->
                                <div class="advantage-card__shadow">
                                    <!-- begin .advantage-card__box -->
                                    <div class="advantage-card__box">
                                        <!-- begin .advantage-card__icon -->
                                        <div class="advantage-card__icon"><svg height="65" width="66">
                                                <use xlink:href="#i_trading-platform"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                            </svg></div>
                                        <!-- end .advantage-card__icon -->
                                        <!-- begin .advantage-card__name -->

                                        <div class="advantage-card__name">Step 3</div>
                                        <!-- end .advantage-card__name -->
                                        <!-- begin .advantage-card__body -->

                                        <div class="advantage-card__body new-line">
                                            <strong>Download</strong> the trading platform
                                        </div>
                                        <!-- end .advantage-card__body -->
                                    </div>
                                    <!-- end .advantage-card__box -->
                                </div>
                                <!-- end .advantage-card__shadow -->
                            </div>
                            <!-- end .advantage-card -->
                            <!-- begin .advantage-card -->

                            <div class="advantage-card">
                                <!-- begin .advantage-card__shadow -->
                                <div class="advantage-card__shadow">
                                    <!-- begin .advantage-card__box -->
                                    <div class="advantage-card__box">
                                        <!-- begin .advantage-card__icon -->
                                        <div class="advantage-card__icon"><svg height="63" width="70">
                                                <use xlink:href="#i_refill" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                </use>
                                            </svg></div>
                                        <!-- end .advantage-card__icon -->
                                        <!-- begin .advantage-card__name -->

                                        <div class="advantage-card__name">Step 4</div>
                                        <!-- end .advantage-card__name -->
                                        <!-- begin .advantage-card__body -->

                                        <div class="advantage-card__body">
                                            <strong>Fund</strong>  your account and start trading
                                        </div>
                                        <!-- end .advantage-card__body -->
                                    </div>
                                    <!-- end .advantage-card__box -->
                                </div>
                                <!-- end .advantage-card__shadow -->
                            </div>
                            <!-- end .advantage-card -->
                        </div>
                        <!-- end .advantage-cards -->
                    </div>
                    <!-- end .start-trading__cards -->
                </div>
                <!-- end .start-trading__wrap -->
            </div>
        </div>
        <!-- end .start-trading -->
        <!-- begin .company-awards -->

        <div class="company-awards company-awards--home">
            <!-- begin .company-awards__bg -->
            <div class="company-awards__bg"></div>
            <!-- end .company-awards__bg -->
            <!-- begin .company-awards__wrap -->

            <div class="company-awards__wrap">
                <!-- begin .intro-box -->
                <!-- begin .company-awards__list -->
                <div class="company-awards__list flex flex-stretch flex-center _horizontal_scroll_mobile_sm"
                    data-mobile_items="1" data-stage_padding="0">
                    <!-- begin .company-awards__item -->
                    <div class="company-awards__item">
                        <!-- begin .company-awards__box -->
                        <div class="company-awards__box flex flex-center">
                            <!-- begin .company-awards__name -->
                            <div class="company-awards__name">The fastest <br>order execution <br>on the market</div>
                            <!-- end .company-awards__name -->
                            <!-- begin .company-awards__type -->

                            <div class="company-awards__type">IAFT Awards 2018</div>
                            <!-- end .company-awards__type -->
                        </div>
                        <!-- end .company-awards__box -->
                    </div>
                    <!-- end .company-awards__item -->
                    <!-- begin .company-awards__item -->

                    <div class="company-awards__item">
                        <!-- begin .company-awards__box -->
                        <div class="company-awards__box flex flex-center">
                            <!-- begin .company-awards__name -->
                            <div class="company-awards__name">The most <br>profitable <br>broker</div>
                            <!-- end .company-awards__name -->
                            <!-- begin .company-awards__type -->

                            <div class="company-awards__type">IAFT Awards 2018</div>
                            <!-- end .company-awards__type -->
                        </div>
                        <!-- end .company-awards__box -->
                    </div>
                    <!-- end .company-awards__item -->
                    <!-- begin .company-awards__item -->

                    <div class="company-awards__item">
                        <!-- begin .company-awards__box -->
                        <div class="company-awards__box flex flex-center">
                            <!-- begin .company-awards__name -->
                            <div class="company-awards__name">Best <br>investment <br>platform</div>
                            <!-- end .company-awards__name -->
                            <!-- begin .company-awards__type -->

                            <div class="company-awards__type">IAFT Awards 2018</div>
                            <!-- end .company-awards__type -->
                        </div>
                        <!-- end .company-awards__box -->
                    </div>
                    <!-- end .company-awards__item -->
                </div>
                <!-- end .company-awards__list -->
            </div>
            <!-- end .company-awards__wrap -->
        </div>
        <!-- end .company-awards -->
    </main>

    <?php
        include 'footer.php';
    ?>
    
    <?php
        include 'scripts.php';
    ?>
    
    <?php
        include 'sprite.php';
    ?>
</body>

</html>