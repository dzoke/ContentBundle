<?php

namespace Opifer\ContentBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * HtmlBlock
 *
 * @ORM\Entity
 */
class HtmlBlock extends Block
{
    /**
     * @var string
     *
     * @Gedmo\Versioned
     * @ORM\Column(type="text", nullable=true)
     */
    protected $value;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getBlockType()
    {
        return 'html';
    }
}