<?php

$title = $_POST['title'];
$content = $_POST['content'];

try {
    $connexion = new PDO("mysql:host=localhost;dbname=blog_db", 'root', '');
} catch (PDOException $error)
{
    echo "Une erreur s'est produite lors de la connexion à votre base de données : " . $error->getMessage();
}

$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stm = $connexion->prepare("INSERT INTO article (title, content) VALUES (:title,:content)");

$stm->bindParam(':title', $title);
$stm->bindParam(':content', $content);

if ($stm->execute()):
    header("Location: index.php");
else:
    echo "ERREUR !!!";
endif;

$connexion = null;
?>