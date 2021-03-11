<?php

declare(strict_types=1);

namespace FastnTech\RecipePlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

interface RecipeInterface extends ResourceInterface
{
    public function getTitle(): ?string;

    public function setTitle(?string $title): void;

    public function getSlug(): ?string;

    public function setSlug(?string $slug): void;

    public function getCategory(): ?string;

    public function setCategory(?string $category): void;

    public function getContent(): ?string;

    public function setContent(?string $content): void;
}