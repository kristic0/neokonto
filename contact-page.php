<?php
/*
Template Name: Kontakt page
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Neo Konto</title>
    <link rel="stylesheet" href="
    <?php echo get_stylesheet_directory_uri()."/style.css"?>
    " />
    <?php wp_head()?>
    <?php wp_enqueue_script("jquery"); ?>
  </head>
  <body>
    <div style="background-image: none; height: unset;" class="landing-container pad">
    <?php include 'nav.php';?>
    <?php include 'nav-mobile.php'; ?>
    </div>

    <div class="contact pad">
        <h1>Kontaktirajte nas</h1>
      <div class="contact-inner">
        <?php the_content() ?>
      </div>
    </div>

    <div class="kontakt-footer">
    <?php include 'footer.php';?>
    </div>
  </body>
</html>