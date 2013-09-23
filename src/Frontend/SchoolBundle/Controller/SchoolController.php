<?php

// src/Acme/HelloBundle/Controller/HelloController.php

namespace Frontend\SchoolBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Frontend\StoreBundle\Entity\Course;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SchoolController extends Controller {

    public function indexAction($name) {
        $object = new Course();
        $object->setCourseName($name);
        $object->setBody("Goyo shaaj baina aa ene chin ih ayataihan ed baina sh dee huuhduudee");
        $object->setDescription("ENE ni Description shuu dee yaasan amarhan ed be");
        $object->setSlug("manai-lager-deer-hun-baihgui");
        $em = $this->getDoctrine()->getManager();
        $em->persist($object);
        $em->flush();        
        return new Response('<html><body>Manai buh surguuliud: ' . $name . '!</body></html>');
    }

}