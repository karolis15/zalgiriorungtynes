<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from login where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ">
<a class="navbar-brand" href="home.php">
    <img src="img/zalgiris.jpg" width="200" height="70" alt="">
  </a>
  <a class="navbar-brand" href="#">Welcome: <?php echo $row['name']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="logout.php">Log out</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="home.php">User</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>


<!-- Header -->
<?php include "./header.php"?>

  <div class="container">
    <h1 class="text-center" >Kauno Žalgirio krepšinio komandos tvarkaraštis</h1>
      <a href="create.php" class='btn btn-outline-success mb-2'> <i class="bi bi-person-plus"></i> Pridėti rungtynes</a>

        <table class="table table-striped table-bordered table-hover bg-light">
          <thead class="table-success">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Data</th>
              <th  scope="col">Komandos</th>
              <th  scope="col"> Lyga</th>
              <th  scope="col"> Vieta</th>
              <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM users";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $data = $row['data'];        
              $komandos = $row['komandos'];         
              $lyga = $row['lyga'];
              $vieta = $row['vieta'];         

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$data}</td>";
              echo " <td > {$komandos}</td>";
              echo " <td >{$lyga} </td>";
              echo " <td >{$vieta} </td>";

              

              echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Keisti</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Atšaukti</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>




<!-- Footer -->
<?php include "./footer.php" ?>

</body>
</html>