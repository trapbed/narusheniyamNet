<?php

session_start();

require_once "header.php";

if(!isset($_SESSION['user_check'])){
    // header('Location:/signin.php');
}
?>

<main>

    <div class="container">
        <h1>Личный кабинет</h1>
        <div class="mb-3">
            <button type='button' class="btn btn-info">
                <a href='/appl_create.php' class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    Подать заявление
                </a>
            </button>
        </div>
        <h2>Мои заявки</h2>
    </div>

</main>