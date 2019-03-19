<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <style type="text/css">
    .compose{
      align-self: center;
    }
   .close {
  position: absolute;
  top: 12px;
  right: 22px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
 .close:hover {
  color: #06D85F;
}

.btn-default{
   background: #0099cc;
    color: #ffffff;
}
.btn-primary{
   background: #0099cc;
    color: #ffffff;
}
.btn-secondary{
   background: #0099cc;
    color: #ffffff;
}
  </style>
  <title>editor</title>
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Include Editor style. -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->


<!-- Include jQuery lib. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>
</head>
<body>
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
 <li class="nav-item active">
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
       <li class="nav-item active">
        <a class="nav-link" href="campaign_compose.php" aria-expanded="true">
          <i class="far fa-envelope-open" style="font-size:18px"></i>
          <span style="font-size:15px">Compose</span>
        </a>
      </li>

      <!-- Heading -->

      <hr class="sidebar-divider">
       <li class="nav-item">
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

          <b><h1 class="compose" style="padding: 10px 300px 0 400px ">Compose Email</h1></b>

         
        </nav>
         <div class="container-fluid">
             <h5 align="center">Compose your mail for the campaign...</h5>
                <div>
                <form action="campaign_options.php" method="POST" id="ticketTable" style="padding:10px 150px 0 150px">
                <input type="hidden" name="status" id="status" value="0" />
               <div class="form-group">
                  <label for="emailSubject" class="col-sm-2 control-label"></label>
                  <input type="email" class="form-control" id="emailSubject" placeholder="Subject of email...">
               </div>
               <div class="form-group">
                 <label for="emailBody" class="col-sm-2 control-label"></label>
                 <textarea id="emailBody" class="form-control" placeholder="Message..."></textarea>
               </div>
                
                <button name = "follow up" type="button" class="btn-copy btn-default btn-lg btn-block">+ ADD FOLLOW-UP</button>
              <div> 
                <div class= "card" style="margin-top: 30px; margin-bottom: 30px;" >
                  <div class="card-body">
                     <b><h3>Follow Ups</h3></b>
                     <h6>Follow-ups are stopped when a recipient becomes a lead.</h6><br>
                       <div class="follow_up" >
                           <form action="#" method="POST" id="ticketTable" style="padding:10px 150px 0 150px">
                               <input type="hidden" name="status" id="status" value="0" />
                                <h7>Wait X Days : </h7>
                                <input type="number" name="followup" style="width: 50px; height:25px;
                                border-radius: 2px 2px 2px 2px;">
                            <div class="form-group">
                                   <label for="emailSubject" class="col-sm-2 control-label"></label>
                                   <input type="email" class="form-control" id="emailSubject" placeholder="Re:">
                            </div>
                            <div class="form-group">
                                   <label for="emailBody" class="col-sm-2 control-label"></label>
                                   <textarea id="emailBody" class="form-control" placeholder="Message..."></textarea>
                            </div>
                           </form>
                        
                     <a class="close" href="#">&times;</a>
                  </div>
                </div>
                </div>
            
            <button name= "drips" type="button" class="btn btn-primary btn-lg btn-block">+ ADD DRIP</button>

              <div class= "card" style="margin-top: 30px; margin-bottom: 30px;" >
                <div class="card-body">
                  <b><h3>Drips</h3></b>
                  <h6>Unlike follow-ups, drips keep sending even after a recipient becomes a lead</h6><br>
                  <div class="drips">
                     <form action="#" method="POST" id="ticketTable" >
                     <input type="hidden" name="status" id="status" value="0" />
                      <h7>Wait X Days : </h7>
                      <input type="number" name="followup" style="width: 50px; height:25px;
                       border-radius: 2px 2px 2px 2px;"><br>
                         <h6> 
                         <br>
                         ^-Drips don't wait on follow-ups. This counts days from your initial message.
                       
                       </h6>
                            <div class="form-group">
                                <label for="emailSubject" class="col-sm-2 control-label"></label>
                                <input type="email" class="form-control" id="emailSubject" placeholder="Subject:">
                            </div>
                            <div class="form-group">
                                <label for="emailBody" class="col-sm-2 control-label"></label>
                                <textarea id="emailBody" class="form-control" placeholder="Message..."></textarea>
                            </div>
                     </form>
                  </div>
              <a class="close" href="#">&times;</a>
             </div>
             </div>
            <button name= "addon" id="addon" type="button" class="btn btn-secondary btn-lg btn-block">+ ADD ON CLICK</button>

              <div class= "card" style="margin-top: 30px; margin-bottom: 30px;" >
                <div class="card-body">
                  <b><h3>On Link Clicks</h3></b>
                  <h6>These emails are sent when a recipient clicks a link in one of your sent messages.</h6><br>
                  <div class="addon">
                     <form action="#" method="POST" id="ticketTable" >
                     <input type="hidden" name="status" id="status" value="0" />
                      <h7>Wait X Days : </h7>
                      <input type="number" name="followup" style="width: 50px; height:25px;
                       border-radius: 2px 2px 2px 2px;"><br>
                            <h6><br></h6>
                       <input type="url" name="click" class="form-control" placeholder="Clicked url must exactly match..." style="width: 500px">
                            <div class="form-group">
                                <label for="emailSubject" class="col-sm-2 control-label"></label>
                                <input type="email" class="form-control" id="emailSubject" placeholder="Subject:">
                            </div>
                            <div class="form-group">
                                <label for="emailBody" class="col-sm-2 control-label"></label>
                                <textarea id="emailBody" class="form-control" placeholder="Message..."></textarea>
                            </div>
                     </form>
                  </div>
              <a class="close" href="#">&times;</a>
             </div>
             </div>
          
          <div class="form-group" style="width: 150px; margin-top: 30px; margin-left: 340px;">
               <input type="submit" name="submit" id="submit" class="btn btn-primary btn-user btn-block" value="Next >">
          </div>
      <script type="text/javascript">
$(document).ready(function (){
  $('.btn-default').click(function (){
        $('.follow_up').append($('.follow_up').html())
    
        //console.log($('.example-1').html());
    })
  
  })
$(document).ready(function (){
  $('.btn-primary').click(function (){
        $('.drips').append($('.drips').html())
    
        //console.log($('.example-1').html());
    })
  
  })
$(document).ready(function (){
  $('.btn-secondary').click(function (){
        $('.addon').append($('.addon').html())
    
        //console.log($('.example-1').html());
    })
  
  })
</script>

</div>
  </div>
      </div>


<!-- Initialize the editor. -->
<script>
  $(function() {
    $('textarea').froalaEditor()
  });
</script>

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
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
</html>

