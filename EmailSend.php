<?php
include_once 'CheckEmailSyntax.php';

echo "<div style=\"font-size:1.5em;padding: 5px;font-family: 'Arial Black';
    display: flex;justify-content: center;align-items: center;height: 100vh;margin: 0 auto\">";

if (empty($_POST['first-name']) or $_POST['first-name'] == "")
{
    echo "Name field is empty";
    exit();
}
if (empty($_POST['email']) or $_POST['email'] == "")
{
    echo "Email field is empty";
    exit();
}
if (empty($_POST['phone_number']) or $_POST['phone_number'] == "")
{
    echo "Phone number field is empty";
    exit();
}
if (empty($_POST['subject']) or $_POST['subject'] == "")
{
    echo "Subject field is empty";
    exit();
}
if (empty($_POST['message']))
{
    echo "Message field is empty";
    exit();
}

// Занесение полученных с формы данных в переменные для удобства.
$name = $_POST['first-name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (CheckEmailSyntax($email))
{
    $message = str_replace("\n.", "\n..", $message);
    $message = wordwrap($message, 70, "\r\n");
    if (mail($email, $subject, "Line 1\r\nLine 2\r\nLine 3", $headers))
    {
        echo 'Сообщение отправлено';
    }
    else
    {
        echo 'Ошибка при отправке. Не удалось отправить сообщение';
    }
}
else
{
    echo "Email is INCORRECT";
}
echo '</div>';

