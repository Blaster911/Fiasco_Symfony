<?php

namespace App\Entity;

use App\Repository\CouponsTypesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CouponsTypesRepository::class)
 */
class CouponsTypes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=CouponEnt::class, mappedBy="coupons_types", orphanRemoval=true)
     */
    private $couponEnts;

    public function __construct()
    {
        $this->couponEnts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, CouponEnt>
     */
    public function getCouponEnts(): Collection
    {
        return $this->couponEnts;
    }

    public function addCouponEnt(CouponEnt $couponEnt): self
    {
        if (!$this->couponEnts->contains($couponEnt)) {
            $this->couponEnts[] = $couponEnt;
            $couponEnt->setCouponsTypes($this);
        }

        return $this;
    }

    public function removeCouponEnt(CouponEnt $couponEnt): self
    {
        if ($this->couponEnts->removeElement($couponEnt)) {
            // set the owning side to null (unless already changed)
            if ($couponEnt->getCouponsTypes() === $this) {
                $couponEnt->setCouponsTypes(null);
            }
        }

        return $this;
    }
}
