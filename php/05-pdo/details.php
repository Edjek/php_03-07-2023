<?php

require_once './src/config/bdd.php';

// $res = $pdo->query('SELECT * FROM manga WHERE id ='.$_GET['id']);
// $manga = $res->fetch();

$res = $pdo->prepare('SELECT * FROM manga WHERE id = :id');
$res->execute(['id' => $_GET['id']]);
$manga = $res->fetch();

var_dump($manga);
