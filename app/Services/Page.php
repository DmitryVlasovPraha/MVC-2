<?php

namespace App\Services;

class Page
{
    /**
     * @param $part_name
     * @return void
     *
     * Разбивает шаблоны на компоненты
     */

    public static function part($part_name): void
    {
        require_once "views/components/" . $part_name . ".php";
    }

}