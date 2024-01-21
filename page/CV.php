
<!DOCTYPE html>
<html lang="fr">

<?php $MetaTitle ='Mon CV'; $MetaDescription ='Voici mon super cv';?>

<?php include('header.php'); ?>

<body>
<div class ="haut-cv">
    <div class="b-bleu">

        <img class="img" src="imageEye.jpg"
             alt="Mon image"/>

    </div>
    <div class="b-red">
        <h1 class="titre">Mon CV</h1>
    </div>
    <div class="b-green">
        <ul id="mon-id">
            <li>THOUVENOT Andréa</li>
            <li>24 route du pas de lauzun</li>
            <li>26400 Aouste sur sye</li>
            <li>06-88-24-42-01</li>
            <li>andreathouvenot@gmail.com</li>
        </ul>
    </div>
</div>
<main class="cv_main">
    <table>
        <thead>
        <tr>
            <th colspan="2" class="aligne">Expérience professionnels</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="gras">De novembre 2019 à Juillet 2020</td>
            <td class="ita">Hôtesse de caissse</td>
        </tr>
        <tr>
            <td class="gras">2018 Stage de 6 semaines</td>
            <td class="ita">En Peinture</td>
        </tr>
        <tr>
            <td class="gras">2017 Stage de 6 semaines</td>
            <td class="ita"> En Architecture</td>
        </tr>
        <tr>
            <td class="gras">2016 Stage de 6 semaines</td>
            <td class="ita">En Architecture</td>
        </tr>
        </tbody>
    </table>
    <div>
        <p class="aligne">Compétence</p>
        <ul class="liste">
            <li>1 ere compétence</li>
            <li>2 eme compétence</li>
            <li>3 eme compétence</li>
            <li>4 eme compétence</li>
        </ul>
    </div>
    <div>
        <p class="aligne">Formation</p>
        <ul class="liste">
            <li>De Septembre 2016 à Juillet 2018: Baccalauréat professionnels Etude du Bâtiment options Assitante en Architecture</li>
            <li>De Septembre 2018 à Juillet 2019: MANAA: Mise à Niveau en Art Appliqué</li>
        </ul>
    </div>
    <div>
        <p class="aligne">Centre d'interet</p>
        <ol>
            <li>Jeu Vidéo</li>
            <li>Dessin</li>
            <li>Serie et film</li>
        </ol>
    </div>




    <?php include('footer.php'); ?>
</main>
</body>

</html>

