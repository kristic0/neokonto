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
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

        <?php include 'footer.php';?>
      </div>
    </div>
  </body>
</html>