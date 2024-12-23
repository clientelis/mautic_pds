<?php

namespace Proxies\__CG__\Mautic\IntegrationsBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ObjectMapping extends \Mautic\IntegrationsBundle\Entity\ObjectMapping implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'id', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'dateCreated', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'integration', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'internalObjectName', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'internalObjectId', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'integrationObjectName', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'integrationObjectId', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'lastSyncDate', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'internalStorage', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'isDeleted', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'integrationReferenceId'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'id', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'dateCreated', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'integration', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'internalObjectName', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'internalObjectId', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'integrationObjectName', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'integrationObjectId', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'lastSyncDate', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'internalStorage', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'isDeleted', '' . "\0" . 'Mautic\\IntegrationsBundle\\Entity\\ObjectMapping' . "\0" . 'integrationReferenceId'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ObjectMapping $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', []);

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getIntegration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntegration', []);

        return parent::getIntegration();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntegration($integration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntegration', [$integration]);

        return parent::setIntegration($integration);
    }

    /**
     * {@inheritDoc}
     */
    public function getInternalObjectName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInternalObjectName', []);

        return parent::getInternalObjectName();
    }

    /**
     * {@inheritDoc}
     */
    public function setInternalObjectName($internalObjectName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInternalObjectName', [$internalObjectName]);

        return parent::setInternalObjectName($internalObjectName);
    }

    /**
     * {@inheritDoc}
     */
    public function getInternalObjectId(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInternalObjectId', []);

        return parent::getInternalObjectId();
    }

    /**
     * {@inheritDoc}
     */
    public function setInternalObjectId($internalObjectId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInternalObjectId', [$internalObjectId]);

        return parent::setInternalObjectId($internalObjectId);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntegrationObjectName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntegrationObjectName', []);

        return parent::getIntegrationObjectName();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntegrationObjectName($integrationObjectName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntegrationObjectName', [$integrationObjectName]);

        return parent::setIntegrationObjectName($integrationObjectName);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntegrationObjectId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntegrationObjectId', []);

        return parent::getIntegrationObjectId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntegrationObjectId($integrationObjectId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntegrationObjectId', [$integrationObjectId]);

        return parent::setIntegrationObjectId($integrationObjectId);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastSyncDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastSyncDate', []);

        return parent::getLastSyncDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastSyncDate($lastSyncDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastSyncDate', [$lastSyncDate]);

        return parent::setLastSyncDate($lastSyncDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getInternalStorage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInternalStorage', []);

        return parent::getInternalStorage();
    }

    /**
     * {@inheritDoc}
     */
    public function setInternalStorage($internalStorage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInternalStorage', [$internalStorage]);

        return parent::setInternalStorage($internalStorage);
    }

    /**
     * {@inheritDoc}
     */
    public function appendToInternalStorage($key, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'appendToInternalStorage', [$key, $value]);

        return parent::appendToInternalStorage($key, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function isDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDeleted', []);

        return parent::isDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDeleted($isDeleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDeleted', [$isDeleted]);

        return parent::setIsDeleted($isDeleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntegrationReferenceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntegrationReferenceId', []);

        return parent::getIntegrationReferenceId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntegrationReferenceId($integrationReferenceId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntegrationReferenceId', [$integrationReferenceId]);

        return parent::setIntegrationReferenceId($integrationReferenceId);
    }

}
