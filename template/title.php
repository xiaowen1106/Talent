<?php

function categories() {
    $categories = array(
        array("id" => 1, "img" => "img/category1.jpg"),
        array("id" => 2, "img" => "img/category2.jpg"),
        array("id" => 3, "img" => "img/category3.jpeg"),
        array("id" => 4, "img" => "img/category4.jpg"),
        array("id" => 5, "img" => "img/category5.jpg"),
    );
    echo "<ul id=\"cataglogue_list\">
            <li id=\"catalogue_recherche\">recherche catalogue</li>
                <li id=\"catalogue_title\"><h2>Catégories</h2></li>";
    foreach ($categories as $categorie) {
        echo "<li><a href=\"\"><img id=" . $categorie["id"] . " src=\"" . $categorie["img"] . "\"></a></li>";
    }
    echo "</ul>";
}

?>
