<?php

include_once 'C:\xampp\htdocs\php\includes\header.php';

 ?>

<form action="search.php" method="POST"> 
   <input type="text" name="search" placeholder= "Search">
   <button type ="submit" name="submit-search">Search</button>
</form>

</body>
</html>

<?php

echo "NBA Stats" . "<br>";



 ?>

 <?php
 echo"<br>";
 echo "Add to Players" . "<br>";
  ?>

 <form action = "includes/submit.inc.php" method="POST">
      <input type = "text" name = "id" placeholder="ID">
      <br>
      <input type = "text" name = "name" placeholder="Name">
      <br>
      <input type = "text" name = "team" placeholder="Team">
      <br>
      <input type = "text" name = "age" placeholder="Age">
      <br>
      <input type = "text" name = "ppg" placeholder="PPG">
      <br>
      <input type = "text" name = "fgm" placeholder="FGM">
      <br>
      <input type = "text" name = "fga" placeholder="FGA">
      <br>
      <input type = "text" name = "gp" placeholder="GP">
      <br>
      <input type = "text" name = "min" placeholder="Min">
      <br>
      <button type="submit" name="submit"> Submit </button>
 </form>

<div class ="player-container">
<?php

$sql = "SELECT * FROM players;";
$result = mysqli_query($conn, $sql);
echo"<br>";
echo "Players" . "<br>";
echo"<table border='1'>";
echo"<tr><td>ID</td><td>Name</td><td>Team</td><td>Age</td><td>PPG</td><td>FGM</td><td>FGA</td><td>GP</td><td>Min</td><tr>";

while ($row =  mysqli_fetch_assoc($result)){

  echo"<tr><td>{$row['p_id']}</td><td>{$row['p_name']}</td><td>{$row['p_team']}</td><td>{$row['p_age']}</td><td>{$row['p_ppg']}</td><td>{$row['p_fgm']}</td><td>{$row['p_fga']}</td><td>{$row['p_gp']}</td><td>{$row['p_min']}</td><tr>";


}
echo"</table>";

   ?>
</div>

<div class ="allstar-container">
   <?php

   $sql = "SELECT * FROM allstars;";
   $result = mysqli_query($conn, $sql);
   echo"<br>";
   echo "All Stars" . "<br>";
   echo"<table border='1'>";
   echo"<tr><td>ID</td><td>Team</td><td>Year</td><td>GP</td><td>Win</td><td>Loss</td><td>Points</td><tr>";

   while ($row =  mysqli_fetch_assoc($result)){

     echo"<tr><td>{$row['a_id']}</td><td>{$row['a_team']}</td><td>{$row['a_year']}</td><td>{$row['a_gp']}</td><td>{$row['a_win']}</td><td>{$row['a_loss']}</td><td>{$row['a_points']}</td><tr>";


   }
   echo"</table>";

      ?>
</div>

<div class ="records-container">

      <?php

      $sql = "SELECT * FROM records;";
      $result = mysqli_query($conn, $sql);
      echo"<br>";
      echo "Records" . "<br>";
      echo"<table border='1'>";
      echo"<tr><td>ID</td><td>Player</td><td>Team</td><td>Points</td><td>Blocks</td><td>Rebounds</td><td>Assists</td><tr>";

      while ($row =  mysqli_fetch_assoc($result)){

        echo"<tr><td>{$row['r_id']}</td><td>{$row['r_player']}</td><td>{$row['r_team']}</td><td>{$row['r_points']}</td><td>{$row['r_blocks']}</td><td>{$row['r_rebounds']}</td><td>{$row['r_assists']}</td><tr>";


      }
      echo"</table>";

         ?>
</div>

<div class ="team-container">
         
         <?php

         $sql = "SELECT * FROM teams;";
         $result = mysqli_query($conn, $sql);
         echo"<br>";
         echo "Teams" . "<br>";
         echo"<table border='1'>";
         echo"<tr><td>ID</td><td>Team</td><td>Win</td><td>Loss</td><td>GP</td><td>Points</td><td>FGA</td><tr>";

         while ($row =  mysqli_fetch_assoc($result)){

           echo"<tr><td>{$row['t_id']}</td><td>{$row['t_name']}</td><td>{$row['t_win']}</td><td>{$row['t_loss']}</td><td>{$row['t_gp']}</td><td>{$row['t_points']}</td><td>{$row['t_fga']}</td><tr>";


         }
         echo"</table>";

            ?>
</div>

<div class ="season-container">


<?php

            $sql = "SELECT * FROM seasons;";
            $result = mysqli_query($conn, $sql);
            echo"<br>";
            echo "Seasons" . "<br>";
            echo"<table border='1'>";
            echo"<tr><td>ID</td><td>Name</td><td>Team</td><td>Playoffs</td><td>Year</td><td>Loss</td><td>Win</td><td>WP</td><td>Points</td><tr>";

            while ($row =  mysqli_fetch_assoc($result)){

              echo"<tr><td>{$row['s_id']}</td><td>{$row['s_player']}</td><td>{$row['s_team']}</td><td>{$row['s_playoffs']}</td><td>{$row['s_year']}</td><td>{$row['s_loss']}</td><td>{$row['s_win']}</td><td>{$row['s_wp']}</td><td>{$row['s_points']}</td><tr>";


            }
            echo"</table>";

               ?>
</div>

<div class ="playoff-container">
   <?php

   $sql = "SELECT * FROM playoffs;";
   $result = mysqli_query($conn, $sql);
   echo"<br>";
   echo "Playoffs" . "<br>";
   echo"<table border='1'>";
   echo"<tr><td>ID</td><td>Team</td><td>Year</td><td>GP</td><td>Win</td><td>Loss</td><td>Points</td><tr>";

   while ($row =  mysqli_fetch_assoc($result)){

     echo"<tr><td>{$row['ps_id']}</td><td>{$row['ps_team']}</td><td>{$row['ps_year']}</td><td>{$row['ps_gp']}</td><td>{$row['ps_win']}</td><td>{$row['ps_loss']}</td><td>{$row['ps_points']}</td><tr>";


   }
   echo"</table>";

      ?>

</div>




 </body>
 </html>
