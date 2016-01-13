<?php

namespace uni\bundle\superhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * zonas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class zonas
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;
    
    /**
    * @ORM\ManyToMany(targetEntity="superheroe", mappedBy="zona")
    */
    private $superheroes;

    public function __construct() {
        $this->superheroes = new ArrayCollection();        
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
     * @return zonas
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return zonas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add superheroes
     *
     * @param \uni\bundle\superhBundle\Entity\superheroe $superheroes
     * @return zonas
     */
    public function addSuperhero(\uni\bundle\superhBundle\Entity\superheroe $superheroes)
    {
        $this->superheroes[] = $superheroes;

        return $this;
    }

    /**
     * Remove superheroes
     *
     * @param \uni\bundle\superhBundle\Entity\superheroe $superheroes
     */
    public function removeSuperhero(\uni\bundle\superhBundle\Entity\superheroe $superheroes)
    {
        $this->superheroes->removeElement($superheroes);
    }

    /**
     * Get superheroes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSuperheroes()
    {
        return $this->superheroes;
    }
}
