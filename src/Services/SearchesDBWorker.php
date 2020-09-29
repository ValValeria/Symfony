<?php


namespace App\Services;


use App\Entity\Searches;
use App\Repository\SearchesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class SearchesDBWorker
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function incCount(string $word)
    {
        $repository = $this->em->getRepository(Searches::class);
        $search = $repository->findOneBy(['word' => $word]);

        if ($search != null) {
            $search->setCount($search->getCount() + 1);
        } else {
            $search = new Searches();
            $search->setWord($word);
            $search->setCount(1);
            $this->em->persist($search);
        }

        $this->em->flush();
    }
}