<?php

namespace App\Entity;

use App\Repository\SectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SectionRepository::class)]
class Section
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\ManyToOne(inversedBy: 'sections')]
    private ?CV $cv = null;

    #[ORM\OneToMany(mappedBy: 'section', targetEntity: SectionField::class)]
    private Collection $sectionFields;

    public function __construct()
    {
        $this->sectionFields = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getCv(): ?CV
    {
        return $this->cv;
    }

    public function setCv(?CV $cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * @return Collection<int, SectionField>
     */
    public function getSectionFields(): Collection
    {
        return $this->sectionFields;
    }

    public function addSectionField(SectionField $sectionField): static
    {
        if (!$this->sectionFields->contains($sectionField)) {
            $this->sectionFields->add($sectionField);
            $sectionField->setSection($this);
        }

        return $this;
    }

    public function removeSectionField(SectionField $sectionField): static
    {
        if ($this->sectionFields->removeElement($sectionField)) {
            // set the owning side to null (unless already changed)
            if ($sectionField->getSection() === $this) {
                $sectionField->setSection(null);
            }
        }

        return $this;
    }
}
