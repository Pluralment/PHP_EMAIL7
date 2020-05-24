<?php
// Функция, проверяющая принятый email на корректность.
function CheckEmailSyntax($email)
{
    if(preg_match("/^((?!\.)[\w\-_\.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/", $email))
        return true;
}