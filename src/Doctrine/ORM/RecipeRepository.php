<?php

namespace FastnTech\RecipePlugin\Doctrine\ORM;

use Doctrine\Common\Collections\Collection;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use FastnTech\RecipePlugin\Entity\RecipeInterface;

class RecipeRepository extends EntityRepository implements RecipeRepositoryInterface
{
    public function findByCategory($category): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.category = :category')
            ->setParameter('category', $category)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findBySlug($slug): ?RecipeInterface
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}