<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuariosRepository")
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreUsuario", type="string", length=255)
     */
    private $nombreUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidosUsuario", type="string", length=255)
     */
    private $apellidosUsuario;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     *
     * @return Usuarios
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set apellidosUsuario
     *
     * @param string $apellidosUsuario
     *
     * @return Usuarios
     */
    public function setApellidosUsuario($apellidosUsuario)
    {
        $this->apellidosUsuario = $apellidosUsuario;

        return $this;
    }

    /**
     * Get apellidosUsuario
     *
     * @return string
     */
    public function getApellidosUsuario()
    {
        return $this->apellidosUsuario;
    }
}

