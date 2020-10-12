<?php

namespace App\Controller;

use App\Services\TagsCloudService\TagsCloudInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TagsCloudController extends AbstractController
{
    /**
     * @param TagsCloudInterface $tagsCloudService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TagsCloudInterface $tagsCloudService)
    {
        $searches = $tagsCloudService->getSearches();

        return $this->render('tags_cloud/index.html.twig', [
            'searches' => $searches,
        ]);
    }
}
