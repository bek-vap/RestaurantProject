<?php

function db() {
    $mysql = new mysqli("localhost", "root", "", "mvc_food");

    if ($mysql->connect_error) {
        die("DB ulanishda xatolik!");
    }

    return $mysql;
}
