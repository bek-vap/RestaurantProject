<?php

function db() {
    $mysql = new mysqli("localhost", "root", "Jafarbek123000566j", "mvc_food");

    if ($mysql->connect_error) {
        die("DB ulanishda xatolik!");
    }

    return $mysql;
}
