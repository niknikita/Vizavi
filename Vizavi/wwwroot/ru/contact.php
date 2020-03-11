<?php // Initialize variables to null.
    $name =""; // Sender Name
    $email =""; // Sender's email ID
    $purpose ="Заявка на сайте vizavi.com"; // Subject of mail
    $message =""; // Sender's Message
    $second_name =""; // Sender's age
    $agreement ="";
    $phone ="";
    $nameError ="";
    $emailError ="";
    $purposeError ="";
    $messageError ="";
    $successMessage =""; // On submittingform below function will execute.
    $errors = [];
    $success = 0;

    if(isset($_POST['email'])) {

        // Checking null values in message.
        if (empty($_POST["name"])){
            $errors[] = (object) array('field' => '.input_name', 'error_message' => "Это поле обязательно для заполнения");
        } else {
            $name = test_input($_POST["name"]); // check name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Zа-яА-Я]+$/ui",$name) && !preg_match("/^[a-zA-Z]?$/u",$name)) {
                // $errors[] = "Можно использовать только буквы и пробелы";
                $errors[] = (object) array('field' => '.input_name', 'error_message' => "Можно использовать только буквы");
            }
        }

        if (empty($_POST["agreement"])){
            $errors[] = (object) array('field' => '.input_checkbox', 'error_message' => "Это поле обязательно для заполнения");
        } else {
            $agreement = test_input($_POST["agreement"]); // check name only contains letters and whitespace
        }

        if (empty($_POST["email"])) {
            $errors[] = (object) array('field' => '.input_email', 'error_message' => "Это поле обязательно для заполнения");
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["phone"])) {
            $errors[] = (object) array('field' => '.input_phone', 'error_message' => "Это поле обязательно для заполнения");
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/\+(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\d{1,14}$/u",$phone)) {
                $errors[] = (object) array('field' => '.input_phone', 'error_message' => "Введите телефон в формате <span style='white-space: nowrap;'>+7-XXX-XXX-XXXX</span>");
            }
        }

        if (empty($_POST["second_name"])) {
            $errors[] = (object) array('field' => '.input_second_name', 'error_message' => "Это поле обязательно для заполнения");
        } else {
            $second_name = test_input($_POST["second_name"]);
            if (!preg_match("/^[a-zA-Zа-яА-Я]+$/ui",$second_name)) {
                $errors[] = (object) array('field' => '.input_second_name', 'error_message' => "Фамилия указана некорректно");
            }
        }

        // Checking null values in message.
        if (empty($_POST["message"])) {
            $errors[] = (object) array('field' => '.input_message', 'error_message' => "Это поле обязательно для заполнения");
        } else  {
            $message = test_input($_POST["message"]);
        }

        // Checking null values in the message.
        if( !($name=='') && !($email=='') && !($purpose=='') && !($message=='') && count($errors) == 0) { // Checking valid email.
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $header= $name."<". $email .">";
                $headers = "vizavi.com"; /* Let's prepare the message for the e-mail */
                $msg1 = "Заявка на сайте vizavi.com

Тема:      $purpose
Имя:       $name
E-mail:    $email
Телефон:   $phone
Фамилия:   $second_name
Сообщение: $message
Согласие на обработку личных данных: $agreement"; /* Send the message using mail() function */

                if(mail("support@vizavi.com", $header, $msg1 )) {
                    $success = 1;
                    echo json_encode(array('errors' => $errors, 'success' => $success));
                }
            } else{
                // $errors[] = 'Указан не валидный e-mail!';
                $errors[] = (object) array('field' => '.input_email', 'error_message' => "Указан не валидный e-mail!");
                echo json_encode(array('errors' => $errors, 'success' => $success));
            }
        } else {
            // $errors[] = 'Одно из обязательных полей не заполнено или заполнено неверно!';
            $errors[] = (object) array('field' => '.sum_notification', 'error_message' => "Одно из обязательных полей не заполнено или заполнено неверно!");
            echo json_encode(array('errors' => $errors, 'success' => $success));
        }
    } // Function for filtering input values.function test_input($data)



    function test_input($data) {
        $data = trim($data);
        $data =stripslashes($data);
        $data =htmlspecialchars($data);
        return $data;
    }
?>