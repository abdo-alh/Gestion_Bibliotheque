<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\InscriptionController' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Controller\\InscriptionController.php';

$this->services['App\Controller\InscriptionController'] = $instance = new \App\Controller\InscriptionController();

$instance->setContainer(($this->privates['.service_locator.KTVqfp6'] ?? $this->get_ServiceLocator_KTVqfp6Service())->withContext('App\\Controller\\InscriptionController', $this));

return $instance;
