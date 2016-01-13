<?php

namespace uni\bundle\superhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * superheroe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class superheroe
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
     * @var string
     *
     * @ORM\Column(name="habilidades", type="string", length=100)
     */
    private $habilidades;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1)
     */
    private $sexo;        
    
    /**
    * @ORM\ManyToOne(targetEntity="tipos", inversedBy="superheroe", cascade={"remove"})    
    */
    protected $tipo; 

    /**
    * @ORM\ManyToMany(targetEntity="zonas", inversedBy="superheroes")
    */
    private $zona;

    public function __construct() {
        $this->zona = new ArrayCollection();
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
     * @return superheroe
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
     * @return superheroe
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
     * Set habilidades
     *
     * @param string $habilidades
     * @return superheroe
     */
    public function setHabilidades($habilidades)
    {
        $this->habilidades = $habilidades;

        return $this;
    }

    /**
     * Get habilidades
     *
     * @return string 
     */
    public function getHabilidades()
    {
        return $this->habilidades;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return superheroe
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return superheroe
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set tipo
     *
     * @param \uni\bundle\superhBundle\Entity\tipos $tipo
     * @return superheroe
     */
    public function setTipo(\uni\bundle\superhBundle\Entity\tipos $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \uni\bundle\superhBundle\Entity\tipos 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Add zona
     *
     * @param \uni\bundle\superhBundle\Entity\zonas $zona
     * @return superheroe
     */
    public function addZona(\uni\bundle\superhBundle\Entity\zonas $zona)
    {
        $this->zona[] = $zona;

        return $this;
    }

    /**
     * Remove zona
     *
     * @param \uni\bundle\superhBundle\Entity\zonas $zona
     */
    public function removeZona(\uni\bundle\superhBundle\Entity\zonas $zona)
    {
        $this->zona->removeElement($zona);
    }

    /**
     * Get zona
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getZona()
    {
        return $this->zona;
    }
}
