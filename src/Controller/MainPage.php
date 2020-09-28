<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MainPage extends AbstractController
{
    public function mainPage()
    {
        return $this->render('Pages/home_page.html.twig');
    }
}