<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06/02/2018
 * Time: 16:11
 */
session_start();

$_SESSION['host'] = 'mysql:host=localhost;dbname=calendar;charset=utf8';
$_SESSION['ndcSQL'] = 'root';
$_SESSION['mdpSQL'] = '';

$bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);

