
<?php include_once '../src/frontoffice/header.php'; ?>


<section class="home fichesBackground-contact">
    <div class="container-contact">
	    <?php include 'navbar.php' ?>
        <div class="row">

            <div class="twelve columns">
                <span class="home-lilText-contact">GUIDE DE VOYAGE</span>
            </div>

            <div class="six columns">
                <h1 class="home-Title-contact">Contactez nous.</h1>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="six columns">
            <h3>Une Année <span class="bold-contact">de Voyages</span>.</h3> <br>
            <span class="bold-contact">32 rue des Peuoliers</span> <br>
            <span class="bold-contact">92100 BOULOGNE</span> <br> Tél : <span class="bold">+33(0) 413 10 513</span> <br> Email : <span class="bold">rédaction@uneanneedevoyages.com</span> <br> Ouvert du lundi au vendredi de 10h à 18h. <br>
        </div>



        <form class="four columns">
            <select>
                <option value="1">Journaliste</option>
                <option value="2">Partenaire</option>
                <option value="3">Office de tourisme</option>
                <option value="4">Annonceur</option>
                <option value="5">Lecteur</option>
            </select> <br>
            <input type="text" placeholder="Prénom" value="" class="input"> <br>
            <input type="Email" placeholder="Mail" value="" class="input"> <br>
            <textarea type="text" placeholder="Message" value="" class="contact-textarea"></textarea> <br>
            <button type="submit" placeholder="button" class="buttonContact">Envoyer</button>
        </form>

    </div>
</section

<?php include_once '../src/frontoffice/footer.php'; ?>
