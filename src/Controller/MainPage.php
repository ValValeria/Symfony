<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as AbsController;

class MainPage extends AbsController{
    
    public function mainPage()
    {
        return $this->render('Pages/home_page.html.twig');
    }
}


?>