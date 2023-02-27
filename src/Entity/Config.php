<?php

namespace App\Entity;

use App\Repository\ConfigRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConfigRepository::class)]
class Config
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $tax_rate = null;

    #[ORM\Column]
    private ?int $default_bonds_count = null;

    #[ORM\Column]
    private ?float $default_inflation_rate = null;

    #[ORM\Column]
    private ?float $default_reference_rate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $update_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaxRate(): ?int
    {
        return $this->tax_rate;
    }

    public function setTaxRate(int $tax_rate): self
    {
        $this->tax_rate = $tax_rate;

        return $this;
    }

    public function getDefaultBondsCount(): ?int
    {
        return $this->default_bonds_count;
    }

    public function setDefaultBondsCount(int $default_bonds_count): self
    {
        $this->default_bonds_count = $default_bonds_count;

        return $this;
    }

    public function getDefaultInflationRate(): ?float
    {
        return $this->default_inflation_rate;
    }

    public function setDefaultInflationRate(float $default_inflation_rate): self
    {
        $this->default_inflation_rate = $default_inflation_rate;

        return $this;
    }

    public function getDefaultReferenceRate(): ?float
    {
        return $this->default_reference_rate;
    }

    public function setDefaultReferenceRate(float $default_reference_rate): self
    {
        $this->default_reference_rate = $default_reference_rate;

        return $this;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->update_date;
    }

    public function setUpdateDate(\DateTimeInterface $update_date): self
    {
        $this->update_date = $update_date;

        return $this;
    }
}
