<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as AbsController;

class MainPage extends AbsController{
    
    public function mainPage()
    {
        return $this->render('Pages/HomePage.html.twig');
    }
}


?>