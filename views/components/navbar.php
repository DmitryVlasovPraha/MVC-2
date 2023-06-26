<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
        </div>
    </div>
    <?php

    if(!$_SESSION["user"]) {
        ?>
        <a class="nav-item nav-link active" href="/MyOwnSystem/login">Login</a>
    <a class="nav-item nav-link active" href="/MyOwnSystem/register">Register</a>
   <?php
    }
     ?>
    <?php
    if($_SESSION['user']) {
    ?>
    <form class="mt-4" method="post" action="/MyOwnSystem/auth/logout">
    <button type="submit">Logout</button>
    </form>
    <?php
    }
    ?>

</nav>
