<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImagesRepository::class)
 */
class Images
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
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=Posts::class, inversedBy="images")
     */
    private $posts;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="images")
     */
    private $categories;

    /**
     * @ORM\ManyToOne(targetEntity=Slider::class, inversedBy="image_desktop")
     */
    private $slider_desktop;

    /**
     * @ORM\ManyToOne(targetEntity=Slider::class, inversedBy="image_mobile")
     */
    private $image_mobile;

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

    public function getPosts(): ?Posts
    {
        return $this->posts;
    }

    public function setPosts(?Posts $posts): self
    {
        $this->posts = $posts;

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getSliderDesktop(): ?Slider
    {
        return $this->slider_desktop;
    }

    public function setSliderDesktop(?Slider $slider_desktop): self
    {
        $this->slider_desktop = $slider_desktop;

        return $this;
    }

    public function getImageMobile(): ?Slider
    {
        return $this->image_mobile;
    }

    public function setImageMobile(?Slider $image_mobile): self
    {
        $this->image_mobile = $image_mobile;

        return $this;
    }
}
