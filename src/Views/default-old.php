<!DOCTYPE html>
<html lang="fr">
  <head>
    <!--====== Meta ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="DW16" content="Page web formation Philiance médico-social">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= isset($description) ? $description : ''; ?>">
    
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />


    <!--====== Website Title ======-->
    <title>Philiance Formation | Médico-Social</title>
    <title><?= isset($titre) ? $titre : 'Projet'; ?></title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="http://localhost/projet-philiance/assets/img/favicon.png" type="image">

    <!--====== Link Sarah======-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/boxicons.min.css">

    <!-- <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/bootstrap.min.css"> -->
  
    <!-- <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/style.css">  -->
    
    <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/style-sd.css">
    <!-- <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/style-sd.css"> -->
      <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- Link Dev -->
      <!-- <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/style-2.css"> -->

      <!-- Link Register -->
      <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/style-register.css">

      <!-- Link JM -->
      <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/style-jm.css">

    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

    <!-- Style Nirina  -->  
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>         -->
        
    <!-- Style Nirina 2-->
    <!-- <link rel="icon" href="img/favicon.ico"> -->
    <!-- <link rel="stylesheet" href="css/boxicons.min.css"> -->
    <!-- <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/style-n2.css"> -->
    <!-- <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/style-n3.css"> -->
    <!-- <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/bootstrap/style-n-old.css"> -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>         -->
    <link rel="stylesheet" href="http://localhost/projet-philiance/assets/css/pnt.css">  
   
  </head>

  <body>
      <!-- <header>-->

      <?php
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