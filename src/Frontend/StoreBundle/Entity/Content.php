<?php

class Content {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") 
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $menu_slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $sub_menu_slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $sub_menu_child_slug;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $description;

    /**
     * @ORM\Column(type="object")
     */
    protected $body;

    public function __construct() {
        $this->menu_id = null;
        $this->sub_menu_id = null;
        $this->sub_menu_child = null;
    }

}
