<?php
/**
 * @author      Guillaume-Rossignol <rossignolgui@free.fr>
 * @license     Apache 2.0
 */

namespace AppBundle\CompteRendu;

use Symfony\Component\Validator\Constraints as Assert;

class CompteRendu
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $titre;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $contenu;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $presents;

    /**
     * @var \DateTime
     * @Assert\Type("\DateTime")
     */
    private $dateReunion;

    public function __construct()
    {
        $this->contenu = $this->presents = $this->titre = '';
        $this->dateReunion = new \DateTime();
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getContenu(): string
    {
        return $this->contenu;
    }

    public function getPresents(): string
    {
        return $this->presents;
    }

    public function getDateReunion(): \DateTime
    {
        return $this->dateReunion;
    }
}
