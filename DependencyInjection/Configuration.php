<?php

namespace Etfostra\RuStringsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Etfostra\RuStringsBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('etfostra_ru_strings');

        $rootNode
            ->children()

                ->scalarNode('redis_cache_ttl')
                    ->cannotBeEmpty()
                    ->defaultValue(2592000)
                ->end()

                ->scalarNode('pyphrasy_api_url')
                    ->cannotBeEmpty()
                    ->defaultValue('https://pyphrasy.herokuapp.com/inflect')
                ->end()

            ->end()
        ;

        return $treeBuilder;
    }
}
