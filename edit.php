<?php
include 'Dbcon.php';
$id = $_GET['id'];
$sql_edit = "SELECT * FROM student Where id = $id";
$result = mysqli_query($con,$sql_edit);
if(mysqli_num_rows($result)> 0)
{
  while($rows = mysqli_fetch_array($result)) {
    ?>
 
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="text-center">CRUD IN PHP</h1>
<form method="post">
    <div class="container my-5">
      <input type="hidden" class="form-control" name="edit_id" value="<?php echo $rows[0];?>">
        <div class="form-group">
          <label>Name:</label>
          <input type="text" class="form-control" name="Name"  value="<?php echo $rows['Name'];?>">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="Email"  value="<?php echo $rows['Email'];?>">
        </div>

        <div class="form-group">
          <label>Age</label>
          <input type="number" class="form-control" name="Age"  value="<?php echo $rows['Age'];?>">
        </div>

        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="Address" value="<?php echo $rows['Address'];?>">
        </div>

        <button type="Submit" class="btn btn-success" name="update">Update</button>
        </form>
    </div>

<?php
 }
}
?>
<?php
if(isset($_POST['update']))
{
  $update_id =$_POST['edit_id'];
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $age = $_POST['Age'];
  $address = $_POST['Address'];
  $sql_upd = "UPDATE student  SET  Name='$name',Email='$email',Age='$age',Address='$address'Where id  ='$update_id'";
$reses = mysqli_query($con,$sql_upd);
if($reses){
  echo "Data updated";
  header("Location:view.php");
}
else{
  echo "Data Not updated";
  header("Location:view.php");
}

}
?>
      



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>