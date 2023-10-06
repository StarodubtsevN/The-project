<?php

function url($path)
{
    return '/pnt/code/' . $path . '.php';
}

function ensureLogIn()
{
    session_start();
    if (!isset($_SESSION['id'])) {
        header('location: ' . url('auth/_log-in_form'));
        die;
    }
}