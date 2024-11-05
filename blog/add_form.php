<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    <main>
        <h1>Ajouter un article</h1>
        <form action="add_article.php" method="GET">
            <div>
            <label for="title">Titre de l'article</label>    
            <input type="text" name="title" placeholder ="Entrez votre texte...">
            </div>
            <div>
                <label for="content">Texte de votre article</label>
                <textarea name="content" id="content"></textarea>
            </div>
            <div>
                <input type="submit" value="Ajouter">
            </div>

        </form>
    </main>
</body>
</html>