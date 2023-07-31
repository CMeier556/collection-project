<?php
$db = new PDO('mysql:host=db;dbname=project2collector', 'root', 'password');
$db→setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `name`, `definition`, `synonyms`, `example_sentence` FROM `collection`");
$query->execute();


$data = $query->fetchAll();

echo '<pre>';
var_dump ($data);
echo '</pre>';