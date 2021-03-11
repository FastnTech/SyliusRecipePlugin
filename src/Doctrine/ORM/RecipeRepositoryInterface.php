<?php

namespace FastnTech\RecipePlugin\Doctrine\ORM;

use Sylius\Component\Resource\Repository\RepositoryInterface;
use FastnTech\RecipePlugin\Entity\RecipeInterface;

interface RecipeRepositoryInterface extends RepositoryInterface
{
    public function findByCategory($category): array;
    public function findBySlug($slug): ?RecipeInterface;
}