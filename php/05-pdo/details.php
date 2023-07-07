<?php

require_once './src/config/bdd.php';

$res = $pdo->prepare('SELECT * FROM manga WHERE id = :id');
$res->execute(['id' => $_GET['id']]);
$manga = $res->fetch();
