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

  <title>Campaign Options</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3"><img src="img/logo-01.jpg" style="height: 50px; width: 160px; border-radius: 5px 5px 5px 5px;"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt" style="font-size: 18px"></i>
          <span style="font-size:15px">Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
 <li class="nav-item">
        <a class="nav-link" href="campaign_start.php" aria-expanded="true">
          <i class="fas fa fa-toggle-off" style="font-size:18px"></i>
          <span style="font-size:15px">Start</span>
        </a>
      </li>
<hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="campaign_recipients.php" aria-expanded="true">
          <i class="far fa-address-book" style="font-size:18px"></i>
          <span style="font-size:15px">Recipients</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
       <li class="nav-item">
        <a class="nav-link" href="campaign_compose.php" aria-expanded="true">
          <i class="far fa-envelope-open" style="font-size:18px"></i>
          <span style="font-size:15px">Compose</span>
        </a>
      </li>

      <!-- Heading -->

      <hr class="sidebar-divider">
       <li class="nav-item active">
        <a class="nav-link" href="campaign_options.php" aria-expanded="true">
          <i class="fas fa fa-edit" style="font-size:18px"></i>
          <span style="font-size:15px">Options</span>
        </a>
      </li>

      <hr class="sidebar-divider">
       <li class="nav-item">
        <a class="nav-link" href="campaign_send.php" aria-expanded="true">
          <i class="fas fa fa-paper-plane" style="font-size:18px"></i>
          <span style="font-size: 15px">Send</span>
        </a>
      </li>
     
     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <b><h1 style="padding: 10px 0 0 320px ">Customize your Campaign</h1></b>

         
        </nav>
        <!-- End of Topbar -->


        
        <div class="container-fluid">

          <!-- Page Heading -->
             <h4 align="center">Tweak how your campaign will be sent</h4><br>
       <div align="left" style="margin-left: 350px">
       <input type="checkbox" name="opens" value="opens"> Track opens<br>
       <input type="checkbox" name="clicks" value="clicks"> Track link clicks<br>
       <input type="checkbox" name="schedule" class="boxcheck" onchange="schedule()"> Schedule this send <br>
       <script type="text/javascript">
          function schedule()
    {
    if($('.boxcheck').is(":checked"))   
        $(".schedule").show();
    else
        $(".schedule").hide();
           }
       </script> 
         <div class="schedule"> 
          <label style="font-size: 14px; color: #3B8DB5"><br>Sending Calender Timezone</label>
          <h5><b>(will use campaign's sending account)</b></h5>
          <div class="form-group">
          <label style="font-size: 14px; color: #3B8DB5">Scheduled Start Date<br><input type="date" id="date" class="form-control bg-light border-0 small"></label>
          <label style="font-size: 14px; color: #3B8DB5">Scheduled Time<br><input type="time" id="time" class="form-control bg-light border-0 small"></label>
          <script type="text/javascript">
            let date = new Date().toISOString().substr(0, 10);
            document.querySelector("#date").value = date;
          </script>
        </div>
            </div>
       <br>
      <form action="campaign_send.php" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">

<input type="checkbox" name="checkbox" value="check" id="agree" /> I'll obey pertinent laws and I've read these <a href="#"> important notes</a>.<br>


       </div>
     <br><input type="submit" name="submit" id="optionsubmit" class="btn btn-primary btn-user btn-block" value="Next >" style="width: 150px; margin-left:450px;"><br>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
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

</body>

</html>
