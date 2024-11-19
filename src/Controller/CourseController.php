<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/cours')]
class CourseController extends AbstractController
{
    #[Route('/', name: 'course_lisr')]
    public function list(): Response
    {
        //todo : aller chercher cours en BDD
        return $this->render('course/list.html.twig', [
            'controller_name' => 'CourseController',
        ]);
    }

    #[Route('/{id}', name: 'course_show', methods: ['GET'])]
    public function show( int $id): Response
    {

        return $this->render('course/show.html.twig', []);
    }
}
