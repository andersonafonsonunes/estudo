<?php

use Nunes\Doctrine\Entity\Aluno;
use Nunes\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ .'/../vendor/autoload.php';

$aluno = new Aluno();

$aluno->setNome($argv[1]);

$entityManagertFactory = new EntityManagerFactory();
$entityManager = $entityManagertFactory->getEntityManager();

$entityManager->persist($aluno);

$entityManager->flush();