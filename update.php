<!-- Footer -->
<?php include "./header.php"?>
<link rel="stylesheet" href="style.css">

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM users WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $data = $row['data'];
          $komandos = $row['komandos'];
          $lyga = $row['lyga'];
          $vieta = $row['vieta'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $data = $_POST['data'];
      $komandos = $_POST['komandos'];
      $lyga = $_POST['lyga'];
      $vieta = $_POST['vieta'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE users SET data = '{$data}' , komandos = '{$komandos}' , lyga = '{$lyga}' , vieta = '{$vieta}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Rungtynės pakeistos sėkmingai')</script>";
    }             
?>

<h1 class="text-center">Keisti varžybas</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" >Data</label>
        <input type="text" name="data" class="form-control" value="<?php echo $data  ?>">
      </div>

      <div class="form-group">
        <label for="user" >Komandos</label>
        <input type="text" name="komandos" class="form-control" value="<?php echo $komandos  ?>">
      </div>

      <div class="form-group">
        <label for="user" >Lyga</label>
        <input type="text" name="lyga" class="form-control" value="<?php echo $lyga  ?>">
      </div>

      <div class="form-group">
        <label for="user" >vieta</label>
        <input type="text" name="vieta" class="form-control" value="<?php echo $vieta  ?>">
      </div>

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="Keisti">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="admin.php" class="btn btn-warning mt-5"> Atgal </a>
    <div>

<!-- Footer -->
<?php include "./footer.php" ?>