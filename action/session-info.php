<?
session_start();
if($_SESSION['user']['login'] == ''){echo json_encode($res = ['status' => false]);}
