<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 */
class Country
{
  
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * 
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $money;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vaccine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $events;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publishedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToMany(targetEntity=Post::class, mappedBy="country")
     */
    private $posts;

    /**
     * @ORM\ManyToOne(targetEntity=Continent::class, inversedBy="countries")
     * @ORM\JoinColumn(nullable=false)
     */
    private $continent;

    /**
     * @ORM\ManyToMany(targetEntity=Stuff::class, inversedBy="countries")
     */
    private $stuff;

    /**
     * @ORM\ManyToMany(targetEntity=Weather::class, mappedBy="country")
     */
    private $weather;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
        $this->stuff = new ArrayCollection();
        $this->weather = new ArrayCollection();
    }
    public function __toString()
    {
        return $this->name;
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

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getMoney(): ?string
    {
        return $this->money;
    }

    public function setMoney(string $money): self
    {
        $this->money = $money;

        return $this;
    }

    public function getVisa(): ?string
    {
        return $this->visa;
    }

    public function setVisa(string $visa): self
    {
        $this->visa = $visa;

        return $this;
    }

    public function getVaccine(): ?string
    {
        return $this->vaccine;
    }

    public function setVaccine(string $vaccine): self
    {
        $this->vaccine = $vaccine;

        return $this;
    }

    public function getEvents(): ?string
    {
        return $this->events;
    }

    public function setEvents(?string $events): self
    {
        $this->events = $events;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(\DateTimeInterface $publishedAt): self
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection|Post[]
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Post $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts[] = $post;
            $post->addCountry($this);
        }

        return $this;
    }

    public function removePost(Post $post): self
    {
        if ($this->posts->removeElement($post)) {
            $post->removeCountry($this);
        }

        return $this;
    }

    public function getContinent(): ?Continent
    {
        return $this->continent;
    }

    public function setContinent(?Continent $continent): self
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * @return Collection|Stuff[]
     */
    public function getStuff(): Collection
    {
        return $this->stuff;
    }

    public function addStuff(Stuff $stuff): self
    {
        if (!$this->stuff->contains($stuff)) {
            $this->stuff[] = $stuff;
        }

        return $this;
    }

    public function removeStuff(Stuff $stuff): self
    {
        $this->stuff->removeElement($stuff);

        return $this;
    }

    /**
     * @return Collection|Weather[]
     */
    public function getWeather(): Collection
    {
        return $this->weather;
    }

    public function addWeather(Weather $weather): self
    {
        if (!$this->weather->contains($weather)) {
            $this->weather[] = $weather;
            $weather->addCountry($this);
        }

        return $this;
    }

    public function removeWeather(Weather $weather): self
    {
        if ($this->weather->removeElement($weather)) {
            $weather->removeCountry($this);
        }

        return $this;
    }

}
