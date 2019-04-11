<?php



session_start();



if(empty($_SESSION['id_super'])) {

  header("Location: index.php");

  exit();

}

?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>reach out</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="../css/AdminLTE.min.css">

  <link rel="stylesheet" href="../css/_all-skins.min.css">

  <!-- Custom -->

  <link rel="stylesheet" href="css/custom.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->



  <!-- Google Font -->

  <link rel="stylesheet"

        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">



  <header class="main-header">


 
    <!-- Logo -->

    <a href="index.php" class="logo logo-bg">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>J</b>P</span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>Reach out</b>


    </a>
    



    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">
    <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger
 count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" 
 style="font-size:14px;color:#f3f3f3;margin-right:100px;"></span></a>
      <ul class="dropdown-menu"></ul>
      <!-- Navbar Right Menu -->
      

      <script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"disease.php",
  method:"POST",
  data:{useragent:number_of_agents},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});
</script>
      <div class="navbar-custom-menu">


      </div>

    </nav>

  </header>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" style="margin-left: 0px;">



    <section id="candidates" class="content-header">

      <div class="container">

        <div class="row">

          <div class="col-md-3">

            <div class="box box-solid">

              <div class="box-header with-border">

                <h3 class="box-title" style='font-family:palatino;color:#cacaca;'>Admin panel</b></h3>

              </div>

              <div class="box-body no-padding">

                <ul class="nav nav-pills nav-stacked">

                  <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard text-green"></i> Dashboard</a></li>

                  <li><a href="users.php"><i class="fa fa-address-card-o text-green"></i> Chvs</a></li>

                  <li><a href="disease.php"><i class="fa fa-calculator text-green"></i>Disease indicators</a></li>

                  <li><a href="defaulter.php"><i class="fa fa-building text-green"></i> Defaulter tracking</a></li>

                    <li><a href="reports.php"><i class="fa fa-file-image-o text-green"></i> chv reports </a></li>

                  <li><a href="logout.php"><i class="fa fa-arrow-circle-o-right text-red"></i> Logout</a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-md-9 bg-white padding-2">



            <h4 style="color:#hfhfhf;font-family:helvetica;border-bottom:1px solid #cecece;">Reach out Statistics</h4>

            <div class="row">

              <div class="col-md-6">

                <div class="info-box bg-c-yellow" style='background: linear-gradient(#f3f3f3, #cccc);
    border-radius: 20px;z-index:15px;border-bottom:2px solid black;''>

                  <span class="info-box-icon bg-red"><i class="ion ion-briefcase"></i></span>

                  <div class="info-box-content">

                    <span class="info-box-text">Registered chvs</span>

                    <span id="num-of-agrovets" class="info-box-number"></span>

                  </div>

                </div>                

              </div>

              

              <div class="col-md-6">

                <div class="info-box bg-c-yellow" style='background: linear-gradient(#f3f3f3, #cccc);
    border-radius: 20px;z-index:15px;border-bottom:2px solid black;'>


                  <span class="info-box-icon bg-green" ><i class="ion ion-ios-calculator"></i></span>

                  <div class="info-box-content">

                    <span class="info-box-text">Common Disease Indicators</span>

                    <span id="num-of-products" class="info-box-number"></span>

                  </div>

                </div>

              </div>

          

              <div class="col-md-6">

                <div class="info-box bg-c-yellow" style='background: linear-gradient(#f3f3f3, #cccc);
    border-radius: 20px;z-index:15px;border-bottom:2px solid black;''>


                  <span class="info-box-icon bg-green"><i class="ion ion-person-stalker"></i></span>

                  <div class="info-box-content">

                    <span class="info-box-text" >Current state</span>
                    <span id="num-of-farmers" class="info-box-number"></span>

                  </div>
                  
                </div>
                <div style='width:100%;height:250px;background:#ffff;border-radius:20px;border:0.05px solid green;'>
                
			
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65294.250258243854!
        2d34.81149376387818!3d3.7308666480148482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
        1s0x179fb7d6a246c0ab%3A0x57774a3381fe577!2sKakuma!5e0!3m2!1sen!2ske!4v1554444582475!5m2!1sen!2ske" 
        width="100%" height="100%" frameborder="0" style="border:0";position="absolute" overflow="hidden" 
        zoom="16" allowfullscreen></iframe>
		
		                                                                                                                                                                                                                                                      
              </div>
              </div>

            <div class="col-md-6">

                <div class="info-box bg-c-yellow" style='background: linear-gradient(#f3f3f3, #cccc);
    border-radius: 20px;z-index:15px;border-bottom:2px solid black;''>


                    <span class="info-box-icon bg-green"><i class="ion ion-person-stalker"></i></span>

                    <div class="info-box-content">

                        <span class="info-box-text"> Reminders </span>
                        <span id="num-of-agents" class="info-box-number"></span>

                    </div>
                    

                </div>
                <div style='width:100%;height:250px;background:#ffff;border-radius:20px;border:0.05px solid green;'>
              <img src="giphy1.gif" alt="analytics" style="width:100%";height:100%;"></img></div>
            </div>

        

            </div>



          </div>

        </div>

      </div>

    </section>


    
    



  </div>
  

  <!-- /.content-wrapper -->



  <footer class="main-footer" style="margin-left: 0px;">

    <div class="text-center">

      <strong>Copyright &copy;2019 <a href="#">Reach Out</a>.</strong> All rights

    reserved.

    </div>

  </footer>



  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed

       immediately after the control sidebar -->

  <div class="control-sidebar-bg"></div>



