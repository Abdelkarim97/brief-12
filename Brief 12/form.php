
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <title>Document</title>
</head>
<body>

<form action="data.php" method="POST"><br>
<?php

include './db.php';

?>

<form class="form-group">
    <div class="container" >
    <div class="form-group">
<input type="text" class="form-control" name="id" id="id" placeholder="ID"><br>
<input type="text" class="form-control" name="firstName" id="firstName" placeholder="First name"><br>
<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last name"><br>
<input type="date" class="form-control" name="birthDate" id="birthDate" placeholder="Birth date"><br>
<input type="text" class="form-control" name="Departement" id="Departement" placeholder="Departement"><br>
<input type="text" class="form-control" name="Salary" id="Salary" placeholder="Salary"><br>
<input type="text" class="form-control" name="fonction" id="fonction" placeholder="Function"><br>
<input type="file" class="form-control" name="Photo" id="Photo">
</div>
</div>
<div class="container text-right">
<input class ="btn btn-info align-items-center" type="submit" name="Submit" id="Submit" value="send">
</div>
</form>
</form>

    
</body>
</html>