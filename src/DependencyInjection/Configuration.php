<?php

declare(strict_types=1);

namespace FastnTech\RecipePlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('fastntech_recipe_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
