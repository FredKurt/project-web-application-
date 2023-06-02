<?php
require_once('utils.php');
$array = retrieve();


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>List of students</title>
</head>
<body>

<a href="add.php"><strong>New student</strong></a>


    <h2>List of students</h2>

    <table id="table">
        <tr>
            <th>Registration number</th>
            <th>Name</th>
            <th>Classroom</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($array as $key => $value) {?>
            <tr>
                <td><?php print_r($value['registration']); ?></td>
                <td><?php print_r($value['name']); ?></td>
                <td><?php print_r($value['classroom']); ?></td>
                <td><?php if($value['grade'] >= 0 && $value['grade'] <= 10 ) { print_r($value['grade']); }?></td>
                <td><a href="update.php?registration=<?php print_r($value['registration']); ?>">U</a></td>
                <td><a href="delete.php?registration=<?php print_r($value['registration']); ?>">X</a></td>
            </tr>

        <?php }?>


    </table>



</body>
</html>


