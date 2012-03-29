<?php require_once 'template/talent.php'; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="title">
            <div id="connection_form">
                <form>
                    <table border="0">
                        <tbody>
                            <tr>
                                <td><input type="username" name="username" value="" /></td>
                                <td><input type="password" name="password" value="" /></td>
                                <td><input type="submit" value="connection" name="submit" /></td>
                            </tr>
                            <tr>
                                <td><a href="">Inscription</a></td>
                                <td><a href="">Mot de passe oublier?</a></td>
                                <td><input type="checkbox" name="remember" value="yes" />Retenir mon mot de passe</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div id="search_bar">
            <a href="">Accueil</a>
            <div id="search_box"></div>
        </div>
        <div id="main_container">
            <div id="left_container">
                <ul id="cataglogue_list">
                    <li id="catalogue_recherche">recherche catalogue</li>
                    <li id="catalogue_title">Catalogue</li>
                    <li>Button logo Musique</li>
                    <li>Button logo Photo</li>
                    <li>Button logo Art</li>
                    <li>Button logo Création</li>
                    <li>Button logo Comédie</li>
                </ul>
            </div>
            <div id="center_container">
                <div id="slogan_container">
                    
                </div>
                <div id="share_container">
                    
                </div>
                <div id="talents">
                    <h2>Talent du mois</h2>
                    <div id="talent_mois">
                        <?php talent_mini(); ?>
                    </div>
                    <h2>Talent à l'une</h2>
                    <div id="talent_une">
                        <?php talent_mini(); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

