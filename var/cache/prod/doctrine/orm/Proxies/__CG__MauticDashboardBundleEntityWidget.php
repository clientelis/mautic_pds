<?php

namespace Proxies\__CG__\Mautic\DashboardBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Widget extends \Mautic\DashboardBundle\Entity\Widget implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'id', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'name', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'width', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'height', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'ordering', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'type', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'params', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'template', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'errorMessage', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'cached', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'loadTime', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'cacheTimeout', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'templateData', 'changes', 'new', 'deletedId', 'pastChanges'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'id', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'name', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'width', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'height', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'ordering', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'type', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'params', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'template', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'errorMessage', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'cached', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'loadTime', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'cacheTimeout', '' . "\0" . 'Mautic\\DashboardBundle\\Entity\\Widget' . "\0" . 'templateData', 'changes', 'new', 'deletedId', 'pastChanges'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Widget $proxy) {
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
    public function __clone()
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
    public function setWidth($width)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', [$width]);

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', []);

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$height]);

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getCacheTimeout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCacheTimeout', []);

        return parent::getCacheTimeout();
    }

    /**
     * {@inheritDoc}
     */
    public function setCacheTimeout($cacheTimeout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCacheTimeout', [$cacheTimeout]);

        return parent::setCacheTimeout($cacheTimeout);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdering($ordering)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdering', [$ordering]);

        return parent::setOrdering($ordering);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdering()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdering', []);

        return parent::getOrdering();
    }

    /**
     * {@inheritDoc}
     */
    public function getParams()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParams', []);

        return parent::getParams();
    }

    /**
     * {@inheritDoc}
     */
    public function setParams(array $params)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParams', [$params]);

        return parent::setParams($params);
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplate($template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplate', [$template]);

        return parent::setTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplate', []);

        return parent::getTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplateData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplateData', []);

        return parent::getTemplateData();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplateData(array $templateData)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplateData', [$templateData]);

        return parent::setTemplateData($templateData);
    }

    /**
     * {@inheritDoc}
     */
    public function setErrorMessage($errorMessage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setErrorMessage', [$errorMessage]);

        return parent::setErrorMessage($errorMessage);
    }

    /**
     * {@inheritDoc}
     */
    public function getErrorMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getErrorMessage', []);

        return parent::getErrorMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCached($cached)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCached', [$cached]);

        return parent::setCached($cached);
    }

    /**
     * {@inheritDoc}
     */
    public function isCached()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCached', []);

        return parent::isCached();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoadTime($loadTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoadTime', [$loadTime]);

        return parent::setLoadTime($loadTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoadTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoadTime', []);

        return parent::getLoadTime();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished($checkPublishStatus = true, $checkCategoryStatus = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', [$checkPublishStatus, $checkCategoryStatus]);

        return parent::isPublished($checkPublishStatus, $checkCategoryStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
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
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$dateModified]);

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', [$checkedOut]);

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', []);

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
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
    public function setModifiedBy($modifiedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', [$modifiedBy]);

        return parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', []);

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutBy($checkedOutBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutBy', [$checkedOutBy]);

        return parent::setCheckedOutBy($checkedOutBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutBy', []);

        return parent::getCheckedOutBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishStatus', []);

        return parent::getPublishStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function setNew(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNew', []);

        parent::setNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutByUser', []);

        return parent::getCheckedOutByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByUser', []);

        return parent::getCreatedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedByUser', []);

        return parent::getModifiedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByUser($createdByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByUser', [$createdByUser]);

        return parent::setCreatedByUser($createdByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedByUser($modifiedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedByUser', [$modifiedByUser]);

        return parent::setModifiedByUser($modifiedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutByUser($checkedOutByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutByUser', [$checkedOutByUser]);

        return parent::setCheckedOutByUser($checkedOutByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges($includePast = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', [$includePast]);

        return parent::getChanges($includePast);
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', []);

        parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges(array $changes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', [$changes]);

        parent::setChanges($changes);
    }

}
