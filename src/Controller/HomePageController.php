<?php

namespace App\Controller;

use App\Entity\Person;
use App\Repository\PersonRepository;
use App\Repository\UniverseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/")
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homepageAction(EntityManagerInterface $entityManager)
    {

        $characters =$entityManager->getRepository(Person::class)->findAll();
        //$characters = $this->getDoctrine()->getRepository(PersonRepository::class)->findAll();
            //dump($characters);
        return $this->render('Homepage/homepage.html.twig', array(
            'characters' => $characters
        ));
    }
}
