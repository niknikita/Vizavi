<!DOCTYPE html>
<html lang="ru" class="no-js">

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />

    <title>Feedback Vizavi</title>
    <meta name="description" content="Feedback Vizavi" />
    <meta name="keywords" content="Feedback Vizavi" />
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
                        <h1 class="h2">Feedback</h1>
                        <p>Write to us for any question! We will reply you within 24 hours.</p>
                    </div>
                    <!-- end .form-caption -->
                    <!-- begin .contact-form__form-wrap -->
                    <div class="contact-form__form-wrap">
                        <!-- begin .flex -->
                        <div class="flex form-row">
                            <!-- begin .form-group -->
                            <div class="form-group form-group--textarea">
                                <textarea name="message" rows="8" cols="80" class="form-control"
                                    placeholder="Your message"></textarea>
                                <div class="input_message_container input_message"></div>
                            </div>
                            <!-- end .form-group -->
                        </div>
                        <!-- end .flex -->
                        <!-- begin .flex -->
                        <div class="flex form-row">
                            <!-- begin .form-group -->
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your name">
                                <div class="input_message_container input_name"></div>
                            </div>
                            <!-- end .form-group -->
                            <!-- begin .form-group -->
                            <div class="form-group">
                                <input name="second_name" type="text" class="form-control" placeholder="Your last name">
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
                                <input name="phone" type="tel" class="form-control" placeholder="Phone number">
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
                                        <span class="check__name">By filling in the fields indicated above, you have consented to the processing of your  <a href="http://vps-vizavi2018.host4g.ru/docs/client-agreement.pdf">personal data</a></span>
                                        <div class="input_message_container input_checkbox"></div>
                                    </label>
                                </div>
                                <!-- end .form-check -->
                            </div>
                            <!-- end .form-more -->
                            <div class="sum_notification"></div>
                            <!-- begin .form-action -->
                            <div class="form-action">
                                <button type="submit" class="button button-red">Send</button>
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
                event.preventDefault();

                $(event.target).find('button').attr("disabled", true);

                $('#contact_form').find('.input_message_container').text('')

                var form = $('#contact_form').serialize();

                $.ajax({
                    type: 'post',
                    url: '/contact.php',
                    data: form,
                    dataType: 'json',
                    success: function (data) {
                        // var obj = jQuery.parseJSON(data);
                        console.log(data.success);
                        if (data.success == 1) {
                            $('#contact_form').outerHeight($('#contact_form')
                        .outerHeight());
                            $('#contact_form').html(
                                '<div class="success_message"><div class="form-caption text-center"><h1 class="h2">Thank you!</h1><p>Our manager will contact you to clarify the details and answer all your questions.</p></div></div>'
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
                            'A problem has been occured! Please update the page and try to send your application one more time.'
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