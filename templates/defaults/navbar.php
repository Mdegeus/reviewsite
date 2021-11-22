<nav class="navbar navbar-default">
    <?php session_start(); ?>
    <ul class="nav">
        <li class="nav-item">
            <a class="navbar-brand" href="/">Review Site</a>
        </li>
    <div class="d-flex ms-lg-3 mt-lg-0 mt-2">
        <?php if (isset($_SESSION['user'])): ?>
            <form method="post">
                <button type="submit" name="logout" value="true">Logout</button>
            </form>
        <?php else: ?>
            <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            <button type="button" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
        <?php endif; ?>
        
    </div>

    <?php if (isset($_SESSION['user'])){ echo "<h5> You are logged in as: " .$_SESSION['user']->username . "</h5>"; } ?>
    
</nav>

<?php
    if (isset($_POST['logout'])) {
        $_SESSION['user'] = null;

        header('Location: /');
    }
?>