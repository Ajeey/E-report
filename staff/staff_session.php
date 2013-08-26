<?php
session_start();
if($_SESSION['staff']!=3)
{
	header('Location:../index.php');
}
