<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class HomeSlider extends \App\Entity\HomeSlider implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'id', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'title', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'description', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'buttonMessage', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'buttonURL', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'image', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'isDisplayed'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'id', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'title', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'description', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'buttonMessage', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'buttonURL', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'image', '' . "\0" . 'App\\Entity\\HomeSlider' . "\0" . 'isDisplayed'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (HomeSlider $proxy) {
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\HomeSlider
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\HomeSlider
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getButtonMessage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getButtonMessage', []);

        return parent::getButtonMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setButtonMessage(string $buttonMessage): \App\Entity\HomeSlider
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setButtonMessage', [$buttonMessage]);

        return parent::setButtonMessage($buttonMessage);
    }

    /**
     * {@inheritDoc}
     */
    public function getButtonURL(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getButtonURL', []);

        return parent::getButtonURL();
    }

    /**
     * {@inheritDoc}
     */
    public function setButtonURL(string $buttonURL): \App\Entity\HomeSlider
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setButtonURL', [$buttonURL]);

        return parent::setButtonURL($buttonURL);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): \App\Entity\HomeSlider
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDisplayed(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDisplayed', []);

        return parent::getIsDisplayed();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDisplayed(?bool $isDisplayed): \App\Entity\HomeSlider
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDisplayed', [$isDisplayed]);

        return parent::setIsDisplayed($isDisplayed);
    }

}
