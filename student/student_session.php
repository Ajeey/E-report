<?php
session_start();

if($_SESSION['student']!=1)
	header('Location:../index.php');

?>