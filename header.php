<?php
require_once "common.php";

$extra="";
$a=frm("a");
$ori=$a;
//validation


$kl=array(
  "Kuala Lumpur",
  "Wangsa Maju",
  "Cheras",
  "Titiwangsa",
  "Mont Kiara",
  "Sri Hartamas",
  "Seputeh",
  "Lembah Pantai",
  "Setiawangsa",
  "Segambut",
  "Ampang",
  "Pudu",
  "Batu",
  "Brickfields",
  "Taman OUG",
  "Sri Petaling",
  "Jalan Klang Lama",
  "Taman Desa",
);

$selangor=array(
  "Klang",
  "Bandar Bukit Tinggi",
  "Kota Kemuning",
  "Subang Jaya",
  "Shah Alam",
  "Glenmarie",
  "Petaling Jaya",
  "PJ Seksyen 1-22|SS1-26",
  "Damansara",
  "Batu Caves",
  "Seri Kembangan",
  "Kajang",
  "Kepong",
  "Setia Alam",
  "Meru",
  "Bandar Utama",
  "Puchong",
  "Bandar Tasik Puteri",
  "Kelana Jaya",
  "Sunway Mas",
  "Aman Suria",
  "Ara Damansara",
  "Bandar Sunway",
  "Tropicana",
);
if ($a) {
  $a=str_replace("-"," ",$a);
  $a=ucwords($a);
  if (in_array($a,$kl)) {
    $extra=$a;
  }
  if (in_array($a,$selangor)) {
    $extra=$a;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?="$keyword"?></title>
<meta name="description" content="<?=$site_description;?>">
<meta name="keywords" content="<?=$site_keyword;?>">
<meta name="author" content="Shiuan">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
    <section class="">
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="<?if($this_page!=$site_url) echo $site_url;
          else echo "#page-top";?>"><img src="img/landscaping-logo.png" alt="logo"style="width:120px;height:100px;border:0"></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?if($this_page!=$site_url) echo $site_url.($extra ? "location-".$ori:"") ?>#about" class="page-scroll">About</a></li>
        <li><a href="<?if($this_page!=$site_url) echo $site_url.($extra ? "location-".$ori:"") ?>#services" class="page-scroll">Services</a></li>
        <li><a href="<?if($this_page!=$site_url) echo $site_url.($extra ? "location-".$ori:"") ?>#portfolio" class="page-scroll">Works</a></li>
        <li><a href="<?if($this_page!=$site_url) echo $site_url.($extra ? "location-".$ori:"") ?>#contact" class="page-scroll">Contact</a></li>
        <li><a href="location.php" class="page-scroll">Location</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
</section>

