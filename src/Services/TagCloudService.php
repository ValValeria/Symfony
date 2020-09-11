<?php


namespace App\Services;


use App\Repository\SearchesRepository;

class TagCloudService
{
    private $repository;
    private $tagsCount;

    public function __construct(SearchesRepository $repository, int $tagsCount)
    {
        $this->repository = $repository;
        $this->tagsCount = $tagsCount;
    }

    public function getSearches()
    {
        return $this->repository->getTop($this->tagsCount);
    }
}