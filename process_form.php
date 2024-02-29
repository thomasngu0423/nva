<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "thomasngunirvana@gmail.com";
    $subject = "New enquiry from Thomas Nirvana website";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "消息已成功发送";
    } else {
        echo "发送消息时出错";
    }
}
?>
