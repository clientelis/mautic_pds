<?php

namespace Proxies\__CG__\Mautic\PointBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TriggerEvent extends \Mautic\PointBundle\Entity\TriggerEvent implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'id', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'name', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'description', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'type', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'order', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'properties', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'trigger', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'log', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'changes'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'id', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'name', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'description', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'type', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'order', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'properties', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'trigger', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'log', '' . "\0" . 'Mautic\\PointBundle\\Entity\\TriggerEvent' . "\0" . 'changes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TriggerEvent $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone(): void
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', []);

        return parent::getChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function setOrder($order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$order]);

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', []);

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setProperties($properties)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProperties', [$properties]);

        return parent::setProperties($properties);
    }

    /**
     * {@inheritDoc}
     */
    public function getProperties()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProperties', []);

        return parent::getProperties();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrigger(\Mautic\PointBundle\Entity\Trigger $trigger)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrigger', [$trigger]);

        return parent::setTrigger($trigger);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrigger()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrigger', []);

        return parent::getTrigger();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function convertToArray(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'convertToArray', []);

        return parent::convertToArray();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function addLog(\Mautic\PointBundle\Entity\LeadTriggerLog $log)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLog', [$log]);

        return parent::addLog($log);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLog(\Mautic\PointBundle\Entity\LeadTriggerLog $log): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLog', [$log]);

        parent::removeLog($log);
    }

    /**
     * {@inheritDoc}
     */
    public function getLog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLog', []);

        return parent::getLog();
    }

}
