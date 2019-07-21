<?php

require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFactory = new \Nunes\Doctrine\Helper\EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

var_dump($entityManager->getConnection());