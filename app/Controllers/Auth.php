<?php

namespace App\Controllers;

use App\Services\Router;
use R;

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

        if($password != $password_confirm){
            Router::error('500');
            die();
        }

        $avatar = $files["avatar"];

        $fileName = time() . '_' . $avatar["name"];

        $path = "uploads/avatars/" . $fileName;

        if(move_uploaded_file($avatar["tmp_name"], $path)) {
            $user = R::dispense('users');
            $user->email = $email;
            $user->username = $username;
            $user->full_name = $full_name;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            R::store($user);
            Router::redirect('login');
        } else {
            Router::error('500');
        }

    }



}