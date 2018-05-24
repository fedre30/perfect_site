
<?php include_once '../src/frontoffice/header.php'; ?>


    <div class="contact">
      <div class="contact-items">
        <div class="container-itemsContent">


          <h2 class="contact-title">
          Une Année de Voyages.
        </h2>
          <p class="contact-text">
            32 rue des peuoliers
          </p>
          <p class="contact-text">
            92100 BOULOGNE
          </p>
          <p class="contact-text">
            <a class="contact-agence" href="#">Tél:<span class="contact-agence-span">+33(0)41310513</span> </a>
          </p>
          <p class="contact-text">
            <a class="contact-agence" href="redaction@uneanneedevoyages.com">Email: <span class="contact-agence-span">rédaction@uneanneedevoyages.com</span> </a>

          </p>
          <p class="contact-text">
            Ouvert du Lundi au vendredi de 10h à 18h
          </p>

        </div>
        <div class="contact-items">
          <form action="" class="contact-form">

            <p class="contact-formInput  "><select class=" contact-option" name="span-class">
            <option class="contact-optionText" value="">Annonceur</option>
            <option class="contact-optionText" value="label-danger">Journaliste</option>
            <option class="contact-optionText" value="label-warning">Partenaire</option>
            <option class="contact-optionText" value="label-success">Lecteur</option>
            <option class="contact-optionText" value="label-primary">Office De Tourisme</option>
        </select></p>
            <p class="contact-formInput"><input class="contact-textInput" type="text" name="prénom" placeholder="Prénom" value=""></p>
            <p class="contact-formInput"><input class="contact-textInput" type="text" name="nom" value="" placeholder="nom"></p>
            <p class="contact-formInput"><input class="contact-textInput" type="paragraphe" name="Adresse-mail" value="" placeholder="Adresse-mail"></p>

            <p class="contact-formInput"><input class="contact-textInput text" type="text" name="" value="" placeholder="saisir votre text"></p>
            <p class="contact-formInput"><input class="contact-textInput valid" type="submit" name="" value="envoyer"></p>
          </form>
        </div>
      </div>
    </div>

<?php include_once '../src/frontoffice/footer.php'; ?>
