<?php

function inscription_box() {
    echo "<div id=\"window\">
    <form id=\"inscription\">
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
                    <td>Repeat Email: </td>
                    <td><input type=\"text\" name=\"Vérification email\"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type=\"password\" name=\"Mot de passe\"></td>
                </tr>
                <tr>
                    <td>Repeat Password </td>
                    <td><input type=\"password\" name=\"Vérification Mot de passe\"></td>
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

?>
