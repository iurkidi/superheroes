<?php

namespace uni\bundle\superhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * tipos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class tipos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;
    
    /**
    * @ORM\OneToMany(targetEntity="superheroe", mappedBy="tipo", cascade={"remove"})
    */
    protected $superheroe;
    
    public function __construct() {
        $this->superheroe = new ArrayCollection();
    }

    public function __toString() {
        return $this->nombre;
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
     * Set nombre
     *
     * @param string $nombre
     * @return tipos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add superheroe
     *
     * @param \uni\bundle\superhBundle\Entity\superheroe $superheroe
     * @return tipos
     */
    public function addSuperheroe(\uni\bundle\superhBundle\Entity\superheroe $superheroe)
    {
        $this->superheroe[] = $superheroe;

        return $this;
    }

    /**
     * Remove superheroe
     *
     * @param \uni\bundle\superhBundle\Entity\superheroe $superheroe
     */
    public function removeSuperheroe(\uni\bundle\superhBundle\Entity\superheroe $superheroe)
    {
        $this->superheroe->removeElement($superheroe);
    }

    /**
     * Get superheroe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSuperheroe()
    {
        return $this->superheroe;
    }
}
