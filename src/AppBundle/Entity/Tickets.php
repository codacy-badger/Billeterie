<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Books;

/**
 * Tickets
 *
 * @ORM\Table(name="bil_tickets")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketsRepository")
 */
class Tickets
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date")
     */
    private $birthDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="discount", type="boolean")
     */
    private $discount;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Books", inversedBy="tickets", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $books;

    /**
     * @var \DateTime
     * @ORM\Column(name="dateBook",type="date")
     */
    private $date;

    /**
     * @var type int
     */
    private $book_id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var int
     *
     * @ORM\Column(name="ticketprice", type="integer")
     */
    private $ticketprice;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Tickets
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $date
     *
     * @return Tickets
     */
    public function setBirthDate($date)
    {
        $this->birthDate = $date;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set discount
     *
     * @param boolean $discount
     *
     * @return Tickets
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return bool
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tickets
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tickets
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Tickets
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set books
     *
     * @param \AppBundle\Entity\Books $books
     *
     * @return Tickets
     */
    public function setBooks(\AppBundle\Entity\Books $books)
    {
        $this->books = $books;

        return $this;
    }

    /**
     * Get books
     *
     * @return \AppBundle\Entity\Books
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * Set amount
     *
     * @param integer $ticketprice
     *
     * @return Tickets
     */
    public function setTicketprice($ticketprice)
    {
        $this->ticketprice = $ticketprice;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getTicketprice()
    {
        return $this->ticketprice;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Tickets
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}
