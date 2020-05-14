<!DOCTYPE html>
<html>

  <head>
  	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <base href="http://localhost/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  	<meta name="description" content="">
    <meta name="keywords" content="">
		<link rel="icon" type="image/png" sizes="32x32" href="">
		<link rel="manifest" href="./site.webmanifest">
  	<meta property="og:image:url" content="">
  	<meta property="og:image:width" content="">
  	<meta property="og:image:height" content="">
  	<meta property="og:type" content="website">
  	<meta property="og:url" content="">
  	<meta property="og:title" content="">
  	<meta property="og:description" content="">
  	<title>Home | Joanne Fillatti</title>
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
        <a href="./galleries/">Galleries</a>
        <a href="./about/">About</a>
        <a href="./contact/">Contact</a>
      </nav>
    </header>

    <!-- Content container for centering -->
    <div class="content">
      <!-- Slideshow container -->
      <div class="slideshow">
        <!-- Slideshow images -->
        <!-- Php to read the image files and display them in the slideshow -->
        <?php
        // Find all the image file paths in the directory and store them in an array,
        // then display each one properly in the slideshow
        foreach (glob("images/slideshow/*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE) as $img_file) {
        ?>
          <img class="slide-img" src="<?php echo $img_file; ?>" />
        <?php
        }
        ?>
      </div>
    </div>

    <!-- Call the slideshow script -->
    <script type="./scripts/slideshow script.js"></script>

    <!-- Call the mobile navigation icon script -->

    <!-- Footer for copyright and social media info -->
    <footer class="footer">
      <p>&copy JoAnne Fillatti</p>
    </footer>

    </div>

  </body>

</html>