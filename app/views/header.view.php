<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPARQL<?=APP_NAME?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=ROOT?>/assets/images/logo.svg" rel="icon">
  <link href="<?=ROOT?>/assets/images/logo.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=DASHBOARD?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=DASHBOARD?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="<?=DASHBOARD?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=DASHBOARD?>/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=DASHBOARD?>/css/style.css" rel="stylesheet">


 <!--  JQuery File -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 
<!--  Yasgui JS File -->
<script src="https://unpkg.com/@triply/yasgui@4/build/yasgui.min.js"></script>

<!-- Add CodeMirror libraries -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/theme/material.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/sparql/sparql.min.js"></script>


<!--  DataTables JS File -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/3.css" media="all">
<script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>



<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.13.3/dataRender/hyperLink.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.13.3/dataRender/anchor.js"></script>



</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?=ROOT?>" class="logo d-flex align-items-center">
        <img src="<?=ROOT?>/assets/images/logo.svg" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    
  </header><!-- End Header -->

  <!-- Start admin sidebar-->
  <?php $this->view('sidebar',$data) ?>

  <main id="main" class="main">




















