<!DOCTYPE html>
<meta charset="UTF-8">

<?php

    //Головна, Поточне завдання, Домашнє завдання, Про мене, Авторизація, Реєстрація
    //(поля Логін, Пароль, Повторити Пароль, e-mail, капча)
    function getMenuItems(){
        $menuItems = [
            "index.php" => "Головна",
            "current_task.php" => "Поточне завдання",
            "home_task.php" => "Домашнє завдання",
            "about.php" => "Про мене",
            "authorization.php" => "Авторизація",
            "registration.php" => "Реєстрація",
        ];
        return $menuItems;
    }

    return getMenuItems();

?>
