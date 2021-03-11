<?php

declare(strict_types=1);

namespace FastnTech\RecipePlugin\Entity;

class Recipe implements RecipeInterface
{
    /** @var mixed */
    protected $id;

    /** @var string|null */
    protected $title;

    /** @var string|null */
    protected $slug;

    /** @var string|null */
    protected $category;

    /** @var string|null */
    protected $content;

    /** @var string|null */
    protected $list;

    /** @var datetime|null */
    protected $createdAt;

    /** @var datetime|null */
    protected $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updateAt = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setList(?string $list): void
    {
        $this->list = $list;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}