
<!-- Header -->
<?php  include "./header.php" ?>
<link rel="stylesheet" href="style.css">

<?php 
  if(isset($_POST['create'])) 
    {
        $data = $_POST['data'];
        $komandos = $_POST['komandos'];
        $lyga = $_POST['lyga'];
        $vieta = $_POST['vieta'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO users(data, komandos, lyga, vieta) VALUES('{$data}','{$komandos}','{$lyga}','{$vieta}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Rungtynės pridėtos sėkmingai')</script>";
              }         
    }
?>

<h1 class="text-center">Pridėti rungtynes</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="date" class="form-label">Data</label>
        <input type="date" name="data"  class="form-control">
      </div>

      <div class="form-group">
        <label for="user" class="form-label">Komandos</label>
        <input type="user" name="komandos"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="user" class="form-label">Lyga</label>
        <input type="user" name="lyga"  class="form-control">
      </div>    

      <div class="form-group">
        <label for="user" class="form-label">Vieta</label>
        <input type="user" name="vieta"  class="form-control">
      </div>   

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="Pridėti">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="admin.php" class="btn btn-warning mt-5"> Atgal </a>
  <div>

<!-- Footer -->
<?php include "./footer.php" ?>