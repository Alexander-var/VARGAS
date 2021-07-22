<?php
session_start();
$_SESSION['a1'] = $_POST['a'];
$_SESSION['b1'] = $_POST['b'];
$_SESSION['c1'] = $_POST['c'];
include("index.php");