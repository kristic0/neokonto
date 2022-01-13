<div class="nav-container cpad">
          <div class="logo" id="logo">
            <img
              class="desktop"
              src="<?php echo get_theme_mod( 'nav_logo_d' ); ?>"
              alt=""
            />
            <img
              class="mobile"
              src="<?php echo get_theme_mod( 'nav_logo_m' ); ?>"
              alt=""
            />
          </div>

          <div class="navigation">
            <a href="">O nama</a>
            <a href="/usluge">Usluge</a>
            <div class="nav-button">
              <a href="">Kontakt</a>
            </div>
          </div>

          <div style="z-index: 10" id="hamburger" class="mobile hamburger">
            <label>
              <input onclick="showOverlay()" type="checkbox" />
              <span></span>
              <span></span>
              <span></span>
            </label>
          </div>

          <script>
            let bicon = document.getElementById("bicon");
            let overlay = document.getElementById("overlay");
            let hamburger = document.getElementById("hamburger");
            overlay.style.width = "0px";

            document.getElementById("logo").onclick = function(){
                window.location.href = '/';
            }

            function showOverlay() {
              //console.log(hamburger.childNodes[1].childNodes);
              let hamburgerSpanElements = [];
              hamburger.childNodes[1].childNodes.forEach((child) => {
                if (child.tagName == "SPAN") {
                  hamburgerSpanElements.push(child);
                }
              });

              if (overlay.style.width == "0px") {
                hamburgerSpanElements.forEach((element) => {
                  element.style.background = "#ea5c15";
                });
                overlay.style.width = "100%";
                disableScroll();
              } else {
                hamburgerSpanElements.forEach((element) => {
                  element.style.background = "#ea5c15";
                });
                overlay.style.width = "0px";
                enableScroll();
              }
            }

            function disableScroll() {
              // Get the current page scroll position
              scrollTop =
                window.pageYOffset || document.documentElement.scrollTop;
              (scrollLeft =
                window.pageXOffset || document.documentElement.scrollLeft),
                // if any scroll is attempted,
                // set this to the previous value
                (window.onscroll = function () {
                  window.scrollTo(scrollLeft, scrollTop);
                });
            }

            function enableScroll() {
              window.onscroll = function () {};
            }
          </script>
        </div>