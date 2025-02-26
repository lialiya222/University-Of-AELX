<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $degree = $_POST['degree'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    $to = "aelxperience@gmail.com";
    $subject = "Новая заявка на поступление";
    $message = "Имя: $first_name\nФамилия: $last_name\nПочта: $email\nДата рождения: $dob\nСтепень: $degree\nГород: $city\nСтрана: $country";
    $headers = "From: webmaster@uoa.edu";

    if (mail($to, $subject, $message, $headers)) {
        echo "Ваша заявка была успешно отправлена!";
    } else {
        echo "Ошибка при отправке заявки.";
    }
}
?>