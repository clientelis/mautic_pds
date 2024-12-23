<?php

namespace Proxies\__CG__\Mautic\FormBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Submission extends \Mautic\FormBundle\Entity\Submission implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'id', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'form', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'lead', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'trackingId', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'dateSubmitted', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'referer', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'page', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'results'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'id', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'form', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'lead', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'trackingId', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'dateSubmitted', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'referer', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'page', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Submission' . "\0" . 'results'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Submission $proxy) {
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
    public function setDateSubmitted($dateSubmitted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSubmitted', [$dateSubmitted]);

        return parent::setDateSubmitted($dateSubmitted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSubmitted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSubmitted', []);

        return parent::getDateSubmitted();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferer($referer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferer', [$referer]);

        return parent::setReferer($referer);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferer', []);

        return parent::getReferer();
    }

    /**
     * {@inheritDoc}
     */
    public function setForm(\Mautic\FormBundle\Entity\Form $form)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setForm', [$form]);

        return parent::setForm($form);
    }

    /**
     * {@inheritDoc}
     */
    public function getForm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForm', []);

        return parent::getForm();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpAddress(\Mautic\CoreBundle\Entity\IpAddress $ipAddress = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpAddress', [$ipAddress]);

        return parent::setIpAddress($ipAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpAddress', []);

        return parent::getIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function getResults()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResults', []);

        return parent::getResults();
    }

    /**
     * {@inheritDoc}
     */
    public function setResults($results)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResults', [$results]);

        return parent::setResults($results);
    }

    /**
     * {@inheritDoc}
     */
    public function setPage(\Mautic\PageBundle\Entity\Page $page = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPage', [$page]);

        return parent::setPage($page);
    }

    /**
     * {@inheritDoc}
     */
    public function getPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPage', []);

        return parent::getPage();
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
    public function setLead(\Mautic\LeadBundle\Entity\Lead $lead = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', [$lead]);

        return parent::setLead($lead);
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
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldByAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldByAlias', [$alias]);

        return parent::getFieldByAlias($alias);
    }

}
