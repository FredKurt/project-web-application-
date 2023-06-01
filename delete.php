<?php
require_once('utils.php');
$registration = $_GET['registration'];

deleteStudent($registration);

header("Location: index.php");
exit;