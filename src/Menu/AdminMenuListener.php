<?php

declare(strict_types=1);

namespace FastnTech\RecipePlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $forms = $menu
            ->addChild('recipe')
            ->setLabel('Tarifler')
        ;

        $forms
            ->addChild('recipe', ['route' => 'fastntech_recipe_admin_recipe_index'])
            ->setLabel('Tarifler')
        ;
    }
}