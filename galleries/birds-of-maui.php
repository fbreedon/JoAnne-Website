<!DOCTYPE html>
<html>

  <head>
  	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <base href="http://joannefillatti.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="JoAnne Fillatti's photography of birds in Maui.">
    <meta name="keywords" content="JoAnne Fillatti, photography, birds, Maui">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta property="og:image:url" content="./images/Sparkling Violetear-1.jpg">
    <meta property="og:image:width" content="2039">
    <meta property="og:image:height" content="2039">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://joannefillatti.com/">
    <meta property="og:title" content="Birds of Maui | Joanne Fillatti">
    <meta property="og:description" content="JoAnne Fillatti's photography of birds in Maui.">
  	<title>Birds of Maui | Joanne Fillatti</title>
  </head>

  <body>

    <!-- Website wrapper -->
    <div class="canvas">
    <!-- Homepage header -->
    <header class="header">
      <!-- Header navigation container -->
      <nav class="navigation" id="navigation-id">
        <!-- Header title -->
        <div><a href="./" class="title">JoAnne Fillatti Photography</a></div>
        <!-- Responsive icon for mobile -->
        <a href="javascript:void(0);" class="nav-icon" onclick="clickIcon()">&#9776</a>
        <!-- Navigation links -->
        <a href="./galleries/" class="active">Galleries</a>
        <a href="./about/">About</a>
        <a href="./contact/">Contact</a>
      </nav>
    </header>

    <!-- Content container for centering -->
    <div class="content">
      <!-- Gallery title -->
      <h3>Birds of Maui</h3>
      <!-- Image gallery container grid -->
      <div class="gallery">
        <!-- Gallery images -->
        <!-- Php to read the image files and display them in the gallery -->
        <?php
        $i = 1;
        // Find all the image file paths in the directory and store them in an array,
        // then display each one properly in the gallery
        foreach (glob("../images/birds/maui/*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE) as $img_file) {
        ?>
          <img class="gallery-img" src="<?php echo $img_file; ?>" alt="bird of maui image <?php echo $i; ?>" onclick="openModal();currentModal(<?php echo $i; ?>)" />
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
        <a class="prev-img" onclick="plusModal(-1)"><div>&#65124;</div></a>
        <a class="next-img" onclick="plusModal(1)"><div>&#65125;</div></a>
        <!-- Image gallery in the modal -->
        <div class="modal-content">
          <!-- Modal gallery images -->
          <!-- Php to read the image files and display them in the modal gallery -->
          <?php
          // Find all the image file paths in the directory and store them in an array,
          // then display each one properly in the modal gallery
          foreach (glob("../images/birds/maui/*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE) as $img_file) {
          ?>
          <div class="modal-container" onclick="clickImage(event)">
            <img class="modal-img" src="<?php echo $img_file; ?>" alt="bird of maui modal image" />
            <?php
            $file_name = pathinfo($img_file);
            $info_file = "../images/birds/maui/captions/" . $file_name['filename'] . ".txt";
            $file_handle = fopen($info_file, "r");
            ?>
            <div class="caption">
              <?php
              // Read the file line by line and put them all in one div
              while (!feof($file_handle)) {
                echo $text = fgets($file_handle); ?> <br> <?php
              } ?>
            </div>
            <?php
            // Close the opened file
            fclose($file_handle);
            ?>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>

    <!-- Call the mobile navigation icon script -->
    <script src="scripts/navigation icon script.js"></script>

    <!-- Call the modal gallery script -->
    <script src="./scripts/modal script.js"></script>

    <!-- Footer for copyright and social media info -->
    <footer class="footer">&copy JoAnne Fillatti</footer>

    </div>
    
  </body>

</html>