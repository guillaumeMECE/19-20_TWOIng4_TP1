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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="./styles/home.css" />
    <link rel="stylesheet" href="./styles/timeline.css" />
    <link rel="stylesheet" href="./styles/projects.css" />
  </head>
  <body>
    <!--TOP HOME-->
    <?php include("./components/topHome.html")?>

    <!--NAVBAR-->
    <?php include("./components/navbar.html")?>

    <!--TIMELINE-->
    <?php include("./components/timeline.html")?>

    <!--PROJECTS-->
    <?php include("./components/projects.html")?>

    <!--CONTACT-->
    <?php include("./components/contact.html")?>

    <!--FOOTER-->
    <?php include("./components/footer.html")?>

    <!--BOOTSTRAP-->
    <!-- <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script> -->
   
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
    <script>
  $(document).ready(function() {
    var body = document.body,
      html = document.documentElement;
    $(window).scroll(function() {
      var h = body.scrollHeight - html.clientHeight;
      console.log("max height:", h);
      var y = $(window).scrollTop();
      console.log("scroll px :", y);
      var scrollPercent = (y * 100) / h;
      console.log("scroll % :", scrollPercent);
      if(scrollPercent < 74){
        document.getElementById("nav-timeline").classList.remove("md-inactive");
        document.getElementById("nav-projects").classList.add("md-inactive");
        document.getElementById("nav-media").classList.add("md-inactive");
      }else if(scrollPercent >=74 && scrollPercent < 95){
        document.getElementById("nav-timeline").classList.add("md-inactive");
        document.getElementById("nav-projects").classList.remove("md-inactive");
        document.getElementById("nav-media").classList.add("md-inactive");
      }else{
        document.getElementById("nav-timeline").classList.add("md-inactive");
        document.getElementById("nav-projects").classList.add("md-inactive");
        document.getElementById("nav-media").classList.remove("md-inactive");
      }
      // $(".scrollLine").css("width", scrollPercent + "%");
    });
  });
</script>
  </body>
</html>
