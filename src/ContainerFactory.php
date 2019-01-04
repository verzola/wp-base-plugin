<?php

namespace Base;

class ContainerFactory
{
    public static function make()
    {
        $builder = new \DI\ContainerBuilder();

        $builder->addDefinitions(__DIR__ . '/../config/container.php');

        return $builder->build();
    }
}
