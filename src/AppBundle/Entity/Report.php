<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ReportRepository")
 */
class Report
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
     * @var integer
     *
     * @ORM\Column(name="at", type="integer")
     */
    private $at;

    /**
     * @var integer
     *
     * @ORM\Column(name="av", type="integer")
     */
    private $av;

    /**
     * @var string
     *
     * @ORM\Column(name="AgentEmail", type="string", length=255)
     */
    private $agentEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="AgentPassword", type="string", length=255)
     */
    private $agentPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="AttackerIP", type="string", length=50)
     */
    private $attackerIP;

    /**
     * @var integer
     *
     * @ORM\Column(name="SrcPort", type="integer")
     */
    private $srcPort;

    /**
     * @var string
     *
     * @ORM\Column(name="ProtocolID", type="string", length=255)
     */
    private $protocolID;

    /**
     * @var integer
     *
     * @ORM\Column(name="DestPort", type="integer")
     */
    private $destPort;

    /**
     * @var integer
     *
     * @ORM\Column(name="AttackCount", type="integer")
     */
    private $attackCount;

    /**
     * @var string
     *
     * @ORM\Column(name="VictimIP", type="string", length=50)
     */
    private $victimIP;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="AttackDateTime", type="datetime")
     */
    private $attackDateTime;


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
     * Set at
     *
     * @param integer $at
     * @return Report
     */
    public function setAt($at)
    {
        $this->at = $at;

        return $this;
    }

    /**
     * Get at
     *
     * @return integer 
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * Set av
     *
     * @param integer $av
     * @return Report
     */
    public function setAv($av)
    {
        $this->av = $av;

        return $this;
    }

    /**
     * Get av
     *
     * @return integer 
     */
    public function getAv()
    {
        return $this->av;
    }

    /**
     * Set agentEmail
     *
     * @param string $agentEmail
     * @return Report
     */
    public function setAgentEmail($agentEmail)
    {
        $this->agentEmail = $agentEmail;

        return $this;
    }

    /**
     * Get agentEmail
     *
     * @return string 
     */
    public function getAgentEmail()
    {
        return $this->agentEmail;
    }

    /**
     * Set agentPassword
     *
     * @param string $agentPassword
     * @return Report
     */
    public function setAgentPassword($agentPassword)
    {
        $this->agentPassword = $agentPassword;

        return $this;
    }

    /**
     * Get agentPassword
     *
     * @return string 
     */
    public function getAgentPassword()
    {
        return $this->agentPassword;
    }

    /**
     * Set attackerIP
     *
     * @param string $attackerIP
     * @return Report
     */
    public function setAttackerIP($attackerIP)
    {
        $this->attackerIP = $attackerIP;

        return $this;
    }

    /**
     * Get attackerIP
     *
     * @return string 
     */
    public function getAttackerIP()
    {
        return $this->attackerIP;
    }

    /**
     * Set srcPort
     *
     * @param integer $srcPort
     * @return Report
     */
    public function setSrcPort($srcPort)
    {
        $this->srcPort = $srcPort;

        return $this;
    }

    /**
     * Get srcPort
     *
     * @return integer 
     */
    public function getSrcPort()
    {
        return $this->srcPort;
    }

    /**
     * Set protocolID
     *
     * @param string $protocolID
     * @return Report
     */
    public function setProtocolID($protocolID)
    {
        $this->protocolID = $protocolID;

        return $this;
    }

    /**
     * Get protocolID
     *
     * @return string 
     */
    public function getProtocolID()
    {
        return $this->protocolID;
    }

    /**
     * Set destPort
     *
     * @param integer $destPort
     * @return Report
     */
    public function setDestPort($destPort)
    {
        $this->destPort = $destPort;

        return $this;
    }

    /**
     * Get destPort
     *
     * @return integer 
     */
    public function getDestPort()
    {
        return $this->destPort;
    }

    /**
     * Set attackCount
     *
     * @param integer $attackCount
     * @return Report
     */
    public function setAttackCount($attackCount)
    {
        $this->attackCount = $attackCount;

        return $this;
    }

    /**
     * Get attackCount
     *
     * @return integer 
     */
    public function getAttackCount()
    {
        return $this->attackCount;
    }

    /**
     * Set victimIP
     *
     * @param string $victimIP
     * @return Report
     */
    public function setVictimIP($victimIP)
    {
        $this->victimIP = $victimIP;

        return $this;
    }

    /**
     * Get victimIP
     *
     * @return string 
     */
    public function getVictimIP()
    {
        return $this->victimIP;
    }

    /**
     * Set attackDateTime
     *
     * @param \DateTime $attackDateTime
     * @return Report
     */
    public function setAttackDateTime($attackDateTime)
    {
        $this->attackDateTime = $attackDateTime;

        return $this;
    }

    /**
     * Get attackDateTime
     *
     * @return \DateTime 
     */
    public function getAttackDateTime()
    {
        return $this->attackDateTime;
    }
}
