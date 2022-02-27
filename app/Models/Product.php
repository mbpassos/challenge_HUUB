<?php

namespace App\Models;

class Product
{
    private $id;
    private $variants;
    private $name;
    private $family;
    private $subfamily;
    private $type;
    private $fabric;
    private $currency_iso3code;

    public function __construct(array $array = array())
    {
        $this->id = $array['id'];
        $this->description = $array['description'];
        $this->variants = $array['variants'];
        $this->name = $array['name'];
        $this->season = $array['season'];
        $this->supplier = $array['supplier'];
        $this->family = $array['family'];
        $this->subfamily = $array['subfamily'];
        $this->type = $array['type'];
        $this->fabric = $array['fabric'];
        $this->currency_iso3code = $array['currency_iso3code'];
    }

    public function getId() : int
    {
        return $this -> id;
    }

    public function getVariants() : array
    {
        return $this -> variants;
    }

    public function getName(): string
    {
        return $this-> name;
    }

    public function getSeason(): string
    {
        return $this-> season;
    }

    public function getSupplier(): string
    {
        return $this-> supplier;
    }

    public function getDescription(): string
    {
        return $this-> description;
    }

    public function getFamily(): string
    {
        return $this-> family;
    }

    public function getSubFamily(): string
    {
        return $this-> subfamily;
    }

    public function getType(): string
    {
        return $this-> type;
    }

    public function getFabric(): string
    {
        return $this-> fabric;
    }

    public function getCurrency(): string
    {
        return $this-> currency_iso3code;
    }

    public function attributesToArray(){
        return [
            "id" => $this->id,
            "name" => $this->name,
            "variants" => $this->variants,
            "family" => $this->family,
            "subfamily" => $this->subfamily,
            "type" => $this->type,
            "fabric" => $this->fabric,
            "currency_iso3code" => $this->currency_iso3code
        ];
    }
}
