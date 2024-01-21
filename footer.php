
<footer>

    <?php

    // Vérifier si la date de première visite n'est pas encore définie
    if (!isset($_SESSION['dateFirstVisit'])) {
        // Enregistrer la date actuelle comme date de première visite
        $_SESSION['dateFirstVisit'] = date('Y-m-d H:i:s');
    }

    // Afficher la date de première visite dans le footer
    echo 'Date de première visite : ' . $_SESSION['dateFirstVisit'];


    // Définit le fuseau horaire par défaut à utiliser.
    date_default_timezone_set('Europe/Paris');

    //La clef pour stocker la date aura pour nom “dateFirstVisit” pour avec un format de date “Y-m-d H : i : s”.
    $dateFirstVisit=date('Y-m-d 
     H:i:s');

    // Affichage de quelque chose comme : Monday 8th Pf August 2005 03:12:46 PM
    //echo date('l jS \of F Y h:i:s A');

    //    // Affichage de quelque chose comme : Monday
    //    echo date("l");


    //    // Affiche : July 1, 2000 is on a Saturday
    //    echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
    //
    //    /* utilise les constantes dans le paramètre format */
    //    // Affichage de quelque chose comme : Wed, 25 Sep 2013 15:28:57 -0700
    //    echo date(DATE_RFC2822);

    // Affichage de quelque chose comme : 2000-07-01T00:00:00+00:00
    //    echo date (DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
    //



    ?>





</footer>