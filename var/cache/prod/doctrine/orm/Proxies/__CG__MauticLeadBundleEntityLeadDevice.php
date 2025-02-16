<?php

namespace Proxies\__CG__\Mautic\LeadBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LeadDevice extends \Mautic\LeadBundle\Entity\LeadDevice implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'id', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'lead', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'clientInfo', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'device', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceOsName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceOsShortName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceOsVersion', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceOsPlatform', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceBrand', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceModel', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'trackingId', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'dateAdded'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'id', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'lead', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'clientInfo', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'device', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceOsName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceOsShortName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceOsVersion', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceOsPlatform', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceBrand', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'deviceModel', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'trackingId', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadDevice' . "\0" . 'dateAdded'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LeadDevice $proxy) {
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
    public function getId(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getSignature(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignature', []);

        return parent::getSignature();
    }

    /**
     * {@inheritDoc}
     */
    public function getClientInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientInfo', []);

        return parent::getClientInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientInfo($clientInfo): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientInfo', [$clientInfo]);

        parent::setClientInfo($clientInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevice', []);

        return parent::getDevice();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevice($device): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevice', [$device]);

        parent::setDevice($device);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeviceBrand()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeviceBrand', []);

        return parent::getDeviceBrand();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeviceBrand($brand): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeviceBrand', [$brand]);

        parent::setDeviceBrand($brand);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeviceModel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeviceModel', []);

        return parent::getDeviceModel();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeviceModel($deviceModel): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeviceModel', [$deviceModel]);

        parent::setDeviceModel($deviceModel);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeviceOsName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeviceOsName', []);

        return parent::getDeviceOsName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeviceOsName($deviceOsName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeviceOsName', [$deviceOsName]);

        return parent::setDeviceOsName($deviceOsName);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeviceOsShortName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeviceOsShortName', []);

        return parent::getDeviceOsShortName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeviceOsShortName($deviceOsShortName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeviceOsShortName', [$deviceOsShortName]);

        return parent::setDeviceOsShortName($deviceOsShortName);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeviceOsVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeviceOsVersion', []);

        return parent::getDeviceOsVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeviceOsVersion($deviceOsVersion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeviceOsVersion', [$deviceOsVersion]);

        return parent::setDeviceOsVersion($deviceOsVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeviceOsPlatform()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeviceOsPlatform', []);

        return parent::getDeviceOsPlatform();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeviceOsPlatform($deviceOsPlatform)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeviceOsPlatform', [$deviceOsPlatform]);

        return parent::setDeviceOsPlatform($deviceOsPlatform);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeviceOs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeviceOs', []);

        return parent::getDeviceOs();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeviceOs($deviceOs): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeviceOs', [$deviceOs]);

        parent::setDeviceOs($deviceOs);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrackingId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackingId', []);

        return parent::getTrackingId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackingId($trackingId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackingId', [$trackingId]);

        return parent::setTrackingId($trackingId);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', []);

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead(\Mautic\LeadBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', [$lead]);

        return parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        parent::setDateAdded($dateAdded);
    }

}
