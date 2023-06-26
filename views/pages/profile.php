<?php

use App\Services\Page;
use App\Services\Router;

if(!$_SESSION["user"]) {
    Router::redirect('register');
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
    <h2>Test page</h2>
</div>
</body>
</html>