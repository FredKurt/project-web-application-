<?php
require_once ("utils.php");
$registration = $_POST['registration'];
editStudent($registration, $_POST);
header("Location: index.php");
exit;


