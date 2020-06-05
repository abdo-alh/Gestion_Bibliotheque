<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 * @Vich\Uploadable
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
    * @Assert\File(maxSize = "10M" )
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="books")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;





    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commentaire", mappedBy="book", orphanRemoval=true)
     */
    private $commentaires;


       /**
     * @Vich\UploadableField(mapping="book_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Auteur", inversedBy="books")
     * @ORM\JoinColumn(nullable=false)
     */
    private $auteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pdf;

       /**
     * @Vich\UploadableField(mapping="book_pdf", fileNameProperty="pdf")
     * @var File
     */
    private $pdfFile;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\BookLike", mappedBy="book")
     */
    private $likes;

    public function __construct()
    {
        $this->auteurs = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->likes = new ArrayCollection();
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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage( ?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }



    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setBook($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->contains($commentaire)) {
            $this->commentaires->removeElement($commentaire);
            // set the owning side to null (unless already changed)
            if ($commentaire->getBook() === $this) {
                $commentaire->setBook(null);
            }
        }

        return $this;
    }

         public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;


    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function getAuteur(): ?Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(?Auteur $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

       public function __toString()
    {
        return $this->name;
        
    }

       public function getPdf(): ?string
       {
           return $this->pdf;
       }

       public function setPdf(?string $pdf): self
       {
           $this->pdf = $pdf;

           return $this;
       }


  public function setPdfFile(File $pdf = null)
    {
        $this->pdfFile = $pdf;


    }

    public function getPdfFile()
    {
        return $this->pdfFile;
    }

    /*/**
     * @return Collection|BookLike[]
     */
    /*public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(BookLike $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
            $user->setBook($this);
        }

        return $this;
    }

    public function removeUser(BookLike $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getBook() === $this) {
                $user->setBook(null);
            }
        }

        return $this;
    }*/

    
        /**
     * @param User $user
     * @return bool
     */
    public function isLikeByUser(User $user): bool
    {
        foreach ($this->likes as $like) {
            if ($like->getUser() === $user) return true;
        }
        return false;
    }


        /**
     * @return Collection|BookLike[]
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(BookLike $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
            $like->setBook($this);
        }

        return $this;
    }

    public function removeLike(BookLike $like): self
    {
        if ($this->likes->contains($like)) {
            $this->likes->removeElement($like);
            // set the owning side to null (unless already changed)
            if ($like->getBook() === $this) {
                $like->setBook(null);
            }
        }

        return $this;
    }
}
