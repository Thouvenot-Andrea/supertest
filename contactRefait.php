<!DOCTYPE>
<html lang="fr">
<link rel="stylesheet" href="styleContactSelect.php" />
<?php //include ('header.php'); ?>
<body>
<main>
    <form action="recupereInfoContact.php" method="post">
<!--        Un champ civilité <select>, M. et Mme-->
        <div>
            <label for="civility">Quel est votre civilité ? </label>
            <select name="civility" id="civility"  >
                <option value="" disabled selected hidden> Choisissez votre civilité</option>
                <option value="Vous êtes une femme">Mme</option>
                <option value="Vous êtes un homme">M.</option>
                <option value="Vous êtes ni homme ni femme">Autres</option>
            </select>
        </div>
        <!--  Champ pour le nom-->
        <div>
            <label for="nom">Votre Nom</label>
            <input type="text" id="nom" name="nom" placeholder="ex : LEGRAND">
        </div>
        <!--  Champ pour le prénom -->
        <div>
            <label for="prénom">Votre Prénom</label>
            <input type="text" id="prénom" name="prénom" placeholder="ex : Jean">
        </div>
        <!--  Champ pour l'email -->
        <div>
            <label for="email"> Votre E-mail</label>
            <input type="email" id="email" name="email" placeholder=" ex : MonAdress@mail.com">
        </div>
    </form>

</main>

</body>

</html>
