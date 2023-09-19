<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity]
class NonResourceTestEntity
{
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column]
  #[Groups(['read', 'write'])]
  private ?int $id = null;
  #[ORM\Column(length: 255, nullable: true)]
  #[Groups(['read', 'write'])]
  private ?string $nullableString = null;

  #[ORM\Column(nullable: true)]
  #[Groups(['read', 'write'])]
  private ?int $nullableInt = null;

  #[ORM\ManyToOne(inversedBy: 'tests')]
  private ?BagOfTests $bagOfTests = null;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getNullableString(): ?string
  {
    return $this->nullableString;
  }

  public function setNullableString(?string $nullableString): static
  {
    $this->nullableString = $nullableString;

    return $this;
  }

  public function getNullableInt(): ?int
  {
    return $this->nullableInt;
  }

  public function setNullableInt(?int $nullableInt): static
  {
    $this->nullableInt = $nullableInt;

    return $this;
  }

  public function getBagOfTests(): ?BagOfTests
  {
    return $this->bagOfTests;
  }

  public function setBagOfTests(?BagOfTests $bagOfTests): static
  {
    $this->bagOfTests = $bagOfTests;

    return $this;
  }
}