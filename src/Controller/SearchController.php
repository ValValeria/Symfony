<?php

namespace App\Controller;

use App\Services\Dictionary;
use App\Services\SearchesDBWorker;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends AbstractController
{
    public function index(Request $request, Dictionary $dictionary, SearchesDBWorker $sdbw)
    {
        $word = $request->query->get('word');

        if (!trim($word)) {
            $this->addFlash('notice', 'Please enter some word');
            return $this->redirectToRoute('mainPage');
        }

        try {
            $entries = $dictionary->entries('en-gb', $word);
        } catch (\Exception $e) {
            $this->addFlash('notice', "Word not found");
            return $this->redirectToRoute('mainPage');
        }

        $sdbw->incCount($word);

        return $this->render('Pages/search_page.html.twig', [
            'word' => $word,
            'entries' => $entries,
        ]);
    }
}


