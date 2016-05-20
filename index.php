<?php
header('Content-Type: text/html; charset=utf-8');
session_start();


include_once'./config/config.php';
include_once './variables.php';
include_once './libs/defaults2.php';





include './mod/'.$_GET['action'].'/'.'main.php';




include './skin/index.tpl';
