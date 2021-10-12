<?php
require_once 'core/Connect.php';
require_once 'model/Article.php';


try {
    $articles = $pdo->query('SELECT * FROM `articles`');
    // $req = 'SELECT * FROM `articles`';
    // $articles = $DB->log();

    if ($articles === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
// foreach ($articles as $req) {
//     echo "<p>{$req["article_name"]}</p>";
//     echo "<p>{$req["article_price"]}</p>";
//     echo "<p>{$req["article_text"]}</p>";
//     echo "<p>{$req["article_description"]}</p>";
//     echo "<img src='{$req["src"]}' class='container'>";
//     print_r($req);
// };

$article = new Article();

$article->dispArticles($articles);
include 'template/footer.php';
