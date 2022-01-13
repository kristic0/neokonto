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
        <section class="blob cpadv">
          <div class="block-wrap">
            <p>
              Profit partner doo je knjigovodstvena agencija osnovana sa ciljem
              da omogući da svoju energiju i ideje usmerite na prave stvari. Vi
              radite poslove iz Vaše osnovne delatnosti, a mi sve što se tiče
              dokumentacije. Uspešniji smo ako svako radi ono što najbolje zna.
              Najveći deo razmene dokumenata i predaje prijava se može obaviti
              bez fizičkog prisustva. Svi znamo da je vreme resurs koji svima
              nedostaje, a razvoj savremene tehnologije nam omogućava da ga ne
              morate gubiti na odlaske kod knjigovođe.
            </p>
          </div>
        </section>
        <?php include 'about-us.php';?>
        <?php include 'scroller-bar.php';?>
        <?php include 'sta-nas-izdvaja-sekcija.php';?>
        <?php include 'footer.php';?>
      </div>
    </div>
  </body>
</html>
