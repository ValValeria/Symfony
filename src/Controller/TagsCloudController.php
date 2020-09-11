<?php

namespace App\Controller;

use App\Services\TagsCloudService\TagsCloudServiceDecorator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TagsCloudController extends AbstractController
{
    /**
     * @Route("/tags-cloud", name="tags_cloud")
     * @param TagsCloudServiceDecorator $tagsCloudService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TagsCloudServiceDecorator $tagsCloudService)
    {
        $searches = $tagsCloudService->getSearches();

        return $this->render('tags_cloud/index.html.twig', [
            'searches' => $searches,
        ]);
    }
}
