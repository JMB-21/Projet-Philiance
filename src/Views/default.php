<!doctype html>
<html lang="en">
    
  <head>
   <!--====== Meta ======-->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="DW16" content="Page web formation Philiance médico-social">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
   <meta http-equiv="Pragma" content="no-cache" />
   <meta http-equiv="Expires" content="0" />

   <!--====== Website Title ======-->
   <title>Philiance Formation | Médico-Social</title>

   <!--====== Favicon Icon ======-->
   <link rel="shortcut icon" href="<?=BASEURL?>assets/img/favicon.png" type="image">

   <!--====== Link ======-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="<?=BASEURL?>assets/css/boxicons.min.css">
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="<?=BASEURL?>assets/css/style.css">
   <link rel="stylesheet" href="<?=BASEURL?>assets/css/style-register.css">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>
   
<body>
    <!-- <header>-->
   
     <?php
      // echo "BASEURL : ".BASEURL;
       require ROOT . '/src/Views/header-souv.php';   
     ?>

    <!-- <hr> -->
    <!-- <div class="container">  -->
    <p>&nbsp;</p>       
        <?= $content; ?>

    <!-- </div> -->
    <!-- <hr>  -->

    
    <!-- <footer>-->

    <?php
      require ROOT . '/src/Views/footer.html';
    ?>
 
</body>
</html>