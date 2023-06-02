<?php
require_once ('utils.php');
if(isset($_POST)) {
    if(!isset($_POST['name']) || !isset($_POST['classroom']) || !isset($_POST['grade'])
        || empty($_POST['name']) || empty($_POST['classroom']) || empty($_POST['grade'] || $_POST['grade'] < 0 || $_POST['grade'] > 10) )
    {
        header("Location: add.php");
        exit;
    } else {
        add($_POST);
        header("Location: index.php");
        exit;

    }

}



