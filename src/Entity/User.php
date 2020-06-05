<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @Vich\Uploadable
 * @UniqueEntity(
 * fields={"email"},message="L'email que vous avez saisie et deja utiliser")
 */
class User implements UserInterface, \Serializable
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
    private $username;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="text", length=255)
     * @Assert\Length(min="8",minMessage="Votre password doit etre au minimum 8 caractere")
     */
    private $password;

    /**
     * @ORM\Column(type="integer")
     */
    private $phone;


    /**
     * @Assert\File(maxSize = "5000000" )
     * @ORM\Column(type="string", length=255)
     */
    private $image;

   /**
     * @Assert\EqualTo(propertyPath="password",message="Vous n'avez pas taper le meme mot de passe")
     */
    public $confirm_password;

       /**
     * @Vich\UploadableField(mapping="user_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;


    /**
     * @ORM\Column(type="array")
     */
    private $roles = [];

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commentaire", mappedBy="user", orphanRemoval=true)
     */
    private $commentaires;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\BookLike", mappedBy="user")
     */
    private $Likes;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->Likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }


    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

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

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

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
            $commentaire->setUser($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->contains($commentaire)) {
            $this->commentaires->removeElement($commentaire);
            // set the owning side to null (unless already changed)
            if ($commentaire->getUser() === $this) {
                $commentaire->setUser(null);
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


       public function __toString()
    {
        return $this->email;
        
    }
       public function eraseCredentials()  {}
    public function getSalt() {
         return null;
    }


/**
 * @see \Serializable::serialize()
 */
public function serialize(){
    return serialize(array(
    $this->id,
    $this->username,
     $this->email,
    $this->password,
    $this->phone,
    $this->image,
));
}

/**
 * @see \Serializable::unserialize()
 */
public function unserialize($serialized){
    list(
   $this->id,
    $this->username,
     $this->email,
    $this->password,
    $this->phone,
    $this->image
) = unserialize($serialized);
}

/**
 * @return Collection|BookLike[]
 */
public function getLikes(): Collection
{
    return $this->Likes;
}

public function addLike(BookLike $like): self
{
    if (!$this->Likes->contains($like)) {
        $this->Likes[] = $like;
        $like->setUser($this);
    }

    return $this;
}

public function removeLike(BookLike $like): self
{
    if ($this->Likes->contains($like)) {
        $this->Likes->removeElement($like);
        // set the owning side to null (unless already changed)
        if ($like->getUser() === $this) {
            $like->setUser(null);
        }
    }

    return $this;
}
}
