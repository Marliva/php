<?php
$connexion = new PDO("mysql:host=localhost;dbname=blog_db", 'root', '');

$result = $connexion->query('SELECT * FROM article ORDER BY id DESC');

$articles = [];

while ($row = $result->fetch(PDO::FETCH_ASSOC)):
    $articles[] = $row;
endwhile;

$connexion = null;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<body>
    <main>

        <header>
            <a href="add_form.php">Ajouter un titre</a>
        </header>

        <?php
        foreach ($articles as $article):
        ?>
            <section>
                <h2><?= $article['title'] ?></h2>
                <p><?= $article['content'] ?></p>
            </section>
        <?php
        endforeach;
        ?>
    </main>
</body>

</html>