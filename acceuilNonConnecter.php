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
                    <li id="catalogue_title"><h2>Catégories</h2></li>
                    <li><a href=""><img id="category_button" src="img/category1.jpg"></a></li>
                    <li><a href=""><img id="category_button" src="img/category2.jpg"></a></li>
                    <li><a href=""><img id="category_button" src="img/category3.jpeg"></a></li>
                    <li><a href=""><img id="category_button" src="img/category4.jpg"></a></li>
                    <li><a href=""><img id="category_button" src="img/category5.jpg"></a></li>
                </ul>
            </div>
            <div id="center_container">
                <div id="center_upper">
                    <div id="slogan_container">
                        <h1>WE ARE THE TALENTS</h1>
                    </div>
                    <div id="share_container">
                        <table>
                            <tbody>
                                <tr>
                                    <td><a name="fb_share" type="button" share_url="YOUR_URL"></a>
                                        <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share"
                                                type="text/javascript">
                                        </script>
                                    </td>
                                    <td>
                                        <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                                        <script type="IN/Share"></script>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="none">Tweet</a>
                                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                    </td>
                                    <td>
                                        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                            <g:plusone annotation="none" size="tall" width="100px"></g:plusone>
                            </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
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

