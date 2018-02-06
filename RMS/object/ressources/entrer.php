<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06/02/2018
 * Time: 17:17
 */include_once ('./connectionBdd.php');

 include_once ('./pageHeader.php');

 if ($_SESSION['login']){

     include_once ('./calendrier.php');
 }