<html>
    <head>
        <title>Hi!</title>
    </head>
    <body>
        <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
        <?php
        $mon_prenom = 'Baptiste';
        $mon_age = 28;
        $j_ai_faim = true;
        $couleur_de_mes_yeux = 'vert';
        $ma_famille = array(Père => 'Luc', Mère => 'Diane', Frère => 'Maxime');
        phpinfo();
        ?>
    </body>
</html>
