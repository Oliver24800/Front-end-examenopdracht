<?php
include 'header.php';
?>
    <div class="video-crop">
        <img class="banner-block d-block mx-auto" src="image/stock11.jpg" height="600px" alt="">
        <div class="follow-text-block block">
            <h1>Lesrooster</h1>
        </div>
    </div>



    <div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1 style="margin-bottom: 50px;">Lesrooster</h1>








        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Maandag')">Maandag</button>
            <button class="tablinks" onclick="openCity(event, 'Dinsdag')">Dinsdag</button>
            <button class="tablinks" onclick="openCity(event, 'Woensdag')">Woensdag</button>
            <button class="tablinks" onclick="openCity(event, 'Donderdag')">Donderdag</button>
            <button class="tablinks" onclick="openCity(event, 'Vrijdag')">Vrijdag</button>
            <button class="tablinks" onclick="openCity(event, 'Zaterdag')">Zaterdag</button>


        </div>

        <div id="Maandag" class="tabcontent">
            <h3>Maandag</h3>
            <p>1</p>
        </div>

        <div id="Dinsdag" class="tabcontent">
            <h3>Dinsdag</h3>
            <p>2</p>
        </div>

        <div id="Woensdag" class="tabcontent">
            <h3>Woensdag</h3>
            <p>3</p>
        </div>
            <div id="Donderdag" class="tabcontent">
                <h3>Donderdag</h3>
                <p>4</p>
            </div>
            <div id="Vrijdag" class="tabcontent">
                <h3>Vrijdag</h3>
                <p>5</p>
            </div>
            <div id="Zaterdag" class="tabcontent">
                <h3>Zaterdag</h3>
                <p>6</p>
            </div>









        <p style="margin-top: 25px;">*Geen lessen op zondag.</p>

        <b style="margin-top: 25px;">Proefles proberen? Klik<a href="contact.php"> Hier!</a></b>
        </div>
    </div>
    </div>
    </div>
<?php
include 'footer.php';
?>