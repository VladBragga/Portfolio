<?
session_start();
include "../connect.php";
$search_result = trim( $_GET['search']);

       if(empty($search_result)) { $_SESSION['search_result'] = 0;}
       else{
            $sql = "SELECT * FROM `cars` WHERE `name` LIKE '%$search_result%'";
        $_SESSION['search_result'] = $sql;
       }
       /* echo $_SESSION['search_result'] ; */
        header('Location:http://autodealer/index.php');
