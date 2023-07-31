<?php
$db = new PDO('mysql:host=db;dbname=project2collector', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `name`, `definition`, `synonyms`, `example_sentence` FROM `collection`");
$query->execute();


$word_collection = $query->fetchAll();

