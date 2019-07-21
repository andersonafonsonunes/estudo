<?php

use Nunes\Doctrine\Entity\Aluno;
use Nunes\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ .'/../vendor/autoload.php';

$entityManagertFactory = new EntityManagerFactory();
$entityManager = $entityManagertFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/**
 * @var Aluno[] $alunoList
 */
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "ID: {$aluno->getId()} \nNome: {$aluno->getNome()}\n\n";
}

$nico = $alunoRepository->find(3);
echo $nico->getNome();

echo "\n";

$tt = $alunoRepository->findoneBy(["nome" => "teste 3"]);
var_dump($tt);