</div>

<!-- ./wrapper -->



<!-- jQuery 3 -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->

<script src="../js/adminlte.min.js"></script>

<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>

<script>
    // Initialize Firebase
    const config = {
    apiKey:"AIzaSyAn37tQP-9ACq5NeV7D5pegDOSItKNlpBA",,
    authDomain: "testfb-72f0f.firebaseapp.com",
    databaseURL: "https://testfb-72f0f.firebaseio.com",
    projectId: "testfb-72f0f",
    storageBucket: "testfb-72f0f.appspot.com",
    messagingSenderId: "876437258495"
    };
    firebase.initializeApp(config);
    const database = firebase.database();
    const email = 'mukunzialex47@gmail.com';
    const password = 'password';

    const db = firebase.firestore();

    const userDom = [];
    const agrovets = [];
    const products = [];
    const farmers = [];

    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
        // Handle Errors here.
        console.log('User might have been created');
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log({error: errorMessage, errorCode});
    });

    firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log({error: errorMessage, errorCode});
    });

    // Set number of Agents
    db.collection("referals")
        .get()
        .then(function (querySnapshot) {
            querySnapshot.forEach(function (doc) {
                // doc.data() is never undefined for query doc snapshots
                const userData = doc.data();
                userDom.push(userData);
                document.getElementById('num-of-agents').innerHTML = userDom.length;
            });
        })
        .catch(function (error) {
            console.log("Error getting documents: ", error);
        });

    // Set number of Registered Agrovets
    db.collection("USERS")
        .get()
        .then(function (querySnapshot) {
            querySnapshot.forEach(function (doc) {
                // doc.data() is never undefined for query doc snapshots
                const userData = doc.data();
                agrovets.push(userData);
                document.getElementById('num-of-agrovets').innerHTML = agrovets.length;
            });
        })
        .catch(function (error) {
            console.log("Error getting documents: ", error);
        });

    // Set number of products
    db.collection("Chvs")
        .get()
        .then(function (querySnapshot) {
            querySnapshot.forEach(function (doc) {
                // doc.data() is never undefined for query doc snapshots
                const userData = doc.data();
                products.push(userData);
                document.getElementById('num-of-products').innerHTML = products.length;
            });
        })
        .catch(function (error) {
            console.log("Error getting documents: ", error);
        });

    // set the number of farmers
    db.collection("generalcases")
        .get()
        .then(function (querySnapshot) {
            querySnapshot.forEach(function (doc) {
                // doc.data() is never undefined for query doc snapshots
                const userData = doc.data();
                farmers.push(userData);
                document.getElementById('num-of-farmers').innerHTML = farmers.length;
            });
        })
        .catch(function (error) {
            console.log("Error getting documents: ", error);
        });

</script>

</body>

</html>

