<div class="kalkulator pad">
    <h2>Kalkulator</h2>
    <div>
    <button type="button" class="collapsible">Dividende</button>
    <div class="content" >
        <script type="text/javascript" src=" <?php echo get_stylesheet_directory_uri()."/calc/dividende.js"?>"></script>
        <div class="field">
        <p>Unesite neto vrednost:</p>
        <input type="text" id="dividende-input">              
        </div>

        <div class="field">
        <p></p>
        <input type="button" class="btn" name="button" value="Izračunaj" onclick="calcDividenda()">
        </div>

        <div class="field">
        <p>Bruto:</p>
        <input type="text" id="dividende-res1">
        </div>
        

        <div class="field">
        <p>Porez:</p>
        <input type="text" id="dividende-res2">
        </div>
    </div>
    </div>


    <div>
    <button type="button" class="collapsible">Dopunski rad</button>
    <div class="content">
        <script type="text/javascript" src=" <?php echo get_stylesheet_directory_uri()."/calc/dopunski-rad.js"?>"></script>

        <div class="field">
            <p>Unesite željenu neto zaradu:</p>
            <input type="text" id="dr-input">
        </div>

        <div class="field">
            <p></p>
            <input type="button" class="btn" value="Izračunaj" onclick="calcDopunskiRad()">
        </div>


        <div class="field">
            <p>Bruto: </p>
            <input type="text" id="dopunski-rad-res1" >
        </div>

        <div class="field">
            <p>Normirani troškovi: </p><input type="text" id="dopunski-rad-res2" >
        </div>

        <div class="field">
            <p>Oporezivo: </p><input type="text" id="dopunski-rad-res3" >
        </div>

        <div class="field">
            <p>Porez: </p> <input type="text" id="dopunski-rad-res4">
        </div>

        <div class="field">
            <p>PIO:</p> <input type="text" id="dopunski-rad-res5" >
        </div>

    </div>
    </div>



    <div>
    <button type="button" class="collapsible">Zarada</button>
    <div class="content">
        <script type="text/javascript" src=" <?php echo get_stylesheet_directory_uri()."/calc/zarada.js"?>"></script>
            
       
        <div class="field">
            <p>Unesite željenu neto zaradu:</p>
            <input type="text" id="zarada-input">
        </div>

        <div class="field">
            <p></p>
            <input type="button" class="btn" value="Izračunaj" onclick="calcZarada()">
        </div>

        <div class="field">
        <p>Bruto:</p> <input type="text" id="zarada-res1" >
        </div>
        <div class="field">
        <p>Oporezivo:</p> <input type="text" id="zarada-res2"> 
        </div>
        <div class="field">
        <p>Porez:</p> <input type="text" id="zarada-res3" >
        </div>
        <div class="field">
        <p>Pio na teret zaposlenog:</p> <input type="text" id="zarada-res4" >
        </div>
        <div class="field">
        <p>Zdravstveno na teret zaposlenog:</p> <input type="text" id="zarada-res5" >
        </div>
        <div class="field">
        <p>Nezapslenost na teret zaposlenog:</p> <input type="text" id="zarada-res6" >
        </div>
        <div class="field">
        <p>Pio na teret poslodavca:</p> <input type="text" id="zarada-res7" >
        </div>
        <div class="field">
        <p>Zdravstveno ne teret poslodavca:</p> <input type="text" id="zarada-res8" >
        </div>
        <div class="field">
        <p>Nezaposlenost ne teret poslodavca:</p> <input type="text" id="zarada-res9" >
        </div>
        <div class="field">
        <p>Ukupan trosak:</p> <input type="text" id="zarada-res10" >
        </div>
    </div>
    </div>



    <div>
    <button type="button" class="collapsible">Zakupi</button>
        <div class="content">
            <script type="text/javascript" src=" <?php echo get_stylesheet_directory_uri()."/calc/zakupi.js"?>"></script>
        
            <p><b>Zakup nepokretnosti </b></p>
            <div class="field">
                <p>Unesite željenu neto zaradu:</p>
                <input type="text" id="iznosnovca">
            </div>

            <div class="field">
                <p></p>
                <input type="button" class="btn" value="Izračunaj" onclick="calcZakupi()">
            </div>

            <div class="field">
                <p>Bruto:</p> <input type="text" id="zakup-res1">
            </div>
            <div class="field">
                <p>Normirani troškovi:</p> <input type="text" id="zakup-res2">
            </div>
            <div class="field">
                <p>Oporezivi prihod:</p> <input type="text" id="zakup-res3">
            </div>
            <div class="field">
                <p>Porez:</p> <input type="text" id="zakup-res4">
            </div>
            <div class="field"></div>



            <p><b>Zakup pokretnosti </b></p>

            <div class="field">
                <p>Unesite željenu neto zaradu:</p>
                <input type="text" id="iznosnovca2"  >
            </div>

            <div class="field">
                <p></p>
                <input type="button" class="btn" value="Izračunaj" onclick="calcZakupi2()">
            </div>

            <div class="field">
                <p>Bruto:</p> <input type="text" id="zakup-res5">
            </div>

            <div class="field">
                <p>Normirani troškovi:</p> <input type="text" id="zakup-res6" >
            </div>

            <div class="field">
                <p>Oporezivo: </p> <input type="text" id="zakup-res7"  >
            </div>

            <div class="field">
                <p>Porez: </p> <input type="text" id="zakup-res8"  >
            </div>
        </div>
    </div>




    <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = "1000px";
        } 
        });
    }
    </script>

</div>