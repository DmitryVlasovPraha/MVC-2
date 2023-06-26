<?php

use App\Services\Page;

if(!$_SESSION["user"]) {
    \App\Services\Router::redirect('register');
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
   <h2>hello, <?=$_SESSION["user"]["full_name"]  ?></h2>
</div>
</body>
</html>