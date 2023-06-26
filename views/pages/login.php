<?php
use App\Services\Page;

if ($_SESSION['user']) {
    \App\Services\Router::redirect('profile');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
Page::part('head');
?>
<body>
<?php
Page::part('navbar')
?>
<div class="container">
    <h2 class="mt-4">Страница входа</h2>


    <form method="post" action="/MyOwnSystem/auth/login">
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1"></label>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>

    <div>
        <a href="/MyOwnSystem/register">Страница регистрации</a>
    </div>

</div>
</body>
</html>