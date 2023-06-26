<?php
use App\Services\Page;
?>
<!DOCTYPE html>
<html lang="en">
<?php
Page::part('head');
?>

<body>

<?php
Page::part('navbar');
?>

<div class="container">
    <h2 class="mt-4">Регистрация</h2>
    <form class="mt-4" method="post" enctype="multipart/form-data" action="/MyOwnSystem/auth/register">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username"  placeholder="Enter email" name="username">

        </div>
        <div class="form-group">
            <label for="full_name">Имя</label>
            <input type="text" class="form-control" id="full_name" placeholder="Enter email" name="full_name">

        </div>
        <div class="form-group">
            <label for="full_name">Аватар пользователя</label>
            <input type="file" class="form-control" id="avatar" placeholder="Enter email" name="avatar">

        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirm">Подтверждение пароля</label>
            <input type="password" class="form-control" id="password_confirm" placeholder="Password" name="password_confirm">
        </div>

        <button type="submit" class="btn btn-primary">Регистрация</button>
    </form>

    <div>
        <a href="/MyOwnSystem/login">Страница входа</a>
    </div>

</div>
</body>
</html>