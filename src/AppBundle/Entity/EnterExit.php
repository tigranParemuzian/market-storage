<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * EnterExit
 *
 * @ORM\Table(name="enter_exit")
 * @ORM\Entity
 */
class EnterExit
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
     * @ORM\Column(name="count", type="integer")
     */
    private $count;

    /**
     * @var boolean
     *
     * @ORM\Column(name="destinationStatus", type="boolean")
     */
    private $destinationStatus;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product", inversedBy="transfer")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    protected $product;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Store", inversedBy="transfer")
     * @ORM\JoinColumn(name="store_id", referencedColumnName="id")
     */
    protected $store;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company")
     * @ORM\JoinColumn(name="destination_id", referencedColumnName="id")
     */
    private $destination;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Market")
     * @ORM\JoinColumn(name="market_id", referencedColumnName="id")
     */
    private $market;
    
    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

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
     * Set count
     *
     * @param integer $count
     * @return EnterExit
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set destinationStatus
     *
     * @param boolean $destinationStatus
     * @return EnterExit
     */
    public function setDestinationStatus($destinationStatus)
    {
        $this->destinationStatus = $destinationStatus;

        return $this;
    }

    /**
     * Get destinationStatus
     *
     * @return boolean 
     */
    public function getDestinationStatus()
    {
        return $this->destinationStatus;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return EnterExit
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return EnterExit
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set destination
     *
     * @param \AppBundle\Entity\Company $destination
     * @return EnterExit
     */
    public function setDestination(\AppBundle\Entity\Company $destination = null)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return \AppBundle\Entity\Company 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set market
     *
     * @param \AppBundle\Entity\Market $market
     * @return EnterExit
     */
    public function setMarket(\AppBundle\Entity\Market $market = null)
    {
        $this->market = $market;

        return $this;
    }

    /**
     * Get market
     *
     * @return \AppBundle\Entity\Market 
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     * @return EnterExit
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set store
     *
     * @param \AppBundle\Entity\Store $store
     * @return EnterExit
     */
    public function setStore(\AppBundle\Entity\Store $store = null)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * Get store
     *
     * @return \AppBundle\Entity\Store 
     */
    public function getStore()
    {
        return $this->store;
    }
}
