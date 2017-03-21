<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<!-- ////////////////////////////EXERCICE 1-->
<h2>Exercice 1</h2>
<p>Afficher la date courante en respectant la forme **jj/mm/aaaa** *(ex : 16/05/2016)*</p>

    <?php
    date_default_timezone_set('UTC');
    echo "La data d'aujourd'hui est : ".date('d/m/Y');
    ?>

<hr>

<!-- ////////////////////////////EXERCICE 2-->
<h2>Exercice 2</h2>
<p>Afficher la date courante en respectant la forme **jj-mm-aa** *(ex : 16-05-16)*</p>

    <?php
    date_default_timezone_set('UTC');
    echo "La date d'aujourd'hui est : ".date('d-m-Y');
    ?>

<hr>

<!-- ////////////////////////////EXERCICE 3-->
<h2>Exercice 3</h2>
<p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres *(ex : mardi 2 août 2016)*
**Bonus** : Le faire en français.</p>

    <?php
    setlocale(LC_TIME, "fr_FR.utf8");
    echo strftime("%A %e %B %Y");
    ?>

<hr>

<!-- ////////////////////////////EXERCICE 4-->
<h2>Exercice 4</h2>
<p>Afficher le timestamp du jour.
Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>

    <?php
$today = date_create();
echo "timestamp d'aujourd'hui : ".date_timestamp_get($today);
echo '<br>';
echo "timestamp du mardi 2 août 2016 à 15:00 : ".strtotime("07/23/2009 18:11");
    ?>

<hr>

<!-- ////////////////////////////EXERCICE 5-->
<h2>Exercice 5</h2>
<p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>

    <?php
$now = time();
$date = strtotime("2016-05-16");
$datediff = $now - $date;

echo "Il y a ".floor($datediff / (60 * 60 * 24))." jours entre aujourd'hui et le 16 mai 2016.";
    ?>

<hr>

<!-- ////////////////////////////EXERCICE 6-->
<h2>Exercice 6</h2>
<p>Afficher le nombre de jour dans le mois de février de l'année 2016.
</p>

    <?php
$days=cal_days_in_month(CAL_GREGORIAN,02,2016);
echo "Il y avait $days jours au mois de février de l'année 2016.";
    ?>

<hr>

<!-- ////////////////////////////EXERCICE 7-->
<h2>Exercice 7</h2>
<p>Afficher la date du jour + 20 jours.

</p>

    <?php
echo date('d-m-Y', strtotime("+20 days"));

    ?>

<hr>

<!-- ////////////////////////////EXERCICE 8-->
<h2>Exercice 8</h2>
<p>Afficher la date du jour - 20 jours.

</p>

    <?php
echo date('d-m-Y', strtotime("-20 days"));

    ?>

<hr>

<!-- ////////////////////////////TP-->
<h2>TP</h2>
<p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
En fonction des choix, afficher un calendrier comme celui ci :
![Calendrier](<a href="http://michelzbinden.com/images/cal-fr/me/calendrier-aout-2016-blanc-carre-d.jpg">http://michelzbinden.com/images/cal-fr/me/calendrier-aout-2016-blanc-carre-d.jpg</a> "Calendrier")
</p>

    <?php

    ?>

<hr>



</body>
</html>