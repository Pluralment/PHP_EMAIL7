<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="FormStyles.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Email form</title>
</head>
<body>
<div class="formContainer">
    <form action="EmailSend.php" method="post">
        <h2>Message</h2>
        <div class="formField multiInput">
            <label for="name">Name</label>
            <input type="text" name="first-name" id="name" placeholder="Имя" value="">
        </div>
        <div class="formField inputRight">
            <label for="text">Phone number</label>
            <input type="tel" name="phone_number" id="phone_number" placeholder="+" value="">
        </div>
        <div class="formField inputRight">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Youremail@gmail.com" value="">
        </div>
        <div class="formField inputRight">
            <label for="text">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="" value="">
        </div>
        <div class="formField inputRight">
            <label for="text">Text</label>
            <textarea name="message" id="message" placeholder="Start typing..." ></textarea>
        </div>
        <div class="formField inputRight submitField">
            <input type="submit" value="Send">
        </div>
    </form>
</div>
</body>
</html>