<?php

namespace App\Controller;

use App\Services\TagCloudService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TagsCloudController extends AbstractController
{
    /**
     * @Route("/tags-cloud", name="tags_cloud")
     * @param TagCloudService $tagCloudService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TagCloudService $tagCloudService)
    {
        $searches = $tagCloudService->getSearches();

        return $this->render('tags_cloud/index.html.twig', [
            'searches' => $searches,
        ]);
    }
}
