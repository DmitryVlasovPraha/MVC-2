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
    <h2 class="mt-4">Sign up</h2>
    <form class="mt-4" method="post" enctype="multipart/form-data" action="/MyOwnSystem/auth/register">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username"  placeholder="Enter email" name="username">

        </div>
        <div class="form-group">
            <label for="full_name">Full name</label>
            <input type="text" class="form-control" id="full_name" placeholder="Enter email" name="full_name">

        </div>
        <div class="form-group">
            <label for="full_name">User avatar</label>
            <input type="file" class="form-control" id="avatar" placeholder="Enter email" name="avatar">

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirm">Password confirmation</label>
            <input type="password" class="form-control" id="password_confirm" placeholder="Password" name="password_confirm">
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