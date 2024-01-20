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

    </form>

</main>

</body>

</html>
