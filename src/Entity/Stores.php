<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StoresRepository")
 */
class Stores
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=255)
     */
    private $store_name;

    /**
     * @ORM\Column(type="text", length=65535, nullable=true)
     */
    private $store_value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStoreName(): ?string
    {
        return $this->store_name;
    }

    public function setStoreName(string $store_name): self
    {
        $this->store_name = $store_name;

        return $this;
    }

    public function getStoreValue(): ?string
    {
        return $this->store_value;
    }

    public function setStoreValue(string $store_value): self
    {
        $this->store_value = $store_value;

        return $this;
    }
}
