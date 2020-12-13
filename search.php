
<?php

include_once 'C:\xampp\htdocs\php\includes\header.php';

 ?>
<h1> Search Results</h1>

<div class ="player-container">
<?php

echo"<table border='1'>";
echo"<tr><td>ID</td><td>Name</td><td>Team</td><td>Age</td><td>PPG</td><td>FGM</td><td>FGA</td><td>GP</td><td>Min</td><tr>";

    if(isset($_POST['submit-search'])){
        $search =mysqli_real_escape_string($conn,$_POST['search']);
        $sql ="SELECT * FROM players WHERE p_id LIKE '%$search%' OR p_name LIKE '%$search%' OR p_team LIKE '%$search%' OR p_age LIKE '%$search%' OR p_ppg LIKE '%$search%' OR p_fgm LIKE '%$search%' OR p_fga LIKE '%$search%' OR p_gp LIKE '%$search%' OR p_min LIKE '%$search%' ";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!"."<br>";

        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr><td>{$row['p_id']}</td><td>{$row['p_name']}</td><td>{$row['p_team']}</td><td>{$row['p_age']}</td><td>{$row['p_ppg']}</td><td>{$row['p_fgm']}</td><td>{$row['p_fga']}</td><td>{$row['p_gp']}</td><td>{$row['p_min']}</td><tr>";
            }
        }else{
            echo "There are no results matching your search!";
        }
    }




?>
</div>



<div class ="allstar-container">


<?php

echo"<table border='1'>";
echo"<tr><td>ID</td><td>Team</td><td>Year</td><td>GP</td><td>Win</td><td>Loss</td><td>Points</td><tr>";

    if(isset($_POST['submit-search'])){
        $search =mysqli_real_escape_string($conn,$_POST['search']);
        $sql ="SELECT * FROM allstars WHERE a_id LIKE '%$search%' OR a_team LIKE '%$search%' OR a_year LIKE '%$search%' OR a_gp LIKE '%$search%' OR a_win LIKE '%$search%' OR a_loss LIKE '%$search%' OR a_points LIKE '%$search%' ";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!"."<br>";

        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr><td>{$row['a_id']}</td><td>{$row['a_team']}</td><td>{$row['a_year']}</td><td>{$row['a_gp']}</td><td>{$row['a_win']}</td><td>{$row['a_loss']}</td><td>{$row['a_points']}</td><tr>";
            }
        }else{
            echo "There are no results matching your search!";
        }
    }
?>
</div>

<div class ="records-container">

<?php

echo"<table border='1'>";
echo"<tr><td>ID</td><td>Player</td><td>Team</td><td>Points</td><td>Blocks</td><td>Rebounds</td><td>Assists</td><tr>";


    if(isset($_POST['submit-search'])){
        $search =mysqli_real_escape_string($conn,$_POST['search']);
        $sql ="SELECT * FROM records WHERE r_id LIKE '%$search%' OR r_player LIKE '%$search%' OR r_team LIKE '%$search%' OR r_points LIKE '%$search%' OR r_blocks LIKE '%$search%' OR r_rebounds LIKE '%$search%' OR r_assists LIKE '%$search%' ";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!"."<br>";

        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr><td>{$row['r_id']}</td><td>{$row['r_player']}</td><td>{$row['r_team']}</td><td>{$row['r_points']}</td><td>{$row['r_blocks']}</td><td>{$row['r_rebounds']}</td><td>{$row['r_assists']}</td><tr>";
            }
        }else{
            echo "There are no results matching your search!";
        }
    }
?>
</div>

<div class ="team-container">

<?php

echo"<table border='1'>";
echo"<tr><td>ID</td><td>Team</td><td>Win</td><td>Loss</td><td>GP</td><td>Points</td><td>FGA</td><tr>";


    if(isset($_POST['submit-search'])){
        $search =mysqli_real_escape_string($conn,$_POST['search']);
        $sql ="SELECT * FROM teams WHERE t_id LIKE '%$search%' OR t_name LIKE '%$search%' OR t_win LIKE '%$search%' OR t_loss LIKE '%$search%' OR t_gp LIKE '%$search%' OR t_points LIKE '%$search%' OR t_fga LIKE '%$search%' ";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!"."<br>";

        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr><td>{$row['t_id']}</td><td>{$row['t_name']}</td><td>{$row['t_win']}</td><td>{$row['t_loss']}</td><td>{$row['t_gp']}</td><td>{$row['t_points']}</td><td>{$row['t_fga']}</td><tr>";
            }
        }else{
            echo "There are no results matching your search!";
        }
    }
?>
</div>


<div class ="season-container">

<?php

echo"<table border='1'>";
echo"<tr><td>ID</td><td>Name</td><td>Team</td><td>Playoffs</td><td>Year</td><td>Loss</td><td>Win</td><td>WP</td><td>Points</td><tr>";


    if(isset($_POST['submit-search'])){
        $search =mysqli_real_escape_string($conn,$_POST['search']);
        $sql ="SELECT * FROM seasons WHERE s_id LIKE '%$search%' OR s_player LIKE '%$search%' OR s_team LIKE '%$search%' OR s_playoffs LIKE '%$search%' OR s_year LIKE '%$search%' OR s_loss LIKE '%$search%' OR s_win LIKE '%$search%' OR s_wp LIKE '%$search%' OR s_points LIKE '%$search%' ";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!"."<br>";

        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr><td>{$row['s_id']}</td><td>{$row['s_player']}</td><td>{$row['s_team']}</td><td>{$row['s_playoffs']}</td><td>{$row['s_year']}</td><td>{$row['s_loss']}</td><td>{$row['s_win']}</td><td>{$row['s_wp']}</td><td>{$row['s_points']}</td><tr>";
            }
        }else{
            echo "There are no results matching your search!";
        }
    }
?>
</div>

<div class ="playoff-container">

<?php

echo"<table border='1'>";
echo"<tr><td>ID</td><td>Team</td><td>Year</td><td>GP</td><td>Win</td><td>Loss</td><td>Points</td><tr>";


    if(isset($_POST['submit-search'])){
        $search =mysqli_real_escape_string($conn,$_POST['search']);
        $sql ="SELECT * FROM playoffs WHERE ps_id LIKE '%$search%' OR ps_team LIKE '%$search%' OR ps_year LIKE '%$search%' OR ps_gp LIKE '%$search%' OR ps_win LIKE '%$search%' OR ps_loss LIKE '%$search%' OR ps_points LIKE '%$search%' ";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!"."<br>";

        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo"<tr><td>{$row['ps_id']}</td><td>{$row['ps_team']}</td><td>{$row['ps_year']}</td><td>{$row['ps_gp']}</td><td>{$row['ps_win']}</td><td>{$row['ps_loss']}</td><td>{$row['ps_points']}</td><tr>";
            }
        }else{
            echo "There are no results matching your search!";
        }
    }
?>
</div>
