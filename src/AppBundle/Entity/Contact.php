<?php

namespace AppBundle\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use libphonenumber\PhoneNumber;

/**
 * Class Contact
 * @package AppBundle\Entity
 * @ORM\Table(name="contact")
 * @ORM\Entity()
 */
class Contact
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $firstName
     *
     * @ORM\Column(type="string", length=255)
     *
     */
    private $firstName;

    /**
     * @var string $lastName
     *
     * @ORM\Column(type="string", length=255)
     *
     */
    private $lastName;

    /**
     * @ORM\Column(type="date", nullable=true)
     *
     */
    private $birthday;

    /**
     * @var string $email
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $email;

    /**
     * @var null|string $street
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $street;

    /**
     * @var string $zip
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $zip;

    /**
     * @var string $city
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $city;

    /**
     * @var string $country
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $country;

    /**
     * @var PhoneNumber $phoneNumber
     *
     * @ORM\Column(type="phone_number")
     */
    private $phoneNumber;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Set first name
     *
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get last name
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Set last name
     *
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName($lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getBirthday(): ?DateTimeInterface
    {
        return $this->birthday;
    }
    /**
     * @param DateTimeInterface $birthday
     */
    public function setBirthday(?DateTimeInterface $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return $this
     */
    public function setStreet($street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return $this
     */
    public function setZip($zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get PhoneNumber
     *
     * @return PhoneNumber
     */
    public function getPhoneNumber(): ?PhoneNumber
    {
        return $this->phoneNumber;
    }

    /**
     * Set PhoneNumber
     *
     * @param PhoneNumber $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}