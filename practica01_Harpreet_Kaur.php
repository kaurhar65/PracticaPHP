<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nom = 'Kurt';
        $cognom = 'Cagle';
        $edat = 40;
        $dataNaix = new DateTime();
        $dataNaix -> setDate (1983, 05, 12);
        $telefon = array('654332211', '933332211');
        $adreca = 'Carrer de Turin, 15';
        $email = 'kurt.cagle@example.com';
        $treballa = true;
        $alcada = 1.67;
    ?>
    <h1> Descrivint a <?php echo $nom , $cognom?> </h1>
    <h2> Les dades de <?php echo $nom?> son </h2>
    <ul>
        <li>Es diu: <?php echo $nom ?> </li>
        <li>Te <?php echo $edat ?> anys</li>
        <li> Va neixer l'any: <b> <?php echo $dataNaix->format('Y-m-d') ?> </b> </li>
        <li> El seus telèfons són: <?php echo $telefon[0] ?> - <?php echo $telefon[1] ?></li>
        <li> Viu a: <?php echo $adreca ?></li>
        <li> El seu email és: <?php echo $email ?></li>
        <li> Treballa: <?php if ($treballa == true){ 
                                        echo 'Si' ;} ?></li>
        <li> I medeix: <?php echo $alcada ?></li>
    </ul> 



<!-- echo $treballa ? 'si : 'no (para que salga true o false) -->

<!-- Práctica2: 26/09/2023 -->
<?php
// declaración de una variable constante
    define("IVA",0.21);
    $cursos = array(
            array(1,"PHP", "Introducció a PHP", 15.5),
            array(2, "Laravel", "Laravel per experts", 30),
            array(3, "Django", "Dominant Django ", 10)
    );

    for($i=0; $i<3; $i++){
        echo$cursos[$i][0];
        echo$cursos[$i][1];
        echo$cursos[$i][2];
        echo$cursos[$i][3];
    }
    ?>

    <h1>Llista de cursos</h1>
    <h2>Numero de cursos apuntats: <?php echo count($cursos)?></h2>
    




</body>
</html>