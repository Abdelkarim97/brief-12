<?php
    include 'form.php';
if (isset($_POST['Submit'])) {
   
    
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate'];
    $departement = $_POST['Departement'];
    $salary = $_POST['Salary'];
    $fonction = $_POST['fonction'];
    $photo = $_POST['Photo'];

$sql = "INSERT INTO employe (id, firstName, lastName, birthDate, departement, salary, fonction, photo) VALUES ( '$id', '$firstName', '$lastName', '$birthDate', '$departement', '$salary', '$fonction', '$photo')";
    
$rs = mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: index.php");

};
