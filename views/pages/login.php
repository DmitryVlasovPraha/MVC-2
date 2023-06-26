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
    <h2 class="mt-4">Sign in</h2>
    <form class="mt-4" method="post" action="/auth/login">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>