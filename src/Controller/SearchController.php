<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends AbstractController
{
    public function index(Request $request)
    {
        $word = $request->get('word');

        //


        return $this->render('Pages/search_page.html.twig', [
            'word' => $word
        ]);
    }
}


