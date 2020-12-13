
<?php

include_once 'C:\xampp\htdocs\php\includes\dbh.inc.php';

$id = $_POST['id'];
$name = $_POST['name'];
$team = $_POST['team'];
$age = $_POST['age'];
$ppg= $_POST['ppg'];
$fgm = $_POST['fgm'];
$fga = $_POST['fga'];
$gp = $_POST['gp'];
$min = $_POST['min'];


$sql = "INSERT INTO players (p_id,p_name, p_team, p_age, p_ppg, p_fgm, p_fga, p_gp, p_min)
VALUES('$id','$name', '$team', '$age', '$ppg' , '$fgm', '$fga', '$gp', '$min');";


mysqli_query($conn,$sql);
header("Location: ../index.php?signup=success");
?>
