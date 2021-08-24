<?php

namespace App\Entity;

use App\Repository\ContinentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContinentRepository::class)
 */
class Continent
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
     * @ORM\ManyToMany(targetEntity=Post::class, mappedBy="continent")
     */
    private $posts;

    /**
     * @ORM\OneToMany(targetEntity=Country::class, mappedBy="continent", orphanRemoval=true)
     */
    private $countries;

    /**
     * @ORM\OneToMany(targetEntity=ForumSubject::class, mappedBy="continents")
     */
    private $forumSubjects;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
        $this->countries = new ArrayCollection();
        $this->forumSubjects = new ArrayCollection();
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
            $post->addContinent($this);
        }

        return $this;
    }

    public function removePost(Post $post): self
    {
        if ($this->posts->removeElement($post)) {
            $post->removeContinent($this);
        }

        return $this;
    }

    /**
     * @return Collection|Country[]
     */
    public function getCountries(): Collection
    {
        return $this->countries;
    }

    public function addCountry(Country $country): self
    {
        if (!$this->countries->contains($country)) {
            $this->countries[] = $country;
            $country->setContinent($this);
        }

        return $this;
    }

    public function removeCountry(Country $country): self
    {
        if ($this->countries->removeElement($country)) {
            // set the owning side to null (unless already changed)
            if ($country->getContinent() === $this) {
                $country->setContinent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ForumSubject[]
     */
    public function getForumSubjects(): Collection
    {
        return $this->forumSubjects;
    }

    public function addForumSubject(ForumSubject $forumSubject): self
    {
        if (!$this->forumSubjects->contains($forumSubject)) {
            $this->forumSubjects[] = $forumSubject;
            $forumSubject->setContinents($this);
        }

        return $this;
    }

    public function removeForumSubject(ForumSubject $forumSubject): self
    {
        if ($this->forumSubjects->removeElement($forumSubject)) {
            // set the owning side to null (unless already changed)
            if ($forumSubject->getContinents() === $this) {
                $forumSubject->setContinents(null);
            }
        }

        return $this;
    }
}
