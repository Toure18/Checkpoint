<?php

namespace App\Controller;

use App\Repository\RoseCollectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RealisationController extends AbstractController
{
    /**
     * @Route("/realisation", name="realisation")
     * @param RoseCollectionRepository $roseCollectionRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(RoseCollectionRepository $roseCollectionRepository)
    {
        return $this->render('realisation/index.html.twig', [
            'roseCollections' => $roseCollectionRepository->findall(),
        ]);
    }
}
