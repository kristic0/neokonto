<?php
/*
Template Name: Usluge page
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profit Partner</title>
    <link rel="stylesheet" href="
    <?php echo get_stylesheet_directory_uri()."/style.css"?>
    " />
    <script>
      window.addEventListener("load", function () {
        document.getElementsByTagName("html")[0].style.visibility = "visible";
      });
    </script>
  </head>
  <body>
    <?php include 'nav-mobile.php';?>
    <div class="outer-container">
      <div class="main-container">
        <?php include 'nav-desktop.php';?>
        
        <section class="services spad">
            <h2><?php echo get_theme_mod( 'naslov_usluga_stranice_1' ); ?></h2>

            <div class="service-item">
                <img src="<?php echo get_theme_mod( 'usluga_pic_1' ); ?>" alt="" />
                <div>
                <h3><?php echo get_theme_mod( 'usluga_naslov_1' ); ?></h3>
                <p><?php echo get_theme_mod( 'usluga_txt_1' ); ?></p>
                </div>
            </div>

            <div class="service-item service-item-reversed">
                <img src="<?php echo get_theme_mod( 'usluga_pic_2' ); ?>" alt="" />
                <div>
                <h3><?php echo get_theme_mod( 'usluga_naslov_2' ); ?></h3>
                <p><?php echo get_theme_mod( 'usluga_txt_2' ); ?></p>
                </div>
            </div>

            <div class="service-item">
                <img src="<?php echo get_theme_mod( 'usluga_pic_3' ); ?>" alt="" />
                <div>
                <h3><?php echo get_theme_mod( 'usluga_naslov_3' ); ?></h3>
                <p><?php echo get_theme_mod( 'usluga_txt_3' ); ?></p>
                </div>
            </div>

            <div class="service-item service-item-reversed">
                <img src="<?php echo get_theme_mod( 'usluga_pic_4' ); ?>" alt="" />
                <div>
                <h3><?php echo get_theme_mod( 'usluga_naslov_4' ); ?></h3>
                <p><?php echo get_theme_mod( 'usluga_txt_4' ); ?></p>
                </div>
            </div>
        </section>

        <?php include 'footer.php';?>
      </div>
    </div>
  </body>
</html>

