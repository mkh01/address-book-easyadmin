<?php

namespace AppBundle\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use libphonenumber\PhoneNumber;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Exception;
use DateTime;

/**
 * Class Contact
 * @package AppBundle\Entity
 * @ORM\Table(name="contact")
 * @ORM\Entity()
 * @Vich\Uploadable
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
     * @var DateTimeInterface $birthday
     *
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
     * @var string $street
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
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image;

    /**
     * @Assert\File(
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png"},
     *     mimeTypesMessage = "Wrong file type. allowed (jpg,gif,png)"
     * )
     *
     * @Vich\UploadableField(mapping="contact_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    private $updatedAt;

    public function __construct()
    {
        $this->updatedAt = new DateTime();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName()
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
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get last name
     *
     * @return string
     */
    public function getLastName()
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
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param DateTimeInterface $birthday
     */
    public function setBirthday(DateTimeInterface $birthday = null)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getEmail()
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
    public function getStreet()
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
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
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
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
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
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get PhoneNumber
     *
     * @return PhoneNumber
     */
    public function getPhoneNumber()
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
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @param File $imageFile
     * @throws Exception
     */
    public function setImageFile(File $imageFile = null)
    {
        $this->imageFile = $imageFile;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param $image
     * @return string
     */
    public function setImage($image = '')
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}