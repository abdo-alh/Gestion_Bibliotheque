<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.h889Fth' shared service.

return $this->privates['.service_locator.h889Fth'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'AuteurRepository' => ['privates', 'App\\Repository\\AuteurRepository', 'getAuteurRepositoryService.php', true],
    'BookRepository' => ['privates', 'App\\Repository\\BookRepository', 'getBookRepositoryService.php', true],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
]);
