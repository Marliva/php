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
        <script src="https://unpkg.com/htmx.org@2.0.3"></script>
</head>

<body>
    <main>

        <header>
            <a href="add_form.php"
            hx-get="add_form.php"
            hx-target="#form_ajout_article"
            hx-swap="outerHTML"
            >Ajouter un titre</a>
            
            <a href="add_fake_data.php">Ajouter de fausses données</a>

        </header>

        <section id="form_ajout_article"></section>


        <?php
        foreach ($articles as $article):
        ?>
            <section>
                <h2><?= $article['title'] ?>
            <span hx-delete="del_article.php?id=<?= $article['id'] ?>"
            hx-confirm="Etes-vous sûr de vouloir supprimer cet article ?"
            hx-swap="outerHTML"
            class="delete">X</span>
            </h2>
                <p><?= $article['content'] ?></p>
            </section>
        <?php
        endforeach;
        ?>
    </main>
</body>

</html>