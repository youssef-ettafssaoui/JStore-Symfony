<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CartDetails extends \App\Entity\CartDetails implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'id', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'productName', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'productPrice', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'quantity', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'subTotalHT', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'taxe', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'subTotalTTC', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'Carts'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'id', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'productName', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'productPrice', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'quantity', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'subTotalHT', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'taxe', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'subTotalTTC', '' . "\0" . 'App\\Entity\\CartDetails' . "\0" . 'Carts'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CartDetails $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductName', []);

        return parent::getProductName();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductName(string $productName): \App\Entity\CartDetails
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductName', [$productName]);

        return parent::setProductName($productName);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductPrice(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductPrice', []);

        return parent::getProductPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductPrice(float $productPrice): \App\Entity\CartDetails
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductPrice', [$productPrice]);

        return parent::setProductPrice($productPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity(int $quantity): \App\Entity\CartDetails
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', [$quantity]);

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubTotalHT(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubTotalHT', []);

        return parent::getSubTotalHT();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubTotalHT(float $subTotalHT): \App\Entity\CartDetails
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubTotalHT', [$subTotalHT]);

        return parent::setSubTotalHT($subTotalHT);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxe(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxe', []);

        return parent::getTaxe();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxe(float $taxe): \App\Entity\CartDetails
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxe', [$taxe]);

        return parent::setTaxe($taxe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubTotalTTC(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubTotalTTC', []);

        return parent::getSubTotalTTC();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubTotalTTC(float $subTotalTTC): \App\Entity\CartDetails
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubTotalTTC', [$subTotalTTC]);

        return parent::setSubTotalTTC($subTotalTTC);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarts(): ?\App\Entity\Cart
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarts', []);

        return parent::getCarts();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarts(?\App\Entity\Cart $Carts): \App\Entity\CartDetails
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarts', [$Carts]);

        return parent::setCarts($Carts);
    }

}
