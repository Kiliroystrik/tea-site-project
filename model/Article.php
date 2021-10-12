<?php
require_once 'core/Connect.php';

class Article
{
    //private $_id = $req["article_name"];
    private $_name;
    private $_price;
    private $_text;
    private $_description;
    private $_src;

    public function dispArticles($reqs)
    {
        foreach ($reqs as $req) { ?>
            <article>
                <h3> <?= $req["article_name"] ?> </h3>
                <img src=<?= $req["src"] ?> class='container'>
                <p> <?= $req["article_description"] ?> </p>
                <p> <?= $req["article_text"] ?> </p>
                <span class="price"> <?= $req["article_price"] ?> $ </span>
                <a href="#" class="add">Détails</a>
                <a href="#" class="add">Ajouter</a>
            </article>
<?php
        };
    }
}
