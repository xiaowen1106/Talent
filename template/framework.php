<?php

function categories() {
    $categories = array(
        array("id" => 1, "img" => "img/Architecte.png"),
        array("id" => 2, "img" => "img/Peintre.png"),
        array("id" => 3, "img" => "img/Comedie.png"),
        array("id" => 4, "img" => "img/Decorateur.png"),
        array("id" => 5, "img" => "img/Ecrivain.png"),
        array("id" => 6, "img" => "img/Photo.png"),
        array("id" => 7, "img" => "img/Sportif.png"),
        array("id" => 8, "img" => "img/Musique.png")
    );
    echo "<ul id=\"cataglogue_list\">
            <li id=\"catalogue_recherche\">recherche catalogue</li>
                <li id=\"catalogue_title\"><h2>Catégories</h2></li>";
    foreach ($categories as $categorie) {
        echo "<li><a href=\"?cat=".$categorie["id"]."\"><img id=" . $categorie["id"] . " src=\"" . $categorie["img"] . "\"></a></li>";
    }
    echo "</ul>";
}

function statistique(){
    echo "<h2>Statistique</h2>
                <table id=\"statistique\">
                    <tbody>
                        <tr>
                            <td>Fan:</td>
                            <td>545</td>
                        </tr>
                        <tr>
                            <td>Nouveau Fan(mois):</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Ratio de satisfaction:</td>
                            <td>60%</td>
                        </tr>
                        <tr>
                            <td>Visite:</td>
                            <td>1020</td>
                        </tr>
                        <tr>
                            <td>Visite dans le mois:</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>Classement Ratio:</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>";
}


function searchBar_non_connecte(){
    echo "<div id=\"search_bar\">
            <a href=\"\">Accueil</a>
        </div>";
}

function searchBar_connecte($currentUser){
    echo "<table id=\"search_bar\">
        <tbody>
            <tr>
            <td><a id=\"accueil\" href=\"\">Accueil</a></td>
            <td><img id=\"notif\" src=\"img/notif.png\"></img></td>
            <td><img id=\"message\" src=\"img/message.png\"></img></td>";
    if($currentUser->getRole()==2){
        echo "<td><a href=\"\">Catégorie</a></td>";
    }else{
        echo "<td><a href=\"\">Mes Talents</a></td>";
    }
    echo    "
            </tr>
        </tbody></table>";
}

function share_box(){
    echo "<div id=\"share_container\">
                        <table>
                            <tbody>
                                <tr>
                                    <td><a name=\"fb_share\" type=\"button\" share_url=\"YOUR_URL\"></a>
                                        <script src=\"http://static.ak.fbcdn.net/connect.php/js/FB.Share\"
                                                type=\"text/javascript\">
                                        </script>
                                    </td>
                                    <td>
                                        <script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"></script>
                                        <script type=\"IN/Share\"></script>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-lang=\"en\" data-count=\"none\">Tweet</a>
                                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                                    </td>
                                    <td>
                                        <script type=\"text/javascript\" src=\"https://apis.google.com/js/plusone.js\"></script>
                            <g:plusone annotation=\"none\" size=\"tall\" width=\"100px\"></g:plusone>
                            </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>";
}
//ajout de zhiying
function btnMsg_connect() {
    echo "<div id=\"btnmsg_container\">
            <input type=\"button\" id=\"btnmsg\" value=\"send a message\" onClick=\"show_message()\">
          </div>";
}


function inscription_box() {
    echo "<div id=\"window\">
    <form id=\"inscription\">
    <input type=\"hidden\" name=\"operation\" value=\"inscrire\">
        <table>
            <tbody>
                <tr>
                    <td>Username: </td>
                    <td><input type=\"text\" name=\"username\"></td>
                    <td><warning id=\"warningU\"></warning></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type=\"text\" name=\"email\"></td>
                    <td><warning id=\"warningE\"></warning></td>
                </tr>
                <tr>
                    <td>Vérification email: </td>
                    <td><input type=\"text\" name=\"repeatEmail\"></td>
                    <td><warning id=\"warningRE\"></warning></td>
                </tr>
                <tr>
                    <td>Mot de passe: </td>
                    <td><input type=\"password\" name=\"password\"></td>
                    <td><warning id=\"warningP\"></warning></td>
                </tr>
                <tr>
                    <td>Vérification Mot de passe: </td>
                    <td><input type=\"password\" name=\"repeatPassword\"></td>
                    <td><warning id=\"warningRP\"></warning></td>
                </tr>
                <tr>
                    <td>Inscrire comme: </td>
                    <td><input type=\"radio\" name=\"role\" value=\"1\" checked=\"checked\"/>Fan <input type=\"radio\" name=\"role\" value=\"2\" />Talent</td>
                    <td><warning id=\"warningR\"></warning></td>
                </tr>
                <tr>
                    <td><input type=\"button\" value=\"Annuler\" id=\"cancelButton\" /></td>
                    <td><input type=\"button\" value=\"S'inscrire\" id=\"inscrireButton\" /></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>";
}

function title_non_connecte(){
    echo "<div id=\"connection_form\">
                <form>
                <input type=\"hidden\" name=\"operation\" value=\"login\">
                    <table border=\"0\">
                        <tbody>
                            <tr>
                                <td><input type=\"username\" name=\"username\" value=\"\" /></td>
                                <td><input type=\"password\" name=\"password\" value=\"\" /></td>
                                <td><input type=\"button\" value=\"connection\" id=\"submitButton\" /></td>
                            </tr>
                            <tr>
                                <td><a id=\"inscription_link\">Inscription</a></td>
                                <td><a href=\"\">Mot de passe oublier?</a></td>
                                <td><input type=\"checkbox\" name=\"remember\" value=\"yes\" />Retenir mon mot de passe</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>";
}

function title_connecte($currentUser){
    echo "<table id=\"currentUser\">
        <tbody>
            <tr>
            <td>".$currentUser->getUsername()."</td>
            <td><img src=\"\"/></td>
            <td><button id=\"logout\">Déconnexion</button></td>
            </tr>
        </tbody>
            </table>";
}
