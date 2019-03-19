<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
     * @return Article[] Returns an array of Article objects
     */
    public function findAllPublishedOrderedByNewest()
    {
        $qb = $this->createQueryBuilder('a');

        return $this->addIsPublishedQueryBuilder($qb)
                    ->orderBy('a.publishedAt', 'DESC')
                    ->getQuery()
                    ->getResult();
    }

    /**
     * Separa la lógica de where para obtener artículos publicados.
     *
     * @param   object $qb DQL.
     *
     * @return  mixed
     */
    private function addIsPublishedQueryBuilder(QueryBuilder $qb = null)
    {
        return $this->getOrCreateQueryBuilder($qb)
                    ->andWhere('a.publishedAt IS NOT NULL');
    }

    /**
     * Crea el QB si no existe.
     *
     * @return  \Doctrine\ORM\QueryBuilder
     */
    private function getOrCreateQueryBuilder(QueryBuilder $qb = null)
    {
        return $qb ?: $this->createQueryBuilder('a');
    }

    /*
    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
