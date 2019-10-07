<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Guillaume Maurin</title>

    <!--BOOTSTRAP-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- ROBOTO FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

      <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./styles/home.css" />
    <link rel="stylesheet" href="./styles/timeline.css" />
    <link rel="stylesheet" href="./styles/projects.css" />
    <link rel="stylesheet" href="./styles/animate.css" type="text/css">
  </head>
  <body>
    <!-- TOP HOME -->
    <?php include("./components/topHome.html")?>

    <!-- NAVBAR -->
    <?php include("./components/navbar.html")?>

    <!-- TIMELINE -->
    <?php include("./components/timeline.html")?>

    <!-- PROJECTS -->
    <?php include("./components/projects.html")?>

    <!-- CONTACT -->
    <?php include("./components/contact.html")?>

    <!-- FOOTER -->
    <?php include("./components/footer.html")?>

    <!-- BOOTSTRAP -->   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <!-- WOW JS -->
    <script src="./javascript/wow.min.js"></script>
    <script>new WOW().init();</script>

    <!-- SCROLLSPY -->
  <script src="./javascript/scrollspy.js"></script>
  </body>
</html>
