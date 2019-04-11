<?php



session_start();



if(empty($_SESSION['id_super'])) {

  header("Location: index.php");

  exit();

}



require_once("../db.php");

?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Reach out</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- DataTables -->

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="../css/AdminLTE.min.css">

  <link rel="stylesheet" href="../css/_all-skins.min.css">

  <!-- Custom -->

  <link rel="stylesheet" href="../css/custom.css">

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

      <span class="logo-lg"><b>Reach out</b></span>

    </a>



    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

      <!-- Navbar Right Menu -->

      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
          <li>

            <a href="logout.php">Logout</a>

          </li>
        </ul>

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

                <h3 class="box-title">Welcome <b>Admin</b></h3>

              </div>

              <div class="box-body no-padding">

                <ul class="nav nav-pills nav-stacked">

                  <li><a href="dashboard.php"><i class="fa fa-dashboard text-green"></i> Dashboard</a></li>

                  <li><a href="users.php"><i class="fa fa-address-card-o text-green"></i>Chvs </a></li>

                  <li><a href="disease.php"><i class="fa fa-calculator text-green"></i> Disease indicators</a></li>

                  <li class="active"><a href="defaulter.php"><i class="fa fa-building text-green"></i> Defaulter Tracking</a></li>

                    <li><a href="reports.php"><i class="fa fa-file-image-o text-green"></i> Chv Reports </a></li>

                  <li><a href="logout.php"><i class="fa fa-arrow-circle-o-right text-red"></i> Logout</a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-md-9 bg-white padding-2">



            <h3 style='color:#aeaeaea;font-family:verdana;font-size:14px;'>Defaulter tracking</h3>

            <hr>

            <div class="row margin-top-20">

              <div class="col-md-12">

                <div class="box-body table-responsive no-padding">

                  <table id="info-table" class="table table-hover">
                    <style>
                      th:nth-child(odd){
                        background:none;
                        height:20px;
                        }
                      tr:nth-child(even){
                        background:#eaeaea;
                        height:20px;
                        border-right:1px solid #eaeaae;}

                      }
                      }
                      </style>

                    <thead>

                      <th >Location</th>

                      <th>Comments</th>

                      <th>Name</th>
                      <th>Reason</th>
                      <th>Treatment</th>

                    </thead>

                    <tbody id="userAgent">

                    </tbody>                    

                  </table>

                </div>

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

      <strong>Copyright &copy; 2019<a href="#">Reach out</a>.</strong> All rights

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

<!-- DataTables -->

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<!-- AdminLTE App -->

<script src="../js/adminlte.min.js"></script>

<!--firebase js library-->
<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
<script>
    // Initialize Firebase
    const config = {
    apiKey: "AIzaSyAn37tQP-9ACq5NeV7D5pegDOSItKNlpBA",
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

    db.collection('Referals')
        .get()
        .then(function (querySnapshot) {
            querySnapshot.forEach(function (doc) {
                // doc.data() is never undefined for query doc snapshots
                const userData = doc.data();
                userDom.push(renderUsers(userData));
            });
            let userDOM = document.createElement('tr');
            document.getElementById('userAgent').innerHTML =  userDom.join("");
            console.log(userDom);
        })
        .catch(function (error) {
            console.log("Error getting documents: ", error);
        });

    const renderUsers = (users) => {
      console.warn("This are the users", users)
        return (
            `<tr>
                <td class="coperative">${users.age}</td>
                <td class="buying-status">${users.comments}</td>
                <td class="user-email">${users.name}</td>
                <td class="user-phone">${users.reason}</td>
                <td class="user-phone">${users.treatment}</td>
            </tr>`
        );
    }
</script>

</body>

</html>

