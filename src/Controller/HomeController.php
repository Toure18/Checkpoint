<?php

namespace App\Controller;

use App\Repository\CollectionRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index() : Response
    {
        return $this->render('home/index.html.twig');

    }

    /**
     * @Route("/accueil", name="accueil")
     * @return Response
     */
    public function accueil() : Response
    {
        return $this->render('home/accueil.html.twig');

    }

    /**
     * @Route("/socle", name="socle", methods={"GET"})
     * @param CollectionRepository $collectionRepository
     * @return Response
     */
    public function  listsocle(CollectionRepository $collectionRepository) : Response
    {
        $collections = $collectionRepository->findBy([], ['socle' => 'ASC']);
        $allSupports = [];
        foreach($collections as $collection){
            $allSupports [] = $collection->getSocle();
        }
        //Pour chacunes de mes supports
        $supportsLength = count($allSupports);
        for($i = 0; $i < $supportsLength; $i++){
            if(($i + 1) < $supportsLength){
                $nextSupport = $allSupports[$i + 1];
                if($allSupports[$i] == $nextSupport){
                    unset($allSupports[$i]);
                }
            }
        }

        //Je verifie la ligne avec toutes les autres
        //Si elle existe deja : unset
        return $this->render('home/socle.html.twig', [
            'collections'=> $allSupports,
        ]);
    }


    /**
     * @Route("/led", name="led")
     * @param CollectionRepository $collectionRepository
     * @return Response
     */
    public function  listled(CollectionRepository $collectionRepository) : Response
    {
        $collections = $collectionRepository->findBy([], ['led' => 'ASC']);
        $allLeds = [];
        foreach($collections as $collection){
            $allLeds [] = $collection->getLed();
        }
        //Pour chacunes de mes Leds
        $ledsLength = count($allLeds);
        for($i = 0; $i < $ledsLength; $i++){
            if(($i + 1) < $ledsLength){
                $nextSupport = $allLeds[$i + 1];
                if($allLeds[$i] == $nextSupport){
                    unset($allLeds[$i]);
                }
            }
        }
        //Je verifie la ligne avec toutes les autres
        //Si elle existe deja : unset
        return $this->render('home/led.html.twig', [
            'collections'=> $allLeds,

        ]);
    }


    /**
     * @Route("/deco", name="deco")
     * @param CollectionRepository $collectionRepository
     * @return Response
     */
    public function   listdeco(CollectionRepository $collectionRepository) : Response
    {
        $collections = $collectionRepository->findBy([], ['decoration' => 'ASC']);
        $allDecorations = [];
        foreach($collections as $collection){
            $allDecorations [] = $collection->getdecoration();
        }
        //Pour chacunes de mes Leds
        $decorationsLength = count($allDecorations);
        for($i = 0; $i < $decorationsLength; $i++){
            if(($i + 1) < $decorationsLength){
                $nextSupport = $allDecorations[$i + 1];
                if($allDecorations[$i] == $nextSupport){
                    unset($allDecorations[$i]);
                }
            }
        }
        //Je verifie la ligne avec toutes les autres
        //Si elle existe deja : unset
        return $this->render('home/deco.html.twig', [
            'collections'=> $allDecorations,

        ]);
    }


    /**
     * @Route("/rose", name="rose")
     * @param CollectionRepository $collectionRepository
     * @return Response
     */
    public function   listrose(CollectionRepository $collectionRepository) : Response
    {
        $collections = $collectionRepository->findBy([], ['rose' => 'ASC']);
        $allRoses = [];
        foreach($collections as $collection){
            $allRoses [] = $collection->getRose();
        }
        //Pour chacunes de mes Leds
        $rosesLength = count($allRoses);
        for($i = 0; $i < $rosesLength; $i++){
            if(($i + 1) < $rosesLength){
                $nextSupport = $allRoses[$i + 1];
                if($allRoses[$i] == $nextSupport){
                    unset($allRoses[$i]);
                }
            }
        }
        //Je verifie la ligne avec toutes les autres
        //Si elle existe deja : unset
        return $this->render('home/rose.html.twig', [
            'collections'=> $allRoses,

        ]);
    }

    /**
     * @Route("/resultat", name="resultat")
     */
    public function resultat(CollectionRepository $collectionRepository): Response
    {

        return $this->render('home/resultat.html.twig', [
            'collection' => $collectionRepository->find(['id'=>7]),
        ]);
    }

}
