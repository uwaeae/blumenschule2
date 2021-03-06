<?php

namespace Acme\BSDataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * inventory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\BSDataBundle\Entity\inventoryRepository")
 */
class inventory
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
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="inventories")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $product;

    /**
     * @ORM\ManyToOne(targetEntity="Plant", inversedBy="inventories")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $plant;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return inventory
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return inventory
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
     * Set product
     *
     * @param \Acme\BSDataBundle\Entity\Product $product
     * @return inventory
     */
    public function setProduct(\Acme\BSDataBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Acme\BSDataBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set plant
     *
     * @param \Acme\BSDataBundle\Entity\Plant $plant
     * @return inventory
     */
    public function setPlant(\Acme\BSDataBundle\Entity\Plant $plant = null)
    {
        $this->plant = $plant;

        return $this;
    }

    /**
     * Get plant
     *
     * @return \Acme\BSDataBundle\Entity\Plant 
     */
    public function getPlant()
    {
        return $this->plant;
    }
}
