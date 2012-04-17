<?php
require_once 'template/talent.php';
require_once 'template/inscription.php';
require_once 'template/framework.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK href="css/index.css" rel="stylesheet" type="text/css"/>
        <LINK href="css/inscription.css" rel="stylesheet" type="text/css"/>
         <LINK href="css/messagerie.css" rel="stylesheet" type="text/css"/>
        <script src="script/jquery-1.7.1.min.js"></script>
        <script src="script/index.js"></script>
        <script src="script/messagerie.js"></script>
    </head>
    <body background="img/background.jpg">
        <div id="title">
            <?php title_non_connecte(); ?>
        </div>
            <?php searchBar_non_connecte(); ?>
        <div id="main_container">
            <div id="left_container">
                <?php categories(); ?>
            </div>
            <div id="center_container">
                <div id="center_upper">
                    <div id="slogan_container">
                        <h1>WE ARE THE TALENTS</h1>
                    </div>
                    <?php share_box(); ?>
                    
                </div>
                <div id="talents">
                    <h2>Talent du mois</h2>
                    <div id="talent_mois">
                        <?php btnMsg_connect(); ?>
                        <?php talent_mini(); ?>
                        
                    </div>
                    <h2>Talent à la une</h2>
                    <div id="talent_une">
                        <?php btnMsg_connect(); ?>
                        <?php talent_mini(); ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php inscription_box(); ?>
    </body>
</html>

