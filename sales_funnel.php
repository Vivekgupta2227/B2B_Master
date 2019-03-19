<?php
//upload.php
$connect = mysqli_connect("localhost", "root", "", "jetlead");
$query2 ="SELECT * FROM se";  
 $result1 = mysqli_query($connect, $query2);  
$message = '';

if(isset($_POST["upload"]))
{
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $emails = mysqli_real_escape_string($connect, $data[0]);
    $firstName = mysqli_real_escape_string($connect, $data[1]);  
                $lastName = mysqli_real_escape_string($connect, $data[2]);
    $designation = mysqli_real_escape_string($connect, $data[3]);
    $companyName = mysqli_real_escape_string($connect, $data[4]);
    $companyWebsite = mysqli_real_escape_string($connect, $data[5]);
    $city = mysqli_real_escape_string($connect, $data[6]);
    $query = "INSERT INTO se(emails,firstName,lastName,designation,companyName,companyWebsite,city) VALUES('$emails','$firstName','$lastName','$designation','$companyName','$companyWebsite','$city')";  
    $query1 = "
     UPDATE se 
     SET emails = '$emails', 
     firstName = '$firstName', 
     lastName = '$lastName',
     designation = '$designation',
     companyName = '$companyName',
     companyWebsite = '$companyWebsite',
     city = '$city', 
     WHERE senderid = '$senderid'
    ";
    mysqli_query($connect, $query);
   }
   fclose($handle);
   header("location: upload.php?updation=1");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">Product Updation Done</label>';
}

$query = "SELECT * FROM se";
$result = mysqli_query($connect, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <style>


.float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#0C9;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
}

.my-float{
  margin-top:22px;
}
.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 60%;
  height: 60%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 90%;
  overflow: auto;
}
.popup .content .actionb {
  
  display: flex;

}
.popup .content .actionb .form {
  display: inline-flex;
  padding: 0.75rem 1rem;
  margin-left: 5rem;
  margin-right: 5rem;
}
.title{
  align-self: center;
  padding: 50px 280px 100px 280px;
  border: none;
  outline: none;

}



@media screen and (max-width: 700px){
  .box{
    width: 100%;
  }
  .popup{
    width: 100%;
  }
}
  </style>

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">
  <div class="container-fluid">

 <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <div class="sidebar-brand-text mx-3"><img src="img/logo-01.jpg" style="height: 50px; width: 150px; border-radius: 5px 5px 5px 5px;"></div>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center" style="margin-right: 10px">
         <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group" style="width: 450px">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for recipients..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </header>


   <form method="post" enctype='multipart/form-data'>
     <h1 class="h3 mb-2 text-gray-800">Add Sales List</h1>
          <p class="mb-4">Please Select File(Only CSV Format).</p>
    <input type="file" name="product_file"  class="form-control bg-light border-0 small" /></p>
    <br />
  </form>
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
    <form method="post" action="export.php">
      <p align="right">
    <input type="submit" name="export" class="btn btn-success" value="Download Prospect List" /></p>
   </form>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
      <th>Emails</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Designation</th>
      <th>Company's Name</th>
      <th>Company's Website</th>
      <th>City</th>
      <th>Social Handles</th>
      <th><a href="#"><i class="fas fa-rss-square" style="font-size:16px "></i></a></th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["emails"].'</td>
       <td>'.$row["firstName"].'</td>
       <td>'.$row["lastName"].'</td>
       <td>'.$row["designation"].'</td>
       <td>'.$row["companyName"].'</td>
       <td>'.$row["companyWebsite"].'</td>
       <td>'.$row["city"].'</td>
      </tr>
      ';
     }
     ?>
    </table>
   </div>
  </div>
   <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Jetleads 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
