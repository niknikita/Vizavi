<!DOCTYPE html>
<html lang="ru" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <title>Форма обратной связи Vizavi</title>
    <meta name="description" content="Vizavi — компания нового поколения, которая предоставляет трейдерам самый быстрый и защищенный доступ к финансовым рынкам." />
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

        <!-- begin .contact-form -->
        <div class="contact-form">
            <!-- begin .contact-form__wrap -->
            <div class="contact-form__wrap">
                <form class="form-box contact-form__form" id="contact_form">
                    <!-- begin .form-caption -->
                    <div class="form-caption">
                        <h1 class="h2">Обратная <span>связь</span></h1>
                        <p>Напишите нам по любому вопросу! Мы ответим вам в течении 24 часов.</p>
                    </div>
                    <!-- end .form-caption -->
                    <!-- begin .contact-form__form-wrap -->
                    <div class="contact-form__form-wrap">
                        <!-- begin .flex -->
                        <div class="flex form-row">
                            <!-- begin .form-group -->
                            <div class="form-group form-group--textarea">
                                <textarea name="message" rows="8" cols="80" class="form-control"
                                    placeholder="Ваше сообщение"></textarea>
                                <div class="input_message_container input_message"></div>
                            </div>
                            <!-- end .form-group -->
                        </div>
                        <!-- end .flex -->
                        <!-- begin .flex -->
                        <div class="flex form-row">
                            <!-- begin .form-group -->
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Ваше имя">
                                <div class="input_message_container input_name"></div>
                            </div>
                            <!-- end .form-group -->
                            <!-- begin .form-group -->
                            <div class="form-group">
                                <input name="second_name" type="text" class="form-control" placeholder="Ваша фамилия">
                                <div class="input_message_container input_second_name"></div>
                            </div>
                            <!-- end .form-group -->
                        </div>
                        <!-- end .flex -->
                        <!-- begin .flex -->
                        <div class="flex form-row">
                            <!-- begin .form-group -->
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email">
                                <div class="input_message_container input_email"></div>
                            </div>
                            <!-- end .form-group -->
                            <!-- begin .form-group -->
                            <div class="form-group">
                                <input name="phone" type="tel" class="form-control" placeholder="Телефон">
                                <div class="input_message_container input_phone"></div>
                            </div>
                            <!-- end .form-group -->
                        </div>
                        <!-- end .flex -->
                        <!-- begin .contact-form__form-footer -->
                        <div class="contact-form__form-footer">
                            <!-- begin .form-more -->
                            <div class="form-more">
                                <!-- begin .form-check -->
                                <div class="form-check">
                                    <label class="check">
                                        <input class="check__input" type="checkbox" checked required name="agreement">
                                        <span class="check__box"></span>
                                        <span class="check__name">Заполнив поля, указанные выше, Вы дали согласие на
                                            обработку ваших <a href="http://vps-vizavi2018.host4g.ru/docs/privacy-policy.pdf">персональных данных</a></span>
                                        <div class="input_message_container input_checkbox"></div>
                                    </label>
                                </div>
                                <!-- end .form-check -->
                            </div>
                            <!-- end .form-more -->
                            <div class="sum_notification"></div>
                            <!-- begin .form-action -->
                            <div class="form-action">
                                <button type="submit" class="button button-red">Отправить</button>
                            </div>
                            <!-- end .form-action -->
                        </div>
                        <!-- end .contact-form__form-footer -->
                    </div>
                    <!-- end .contact-form__form-wrap -->
                </form>
            </div>
            <!-- end .contact-form__wrap -->
        </div>
        <!-- end .contact-form -->


    </main>
    
    <?php
        include 'footer.php';
    ?>
    
    <?php
        include 'scripts.php';
    ?>

    <script>
        jQuery(document).ready(function () {
            $('#contact_form').submit(function (event) {
                console.log(1);
                event.preventDefault();
                console.log(2);

                $(event.target).find('button').attr("disabled", true);

                $('#contact_form').find('.input_message_container').text('')

                var form = $('#contact_form').serialize();

                $.ajax({
                    type: 'post',
                    url: '/ru/contact.php',
                    data: form,
                    dataType: 'json',
                    success: function (data) {
                        // var obj = jQuery.parseJSON(data);
                        console.log(data.success);
                        if (data.success == 1) {
                            $('#contact_form').outerHeight($('#contact_form')
                        .outerHeight());
                            $('#contact_form').html(
                                '<div class="success_message"><div class="form-caption text-center"><h1 class="h2">Спасибо!</h1><p>Мы приняли вашу заявку и в ближайшее время выйдем с вами на связь!</p></div></div>'
                            )
                        } else {
                            console.log(data.errors);
                            $(event.target).find('button').attr("disabled", false);
                            $.each(data.errors, function (key, value) {
                                $('#contact_form').find(value.field).html(value
                                    .error_message)
                            });
                        }
                    },
                    error: function (data) {
                        alert(
                            'Возникла ошибка! Пожалуйста, обновите страницу и попробуйте ещё раз.'
                            )
                    }
                });
            })
        });
    </script>

    <style>
        .form-group {
            flex-wrap: wrap;
        }

        .input_message_container {
            color: red;
            font-size: 12px;
        }
    </style>

    <?php
        include 'sprite.php';
    ?>
</body>

</html>