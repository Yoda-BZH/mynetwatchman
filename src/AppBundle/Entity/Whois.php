<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Whois
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\WhoisRepository")
 */
class Whois
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text")
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="iprange", type="string", length=255)
     */
    private $iprange;

    /**
     * @var string
     *
     * @ORM\Column(name="netmask", type="string", length=255)
     */
    private $netmask;

    /**
     * @var string
     *
     * @ORM\Column(name="inetname", type="string", length=255)
     */
    private $inetname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="hit", type="integer")
     */
    private $hit;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return Whois
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set iprange
     *
     * @param string $iprange
     * @return Whois
     */
    public function setIprange($iprange)
    {
        $this->iprange = $iprange;

        return $this;
    }

    /**
     * Get iprange
     *
     * @return string 
     */
    public function getIprange()
    {
        return $this->iprange;
    }

    /**
     * Set netmask
     *
     * @param string $netmask
     * @return Whois
     */
    public function setNetmask($netmask)
    {
        $this->netmask = $netmask;

        return $this;
    }

    /**
     * Get netmask
     *
     * @return string 
     */
    public function getNetmask()
    {
        return $this->netmask;
    }

    /**
     * Set inetname
     *
     * @param string $inetname
     * @return Whois
     */
    public function setInetname($inetname)
    {
        $this->inetname = $inetname;

        return $this;
    }

    /**
     * Get inetname
     *
     * @return string 
     */
    public function getInetname()
    {
        return $this->inetname;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Whois
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
     * Set hit
     *
     * @param integer $hit
     * @return Whois
     */
    public function setHit($hit)
    {
        $this->hit = $hit;

        return $this;
    }

    /**
     * Get hit
     *
     * @return integer 
     */
    public function getHit()
    {
        return $this->hit;
    }
}
