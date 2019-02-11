<?php
/**
 * Created by PhpStorm.
 * User: safa
 * Date: 07/02/2019
 * Time: 2:00 PM
 */

namespace Grafikart\RecaptchaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\builder\treeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder=new treeBuilder();
        $rootNode=$treeBuilder->root('reacptcha');
        $rootNode
            ->children()
            ->scalarNode('key')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('secret')
            ->cannotBeEmpty()
            ->isRequired()
            ->end()
            ->end()
            ;
        return $treeBuilder;


    }
}