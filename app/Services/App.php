<?php

namespace App\Services;

use R;

class App
{

    /**
     * Запускает выполнение функций
     * @return void
     */
    public static function start() {
        self::libs();
        self::db();
    }

    /**
     * @return void
     * Подключение библиотек к проекту
     */
    public static function libs() {
        $config = require_once "config/app.php";
        foreach ($config["libs"] as $lib) {
            require_once "libs/" . $lib . ".php";
        }
    }

    /**
     * @return void
     * Подключение к Базе данных
     */
    public static function db() {
        $config = require_once "config/db.php";

        if ($config["enable"]) {
            R::setup( 'mysql:host='. $config["host"].';port='.$config["port"].';dbname=' . $config["db"].'',
                $config["username"], $config["password"] );

            if (!R::testConnection()) {
                die('Error database connect');
            }
        }
    }
}