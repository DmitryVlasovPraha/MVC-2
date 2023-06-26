<?php

namespace App\Controllers;

use App\Services\Router;

class Auth
{
    public function register($data, $files) {

        /**
         *  Не сделана валидация
         */

        $email = $data["email"];
        $username = $data["username"];
        $full_name = $data["full_name"];
        $password = $data["password"];
        $password_confirm = $data["password_confirm"];

        $avatar = $files["avatar"];

        $fileName = time() . '_' . $avatar["name"];

        if(move_uploaded_file($avatar["tmp_name"], "uploads/avatars/" . $fileName)) {

        } else {
            Router::error('500');
        }

    }



}