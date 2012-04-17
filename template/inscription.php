<?php

require_once "database.php";
require_once 'class/User.php';

if(isset($_POST["operation"])){
    connect();
    if($_POST["operation"]=="inscrire"){
        inscrire();
    }
}

function inscription_box() {
    echo "<div id=\"window\">
    <form id=\"inscription\" method=\"POST\">
    <input type=\"hidden\" name=\"operation\" value=\"inscrire\">
        <table>
            <tbody>
                <tr>
                    <td>Username: </td>
                    <td><input type=\"text\" name=\"username\"></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type=\"text\" name=\"email\"></td>
                </tr>
                <tr>
                    <td>Vérification email: </td>
                    <td><input type=\"text\" name=\"repeatEmail\"></td>
                </tr>
                <tr>
                    <td>Mot de passe: </td>
                    <td><input type=\"password\" name=\"password\"></td>
                </tr>
                <tr>
                    <td>Vérification Mot de passe: </td>
                    <td><input type=\"password\" name=\"repeatPassword\"></td>
                </tr>
                <tr>
                    <td>Inscrire comme: </td>
                    <td><input type=\"radio\" name=\"role\" value=\"1\" />Fan <input type=\"radio\" name=\"role\" value=\"2\" />Talent</td>
                </tr>
                <tr>
                    <td><input type=\"button\" value=\"Annuler\" id=\"cancelButton\" /></td>
                    <td><input type=\"submit\" value=\"S'inscrire\" id=\"inscrireButton\" /></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>";
}

function inscrire(){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $password=md5($password);
    $role=$_POST["role"];
    $sql="insert into member(username, password, email, role) values ('".$username."', '".$password."', '".$email."', ".$role.");";
    mysql_query($sql);
    $uid=mysql_insert_id();
    setcookie("uid", $uid);
    $currentUser = new User();
    $currentUser->setId($uid);
    $currentUser->setUsername($username);
    $currentUser->setRole($role);
    $GLOBALS["currentUser"] = $currentUser;
}

?>
