<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fazri Suhada</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }

        h1{
          font-family: sans-serif;
        }

        table {
          font-family: Arial, Helvetica, sans-serif;
          color: #666;
          text-shadow: 1px 1px 0px #fff;
          background: #eaebec;
          border: #ccc 1px solid;
        }

        table th {
          padding: 9px 82px;
          border-left:1px solid #e0e0e0;
          border-bottom: 1px solid #e0e0e0;
          background: #4C71DE;
          text-shadow: 0px 0px 0px ;
          color: white;
        }

        table th:first-child{  
          border-left:none;  
        }

        table tr {
          text-align: center;
          padding-left: 20px;
        }

        table td:first-child {
          text-align: left;
          padding-left: 20px;
          border-left: 0;
        }

        table td {
          padding: 3px 35px;
          border-top: 1px solid #ffffff;
          border-bottom: 1px solid #e0e0e0;
          border-left: 1px solid #e0e0e0;
          background: #fafafa;
          background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
          background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
        }

        table tr:last-child td {
          border-bottom: 0;
        }

        table tr:last-child td:first-child {
          -moz-border-radius-bottomleft: 3px;
          -webkit-border-bottom-left-radius: 3px;
          border-bottom-left-radius: 3px;
        }

        table tr:last-child td:last-child {
          -moz-border-radius-bottomright: 3px;
          -webkit-border-bottom-right-radius: 3px;
          border-bottom-right-radius: 3px;
        }

        table tr:hover td {
          background: #f2f2f2;
          background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
          background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
        }

        .container {
            border-radius: 5px;
            background-color: #BEE0F1;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

    </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
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

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ARKADEMY</span>
                <img class="img-profile rounded-circle" src="me.png">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
          </div>
            <div class="block">
              <div class="container"><br>
               <a href="input_query.php">Tambah Data</a>
              <div class="container">
            <table cellspacing='0'>
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Work</th>
                    <th>Salary</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <?php
          // Load file koneksi.php
         include "koneksi.php";
					          
					          $query = "SELECT * FROM query"; // Query untuk menampilkan semua data siswa
					          $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
					          $no=1;
					          while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
					            echo "<tr>";
					            echo "<td>$no";
					            echo "<td>".$data['name']."</td>";
					            echo "<td>".$data['work']."</td>";
					            echo "<td>".$data['salary']."</td>";
  								echo "<td><a href='hapus_query.php?id=".$data['id']."'>Hapus</a> 
                  					  <a href='edit_query.php?id=".$data['id']."'>Ubah</a></td>";
					            echo "</tr>";
					            $no++;
					          }
					          ?>
          </table>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

          </div>

          <!-- Content Row -->
          <div class="row">
          </div>

              <!-- Color System -->
          <div class="row">
          </div>

             
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
