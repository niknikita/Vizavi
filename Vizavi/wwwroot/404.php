<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <title>Page not found</title>
    <meta name="description" content="Page not found" />
    <meta name="keywords" content="" />
    <?php
        include 'head_tag_in.php';
    ?>
</head>

<body class="page-error page-error-404">
    <!-- begin .wrap-overlay -->
    <div class="wrap-overlay"></div>
    <!-- end .wrap-overlay -->

    <main>
        
        <?php
            include 'header.php';
        ?>

        <!-- begin .error-content -->
        <div class="error-content flex flex-center">
            <!-- begin .error-content__wrap -->
            <div class="error-content__wrap flex">
                <!-- begin .error-content__image -->
                <div class="error-content__image">
                    <picture class="picture-box">
                        <source class="404-picture" draggable="false" srcset="/assets/images/404/404.webp,
                  assets/images/404/404@2x.webp 2x,
                  assets/images/404/404@3x.webp 3x
                  " type="image/webp" /> <img alt="404" class="404-picture" draggable="false"
                            src="/assets/images/404/404.png" srcset="/assets/images/404/404.png,
                  assets/images/404/404@2x.png 2x,
                  assets/images/404/404@3x.png 3x
                  " /> </picture>
                </div>
                <!-- end .error-content__image -->
                <!-- begin .error-content__message -->

                <div class="error-content__message">
                    <h1 class="h1">Неправильно набран адрес <span>или такой страницы на&nbsp;сайте
                            не&nbsp;существует</span></h1>
                </div>
                <!-- end .error-content__message -->
                <!-- begin .error-content__actions -->

                <div class="error-content__actions flex flex-center"><a class="button button-red" href="/">Вернуться на
                        главную</a> <a class="button button-shadow" href="javascript:void(0);">Помощь</a> <a
                        class="button button-shadow" href="javascript:void(0);">Поиск</a></div>
                <!-- end .error-content__actions -->
            </div>
            <!-- end .error-content__wrap -->
        </div>
        <!-- end .error-content -->

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