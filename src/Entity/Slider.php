<?php

namespace App\Entity;

use App\Repository\SliderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SliderRepository::class)
 */
class Slider
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="integer")
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity=Images::class, mappedBy="slider_desktop", orphanRemoval=true, cascade={"persist"})
     */
    private $image_desktop;

    /**
     * @ORM\OneToMany(targetEntity=Images::class, mappedBy="image_mobile", orphanRemoval=true, cascade={"persist"})
     */
    private $image_mobile;

    public function __construct()
    {
        $this->image_desktop = new ArrayCollection();
        $this->image_mobile = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return Collection|Images[]
     */
    public function getImageDesktop(): Collection
    {
        return $this->image_desktop;
    }

    public function addImageDesktop(Images $imageDesktop): self
    {
        if (!$this->image_desktop->contains($imageDesktop)) {
            $this->image_desktop[] = $imageDesktop;
            $imageDesktop->setSliderDesktop($this);
        }

        return $this;
    }

    public function removeImageDesktop(Images $imageDesktop): self
    {
        if ($this->image_desktop->removeElement($imageDesktop)) {
            // set the owning side to null (unless already changed)
            if ($imageDesktop->getSliderDesktop() === $this) {
                $imageDesktop->setSliderDesktop(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Images[]
     */
    public function getImageMobile(): Collection
    {
        return $this->image_mobile;
    }

    public function addImageMobile(Images $imageMobile): self
    {
        if (!$this->image_mobile->contains($imageMobile)) {
            $this->image_mobile[] = $imageMobile;
            $imageMobile->setImageMobile($this);
        }

        return $this;
    }

    public function removeImageMobile(Images $imageMobile): self
    {
        if ($this->image_mobile->removeElement($imageMobile)) {
            // set the owning side to null (unless already changed)
            if ($imageMobile->getImageMobile() === $this) {
                $imageMobile->setImageMobile(null);
            }
        }

        return $this;
    }

}
