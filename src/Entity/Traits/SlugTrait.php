<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait SlugTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function getSlug(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setSlug(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
