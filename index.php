<?php

include('functions.php');
$data = grindXML('data.xml', true);

$site = $settings->site;
$is_responsive = (bool)(string)$site->isResponsive;
$has_fontawesome = (bool)(string)$site->fontawesome;

if(isset($_GET['page']) && file_exists('templates/pages/'.$_GET['page'].'.php')) { $page = $_GET['page'];  }
$include = isset($page) ? 'templates/pages/'.$page.'.php' : 'templates/__index.php';

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?=$site->title?></title>
  <?php if($is_responsive): ?>
  <!--<meta name="viewport" content="initial-scale=1, user-scalable=no, maximum-scale=1">-->
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <?php endif; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="<?=$site->desc?>">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <?php if($has_fontawesome): ?>
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <?php endif; ?>
  <link rel="stylesheet" href="css/theme.css" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
  <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="img/favicons/manifest.json">
  <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <script src="js/jquery.min.js"></script>
  <script src="js/hammer.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-datetimepicker.js"></script>
  <script src="js/bootstrap-slider.min.js"></script>
  <script src="js/main.js"></script>
</head>
<body class="page-<?=isset($page) ? ($page == 'home' ? 'home' : $page . ' not-home') : 'error'?>">

  <?php

  include('templates/_header.php');

  include($include);

  include('templates/_footer.php');

  ?>

</body>
</html>

