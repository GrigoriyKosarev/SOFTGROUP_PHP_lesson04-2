<!DOCTYPE html>
<meta charset="UTF-8">

<?php
    //Для меню використати власну функцію, у яку передається масив вигляду “адреса_сторінки.php”=>”Назва сторінки”.

    function getMenuItems(){
        $menuItems = [
            "index.php" => "Главная",
            "about.php" => "О нас",
            "contacts.php" => "Контакты",
        ];
        return $menuItems;
    }

    return getMenuItems();

?>
