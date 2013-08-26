<?php

session_start();
if($_SESSION['admin']!=2)
{
	header('Location:../index.php');
}
