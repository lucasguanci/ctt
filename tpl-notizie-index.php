<?php
/**
 * Index file
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CAP Autolinee - Prato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CTT stylesheets -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-ctt.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css" />    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- header -->
    <?php include 'header-secondary.php'; ?>
    <!-- main -->  
    <section id="main">
      <div class="container">
        <div class="row">
          <!-- sidebar -->
          <?php include('sidebar-notizie-index.php'); ?>
          <div class="clearfix visible-sm visible-xs"></div>
          <!-- content -->
          <?php include('content-notizie-index.php'); ?>
          <div class="clearfix visible-sm visible-xs"></div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <?php include('footer.php'); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- CTT -->
    <script type="text/javascript" src="js/scripts.js"></script>
  </body>
</html>
