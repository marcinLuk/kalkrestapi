<?php

namespace App\Entity;

use App\Repository\BondRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BondRepository::class)]
class Bond
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 20)]
    private ?string $symbol = null;

    #[ORM\Column(length: 500)]
    private ?string $interest_desc = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?float $selling_price = null;

    #[ORM\Column]
    private ?int $swap_price = null;

    #[ORM\Column]
    private ?int $cycles = null;

    #[ORM\Column]
    private ?int $cycle_length = null;

    #[ORM\Column]
    private ?float $interest_first_period_rate = null;

    #[ORM\Column(length: 255)]
    private ?string $interest = null;

    #[ORM\Column]
    private ?float $margin = null;

    #[ORM\Column(length: 255)]
    private ?string $link = null;

    #[ORM\Column(length: 20)]
    private ?string $interest_paid_period = null;

    #[ORM\Column]
    private ?bool $capitalized = null;

    #[ORM\Column(length: 255)]
    private ?string $capitalization_period = null;

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

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getInterestDesc(): ?string
    {
        return $this->interest_desc;
    }

    public function setInterestDesc(string $interest_desc): self
    {
        $this->interest_desc = $interest_desc;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSellingPrice(): ?float
    {
        return $this->selling_price;
    }

    public function setSellingPrice(float $selling_price): self
    {
        $this->selling_price = $selling_price;

        return $this;
    }

    public function getSwapPrice(): ?int
    {
        return $this->swap_price;
    }

    public function setSwapPrice(int $swap_price): self
    {
        $this->swap_price = $swap_price;

        return $this;
    }

    public function getCycles(): ?int
    {
        return $this->cycles;
    }

    public function setCycles(int $cycles): self
    {
        $this->cycles = $cycles;

        return $this;
    }

    public function getCycleLength(): ?int
    {
        return $this->cycle_length;
    }

    public function setCycleLength(int $cycle_length): self
    {
        $this->cycle_length = $cycle_length;

        return $this;
    }

    public function getInterestFirstPeriodRate(): ?float
    {
        return $this->interest_first_period_rate;
    }

    public function setInterestFirstPeriodRate(float $interest_first_period_rate): self
    {
        $this->interest_first_period_rate = $interest_first_period_rate;

        return $this;
    }

    public function getInterest(): ?string
    {
        return $this->interest;
    }

    public function setInterest(string $interest): self
    {
        $this->interest = $interest;

        return $this;
    }

    public function getMargin(): ?float
    {
        return $this->margin;
    }

    public function setMargin(float $margin): self
    {
        $this->margin = $margin;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getInterestPaidPeriod(): ?string
    {
        return $this->interest_paid_period;
    }

    public function setInterestPaidPeriod(string $interest_paid_period): self
    {
        $this->interest_paid_period = $interest_paid_period;

        return $this;
    }

    public function isCapitalized(): ?bool
    {
        return $this->capitalized;
    }

    public function setCapitalized(bool $capitalized): self
    {
        $this->capitalized = $capitalized;

        return $this;
    }

    public function getCapitalizationPeriod(): ?string
    {
        return $this->capitalization_period;
    }

    public function setCapitalizationPeriod(string $capitalization_period): self
    {
        $this->capitalization_period = $capitalization_period;

        return $this;
    }
}
