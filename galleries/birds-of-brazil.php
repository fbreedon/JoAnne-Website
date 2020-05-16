<!DOCTYPE html>
<html>

  <head>
  	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <base href="http://localhost/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  	<meta name="description" content="">
    <meta name="keywords" content="">
		<!--link rel="icon" type="image/png" sizes="32x32" href="">
		<link rel="manifest" href="./site.webmanifest">
  	<meta property="og:image:url" content="">
  	<meta property="og:image:width" content="">
  	<meta property="og:image:height" content="">
  	<meta property="og:type" content="website">
  	<meta property="og:url" content="">
  	<meta property="og:title" content="">
  	<meta property="og:description" content=""-->
  	<title>Birds of Brazil | Joanne Fillatti</title>
  </head>

  <body>

    <!-- Website wrapper -->
    <div class="canvas">
    <!-- Homepage header -->
    <header class="header">
      <!-- Header title -->
      <a href="./" class="title">JoAnne Fillatti Photography</a>
      <!-- Header navigation container -->
      <nav class="navigation" id="navigation-id">
        <!-- Navigation links -->
        <a href="./galleries/" class="active">Galleries</a>
        <a href="./about/">About</a>
        <a href="./contact/">Contact</a>
      </nav>
    </header>

    <!-- Content container for centering -->
    <div class="content">
      <!-- Gallery title -->
      <h3>Birds of Brazil</h3>
      <!-- Image gallery container grid -->
      <div class="gallery">
        <!-- Gallery images -->
        <!-- Php to read the image files and display them in the gallery -->
        <?php
        $i = 1;
        // Find all the image file paths in the directory and store them in an array,
        // then display each one properly in the gallery
        foreach (glob("../images/birds/brazil/*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE) as $img_file) {
        ?>
          <img class="gallery-img" src="<?php echo $img_file; ?>" onclick="openModal();currentModal(<?php echo $i; ?>)" />
        <?php
          $i++;
        }
        ?>
      </div>
      <!-- Modal container -->
      <div id="modal-id" class="modal">
        <!-- X button to close the modal -->
        <span class="close" onclick="closeModal()">&times;</span>
        <!-- Modal navigation by clicking to the right or left of images -->
        <a class="prev-img" onclick="plusModal(-1)">&#10094;</a>
        <a class="next-img" onclick="plusModal(1)">&#10095;</a>
        <!-- Image gallery in the modal -->
        <div class="modal-content">
          <!-- Modal gallery images -->
          <!-- Php to read the image files and display them in the modal gallery -->
          <?php
          // Find all the image file paths in the directory and store them in an array,
          // then display each one properly in the modal gallery
          foreach (glob("../images/birds/brazil/*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE) as $img_file) {
          ?>
            <img class="modal-img" src="<?php echo $img_file; ?>" />
          <?php
          }
          ?>
        </div>
      </div>
    </div>

    <!-- Call the mobile navigation icon script -->

    <!-- Call the modal gallery script -->
    <script src="./scripts/modal script.js"></script>

    <!-- Footer for copyright and social media info -->
    <footer class="footer">
      <p>&copy JoAnne Fillatti</p>
    </footer>

    </div>
    
  </body>

</html>