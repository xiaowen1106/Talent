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
                    <td><input type=\"button\" value=\"Annuler\" id=\"cancelButton\" /></td>
                    <td><input type=\"submit\" value=\"S'inscrire\" id=\"inscrireButton\" /></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>";
}

?>
