<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $offers = [
            [
                'title' => 'Backend Developer Intern',
                'company' => 'TechCorp',
                'description' => 'Work on APIs and database optimization with our backend team.'
            ],
            [
                'title' => 'Frontend Web Intern',
                'company' => 'Creative Labs',
                'description' => 'Assist in building responsive web pages using React and Bootstrap.'
            ],
            [
                'title' => 'AI Research Intern',
                'company' => 'DeepThink AI',
                'description' => 'Explore AI model optimization in a real-world environment.'
            ]
        ];

        return $this->render('home/index.html.twig', [
            'title' => 'Internship Offers',
            'offers' => $offers,
        ]);
    }
    #[Route('/', name: 'app_home_redirect')]
public function redirectToHome(): Response
{
    return $this->redirectToRoute('app_home');
}
}
