<?php 
    include 'db.php';

    if(isset($_POST['search'])){
        $searchValue = $_POST['searchValue'];
        $sql = "SELECT * FROM employe WHERE CONCAT(`id`, `firstName`, `lastName`, `birthDate`, `departement`, `salary`, `fonction`, `photo`) LIKE '%$searchValue%';";
        $result =  mysqli_query($conn,$sql);
        
    } else {
        $sql = 'SELECT * FROM employe';
        $result = mysqli_query($conn, $sql);
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="db.css">
    <title>EMPLOYE DB</title>
</head>
<body>
    <div>
        <form action="index.php" method="POST">
            <div class="container py-3">
        <input class="form-control" type="text" name="searchValue" id="">
        <input class="btn btn-outline-info mp-5" type="submit" name="search" value="search">
        </div>
        </form>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first name</th>
      <th scope="col">Last name</th>
      <th scope="col">date</th>
      <th scope="col">departement</th>
      <th scope="col">Salary</th>
      <th scope="col">Function</th>
      <th scope="col">Picture</th>
      <th scope="col">Controls</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while ($row = mysqli_fetch_assoc($result)){
    ?>  
        <tr>
            <td scope="col"><?php echo $row['id'] ?></td>
            <td scope="col"><?php echo $row['firstName'] ?></td>
            <td scope="col"><?php echo $row['lastName'] ?></td>
            <td scope="col"><?php echo $row['birthDate'] ?></td>
            <td scope="col"><?php echo $row['departement'] ?></td>
            <td scope="col"><?php echo $row['salary'] ?></td>
            <td scope="col"><?php echo $row['fonction'] ?></td>
            <td scope="col"><?php echo $row['photo'] ?></td>
            <td>
                <button class="btn btn-danger" >
                <a class="text-light" id="deletebutton" href="index.php?delete=<?php echo $row['id']?>">Delete</a> 
                </button>
            </td>
        </tr>
    <?php 
        };
    ?>
  </tbody>
</table>
</body>
</html>

<?php

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($conn,"DELETE FROM employe WHERE id = $id");
        header('location: index.php');
    };

?>




