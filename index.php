<?php 
require_once('Word.php'); 
$db = new PDO('mysql:host=db;dbname=project2collector', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `name`, `definition`, `synonyms`, `example_sentence` FROM `collection`");
$query->execute();
$wordCollection = $query->fetchAll();

$wordObjectArray = [];
foreach ($wordCollection as $word) {
    $word = new Word($word['name'], $word['definition'], $word['synonyms'], $word['example_sentence']);
    array_push ($wordObjectArray, $word);
}
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>Colin's Collection</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <h1>Welcome to Colin's Word Collection!</h1>
        </header>
        <p>Here are some of my favorite words from the dictionary.</p>
        <?php 
            foreach ($wordObjectArray as $wordObject) {
                echo $wordObject->createWordCard();
            }
        ?>
    </body>
</html>