<?php

function db() {
    $mysql = new mysqli("localhost", "root", "password", "mvc_food");

    if ($mysql->connect_error) {
        die("DB ulanishda xatolik!");
    }

    return $mysql;
}
