<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Easy Elo Boost</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/strapped.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>

<?php include ('inc/nav.php'); ?>

    <div id="top" class="jumbotron">
      <div class="container">
        <h1>Easy Elo Boost</h1>
        <h2>Le site de référence de l'elo boosting français.</h2>
        <p><a class="btn btn-warning btn-lg">Passer commande <span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
      </div> <!-- /.container -->
    </div> <!-- /.jumbotron -->

    <div class="container">
      <?php include('div/about.php'); ?>
      <div class="sect-border"></div>
      <?php include('div/whyus.php'); ?>
      <div class="sect-border"></div>
      <?php include('div/tour.php'); ?>
      <div class="sect-border"></div>
      <?php include('div/contact.php'); ?>

    </div> <!-- /.container -->

    <footer>
      <div class="container clearfix">
        <p class="pull-left">
          Copyright &copy; Easy Elo Boost 2015
        </p>
        <p class="pull-right">
          
        </p>
      </div> <!-- /.container -->
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(".nav-link").click(function(e) {
        e.preventDefault();
        var link = $(this);
        var href = link.attr("href");
        $("html,body").animate({scrollTop: $(href).offset().top - 80}, 500);
        link.closest(".navbar").find(".navbar-toggle:not(.collapsed)").click();
      });
    </script>
  </body>
</html>
