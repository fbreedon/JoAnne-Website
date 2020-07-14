<!DOCTYPE html>
<html>

  <head>
  	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <base href="http://localhost/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  	<meta name="description" content="JoAnne Fillatti is a photographer from Davis, California who specializes in birds and other natural themes.">
    <meta name="keywords" content="JoAnne Fillatti, photography, nature, Davis">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<!--link rel="manifest" href="/site.webmanifest">
  	<meta property="og:image:url" content="/images/Sparkling Violetear-1.jpg">
  	<meta property="og:image:width" content="2039">
  	<meta property="og:image:height" content="2039">
  	<meta property="og:type" content="website">
  	<meta property="og:url" content="">
  	<meta property="og:title" content="Home | Joanne Fillatti">
  	<meta property="og:description" content="JoAnne Fillatti is a photographer from Davis, California who specializes in birds and other natural themes."-->
  	<title>Home | Joanne Fillatti</title>
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

    <!-- Call the mobile navigation icon script -->
    <script src="scripts/navigation icon script.js"></script>

    <!-- Call the slideshow script -->
    <script src="scripts/slideshow script.js"></script>

    <!-- Footer for copyright and social media info -->
    <footer class="footer">&copy JoAnne Fillatti</footer>

    </div>

  </body>

</html>