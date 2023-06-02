<?php






?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <title>Management student</title>
</head>
<body>

<h1 class="mb-5 mt-3 text-center fw-bolder">Web Application Student</h1>
<a href="index.php" style="margin-left: 30px; margin-top: 40px"><strong>Home page</strong></a>
<div class="container">
    <form action="add-student.php" method="post">
        <div class="row mb-3">
            <label for="name" class="col-2">Name</label>
            <div class="col-10"><input type="text" name="name" class="w-50" id="name" placeholder="Enter the name student"></div>
        </div>
        <div class="row mb-3" >
            <label for="classroom" class="col-2">Classroom</label>
            <div class="col-10"><input type="text" name="classroom" class="w-50" id="classroom" placeholder="Enter the classroom"></div>
        </div>
        <div class="row mb-3">
            <label for="grade" class="col-2">Grade</label>
            <div class="col-10"><input type="number" name="grade" class="w-50" id="grade" placeholder="Enter the grade"></div>
        </div>
        <button type="submit" class="btn btn-primary">AddStudent</button>

    </form>
</div>

</body>
</html>

