<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger, StarshipRepository $repository): Response
    {
        //$logger->info('Starship collection retrieved');

        $starships = $starships = $repository->findAll();

        return $this->json($starships);
    }
}
