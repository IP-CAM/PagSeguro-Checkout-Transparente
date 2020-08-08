<?php
declare(strict_types=1);

namespace ValdeirPsr\PagSeguro\Domains;

/**
 * Classe responsável pelo endereço de envio e entrega
 */
class Address
{
    private $street;
    private $number;
    private $district;
    private $city;
    private $state;
    private $country;
    private $postalcode;
    private $complement;
    
    /**
     * Define o nome da rua
     * 
     * @param string $value
     * 
     * @return self
     */
    public function setStreet(string $value): self
    {
        $this->street = $value;
        return $this;
    }

    /**
     * Retorna o nome da rua
     * 
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Define o número de endereço
     * 
     * @param string $value
     * 
     * @return self
     */
    public function setNumber(string $value): self
    {
        $this->number = $value;
        return $this;
    }

    /**
     * Retorna o número de endereço
     * 
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }


    /**
     * Define o bairro
     * 
     * @param string $value
     * 
     * @return self
     */
    public function setDistrict(string $value): self
    {
        $this->district = $value;
        return $this;
    }

    /**
     * Retorna o bairro
     * 
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * Define a cidade
     * 
     * @param string $value
     * 
     * @return self
     */
    public function setCity(string $value): self
    {
        $this->city = $value;
        return $this;
    }

    /**
     * Retorna a cidade informada
     * 
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Define o Estado
     * 
     * @param string $value
     * 
     * @return self
     */
    public function setState(string $value): self
    {
        $this->state = $value;
        return $this;
    }

    /**
     * Retorna o Estado
     * 
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Define o País
     * 
     * @param string $value
     * 
     * @return self
     */
    public function setCountry(string $value): self
    {
        $this->country = $value;
        return $this;
    }

    /**
     * Retorna o País
     * 
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }


    /**
     * Define o código postal (CEP)
     * 
     * @param stringi $value
     */
    public function setPostalcode(string $value): self
    {
        $this->postalcode = preg_replace('/\D/', '', $value);
        return $this;
    }

    /**
     * Retorna o CEP
     * 
     * @return string (Apenas o número)
     */
    public function getPostalcode(): string
    {
        return $this->postalcode;
    }

    /**
     * Define o complemento do endereço
     * 
     * @param string|null $value
     */
    public function setComplement(?string $value): self
    {
        $this->complement = $value;
        return $this;
    }

    /**
     * Retorna o complemento
     * 
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }
}
