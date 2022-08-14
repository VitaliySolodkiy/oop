<?php

if (!isset($_SESSION['user'])) {
    header("location: index.php?page=login");
}
require_once "./elements/user.php";
?>
<h1>Profile</h1>
<h2>Hello, <?= $_SESSION['user']['login'] ?></h2>
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
            <button class="btn btn-secondary">
                <img src="https://cdn-icons-png.flaticon.com/512/3237/3237472.png" height="100" width="100" />
            </button>
            <span class="name mt-3"><?= $user_login ?></span>
            <span class="idd"><?= $user_email ?></span>

        </div>
    </div>
</div>