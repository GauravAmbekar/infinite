<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up - Myntra</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <link href="css/myStyle.css" rel="stylesheet">
    <link href="css/navigation.css" rel="stylesheet">
    <link href="css/register_form.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/popular_searches.css" rel="stylesheet">
    <!-- font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  </head>
  <body>

    <?php include("template/navigation.php"); ?>
    <div class="content">
      <?php include("template/register_form.php"); ?>
      <?php include("template/footer.php"); ?>
      <?php include("template/popular_searches.php"); ?>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/project.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>