<?php

namespace Frontend\SchoolBundle\Helper;
use Doctrine\ORM\EntityManager;
class UtilityHelper {

    private $container;

    public function __construct(EntityManager $container) {
        $this->container = $container;
    }

    public function doSomething() {
        $container = $this->container;
        $container->get("doctrine")->getRepository();
    }

}