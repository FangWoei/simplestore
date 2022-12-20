<?php

function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Simple_Store',
        'root',
        'WaoDc0cvoNR1eUiM'
    );
}

function isLoggedIn()
{
    // if the user is logged in, it will return true
    // if the user is not logged in, it will return false
    return isset( $_SESSION['user'] );
}

function logout()
{
    // delete the session data so that the user logout
    unset( $_SESSION['user'] );
}