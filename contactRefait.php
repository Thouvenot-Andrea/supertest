<!DOCTYPE>
<html lang="fr">
<?php include ('header.php') ; ?>

<?php
//Récupère les valeurs des champs du formulaire de contact / PHP_EOL s'adapte automatiquement au format de fin de ligne spécifique au système sur lequel il s'exécute.

    // Récupération de la civilité depuis le formulaire
    $civility = filter_input(INPUT_POST, "civility");
    // Récupération du nom depuis le formulaire et nettoyage des caractères spéciaux
    $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_SPECIAL_CHARS);
    // Récupération du prénom depuis le formulaire et nettoyage des caractères spéciaux
    $firstName = filter_input(INPUT_POST, "prénom", FILTER_SANITIZE_SPECIAL_CHARS);
    // Récupération de l'email depuis le formulaire et validation du format
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    // Récupération de la raison de contact depuis le formulaire
    $raisonContact = filter_input(INPUT_POST, "raison_contact");
    // Récupération du message depuis le formulaire
    $message = filter_input(INPUT_POST, "message");
    // Calcul de la longueur du message après suppression des espaces au début et à la fin
    $longueurMessage = strlen(trim($message));

// Récupère tous les champs du formulaire de contact rempli et enregistre l'ensemble dans le fichier text

//    // Chemin du fichier de contact avec un timestamp pour éviter les doublons
//    $filename = '/var/www/supertest/contact'. date('Y-m-d-H-i-s') . '.txt';
//
//    // Nettoyage et écriture des données dans le fichier
//
//    // Ajout de la civilité
//    file_put_contents($filename, "Civilité: " . $civility . PHP_EOL, FILE_APPEND);
//    // Ajout du nom
//    file_put_contents($filename, "Nom: " . $nom . PHP_EOL, FILE_APPEND);
//    // Ajout du prénom
//    file_put_contents($filename, "Prénom: " . $firstName . PHP_EOL, FILE_APPEND);
//    // Ajout de l'email
//    file_put_contents($filename, "Email: " . $email . PHP_EOL, FILE_APPEND);
//    // Ajout de la raison de contact
//    file_put_contents($filename, "Raison de contact: " . $raisonContact . PHP_EOL, FILE_APPEND);
//    // Ajout du message
//    file_put_contents($filename, "Message: " . $message . PHP_EOL, FILE_APPEND);

    ?>

<body>
    <main class="contact_main">
        <div class="contact">
            <form action=contactRefait.php method="post">
                <div class="contactez-nous">
                    <h1 class="Titre_Contact">Contactez-nous</h1>
        <!--        Un champ civilité <select>, M. et Mme-->
                    <div>
                        <label for="civility">Quel est votre civilité ? </label>
                        <br>
                        <select name="civility" id="civility" >
                            <option value="" disabled selected hidden> Choisissez votre civilité</option>
                            <option value="Vous êtes une femme">Mme</option>
                            <option value="Vous êtes un homme">M.</option>
                            <option value="Vous êtes ni homme ni femme">Autres</option>
                        </select>
                        <?php
                        if (isset($_POST['submit']) && empty($_POST['civility'])) {
                            echo "<p style='color: red;'>ATTENTION : Sélectionner votre civilité</p>";
                        }
                        ?>
                    </div>
                    <!--  Champ pour le nom-->
                    <div>
                        <label for="nom">Votre Nom</label>
                        <br>
                        <input type="text" id="nom" name="nom"  placeholder="ex : LEGRAND"  value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">
                        <?php
                        if (isset($_POST['submit']) && empty($_POST['nom'])) {
                        echo "<p style='color: red;'>ATTENTION : Rentrer votre nom</p>";
                        }
                        ?>
                    </div>
                    <!--  Champ pour le prénom -->
                    <div>
                        <label for="prénom">Votre Prénom</label>
                        <br>
                        <input type="text" id="prénom" name="prénom" placeholder="ex : Jean" value="<?php echo isset($_POST['prénom']) ? htmlspecialchars($_POST['prénom']) : ''; ?>">
                        <?php
                        if (isset($_POST['submit']) && empty($_POST['prénom'])) {
                            echo "<p style='color: red;'>ATTENTION : Rentrer votre prénom</p>";
                        }
                        ?>
                    </div>
                    <!--  Champ pour l'email -->
                    <div>
                        <label for="email"> Votre E-mail</label>
                        <br>
                        <input type="email" id="email" name="email" placeholder=" ex : MonAdress@mail.com" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                        <?php
                        if (isset($_POST['submit']) && empty($_POST['email'])) {
                            echo "<p style='color: red;'>ATTENTION : Rentrer votre email</p>";
                        }
                        ?>
                    </div>
                    <!--  Champ pour la raison de contact -->
                    <div>
                        <label for="raison contact">Raison de votre contact</label>
                        <p class="raison_contact">
                            <label for="raison_contact"> Demande d’information</label>
                            <input type="radio" id="raison_contact" name="raison_contact">
<!--                            <br />-->
                            <label for="raison_contact"> /  Prestations</label>
                            <input type="radio" id="raison_contact" name="raison_contact">
<!--                            <br />-->
                            <label for="raison_contact">/  Demande d'information</label>
                            <input type="radio" id="raison_contact" name="raison_contact" >
                            <?php
                            if (isset($_POST['submit']) && empty($_POST['raison_contact'])) {
                                echo "<p style='color: red;'>ATTENTION : Sélectionner la raison de votre contact</p>";
                            }
                            ?>
                        </p>
                    </div>
                    <!--  Champ pour le message-->
                    <div>
                        <div>
                            <label for="message">Votre message</label>
                            <br>
                            <textarea id="message" name="message"  placeholder="ex : Bonjour, je vous contacte car ..."></textarea>
                            <?php
                            if (isset($_POST['submit']) && empty($_POST['message'])) {
                                echo "<p style='color: red;'>ATTENTION : Rentrer votre message comme il faut</p>";
                            }
                            ?>
                        </div>
                    </div>
                    <!--  LE BOUTON  pour valider-->
                    <div>
                        <button type="submit" name="submit">Envoyer mon message</button>
                    </div>
                </div>
            </form>
        </div>

    </main>

</body>
<?php include ('footer.php') ; ?>
</html>
