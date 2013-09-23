<?php

namespace Frontend\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="course")
 */
class Course {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") 
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $school_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $course_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $description;

    /**
     * @ORM\Column(type="object")
     */
    protected $body;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $slug;

    public function __construct() {
        $this->school_id = 0;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set school_id
     *
     * @param integer $schoolId
     * @return Course
     */
    public function setSchoolId($schoolId)
    {
        $this->school_id = $schoolId;
    
        return $this;
    }

    /**
     * Get school_id
     *
     * @return integer 
     */
    public function getSchoolId()
    {
        return $this->school_id;
    }

    /**
     * Set course_name
     *
     * @param string $courseName
     * @return Course
     */
    public function setCourseName($courseName)
    {
        $this->course_name = $courseName;
    
        return $this;
    }

    /**
     * Get course_name
     *
     * @return string 
     */
    public function getCourseName()
    {
        return $this->course_name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Course
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set body
     *
     * @param \stdClass $body
     * @return Course
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return \stdClass 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Course
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}