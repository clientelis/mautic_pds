<?php

namespace Proxies\__CG__\Mautic\LeadBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LeadField extends \Mautic\LeadBundle\Entity\LeadField implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'id', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'label', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'alias', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'type', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'group', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'defaultValue', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isRequired', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isFixed', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isVisible', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isShortVisible', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isListable', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isPubliclyUpdatable', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isUniqueIdentifer', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isUniqueIdentifier', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'charLengthLimit', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'order', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'object', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'properties', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isIndex', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'columnIsNotCreated', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'originalIsPublishedValue', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'customFieldObject', 'changes', 'new', 'deletedId', 'pastChanges'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'id', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'label', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'alias', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'type', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'group', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'defaultValue', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isRequired', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isFixed', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isVisible', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isShortVisible', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isListable', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isPubliclyUpdatable', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isUniqueIdentifer', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isUniqueIdentifier', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'charLengthLimit', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'order', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'object', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'properties', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'isIndex', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'columnIsNotCreated', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'originalIsPublishedValue', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadField' . "\0" . 'customFieldObject', 'changes', 'new', 'deletedId', 'pastChanges'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LeadField $proxy) {
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
    public function setId(int $id = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
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
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', [$label]);

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', []);

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$label]);

        return parent::setName($label);
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
    public function setDefaultValue($defaultValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultValue', [$defaultValue]);

        return parent::setDefaultValue($defaultValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultValue', []);

        return parent::getDefaultValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRequired($isRequired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRequired', [$isRequired]);

        return parent::setIsRequired($isRequired);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRequired', []);

        return parent::getIsRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function isRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRequired', []);

        return parent::isRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFixed($isFixed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFixed', [$isFixed]);

        return parent::setIsFixed($isFixed);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFixed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFixed', []);

        return parent::getIsFixed();
    }

    /**
     * {@inheritDoc}
     */
    public function isFixed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFixed', []);

        return parent::isFixed();
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
    public function setOrder($order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$order]);

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObject', []);

        return parent::getObject();
    }

    /**
     * {@inheritDoc}
     */
    public function setCharLengthLimit(?int $charLengthLimit): \Mautic\LeadBundle\Entity\LeadField
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCharLengthLimit', [$charLengthLimit]);

        return parent::setCharLengthLimit($charLengthLimit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharLengthLimit(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCharLengthLimit', []);

        return parent::getCharLengthLimit();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomFieldObject(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomFieldObject', []);

        return parent::getCustomFieldObject();
    }

    /**
     * {@inheritDoc}
     */
    public function setObject($object)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObject', [$object]);

        return parent::setObject($object);
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
    public function setIsVisible($isVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsVisible', [$isVisible]);

        return parent::setIsVisible($isVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsVisible', []);

        return parent::getIsVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function isVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisible', []);

        return parent::isVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsShortVisible($isShortVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsShortVisible', [$isShortVisible]);

        return parent::setIsShortVisible($isShortVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsShortVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsShortVisible', []);

        return parent::getIsShortVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function isShortVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isShortVisible', []);

        return parent::isShortVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsUniqueIdentifer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsUniqueIdentifer', []);

        return parent::getIsUniqueIdentifer();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsUniqueIdentifer($isUniqueIdentifer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsUniqueIdentifer', [$isUniqueIdentifer]);

        return parent::setIsUniqueIdentifer($isUniqueIdentifer);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsUniqueIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsUniqueIdentifier', []);

        return parent::getIsUniqueIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsUniqueIdentifier($isUniqueIdentifier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsUniqueIdentifier', [$isUniqueIdentifier]);

        return parent::setIsUniqueIdentifier($isUniqueIdentifier);
    }

    /**
     * {@inheritDoc}
     */
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', [$alias]);

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', []);

        return parent::getAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsListable($isListable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsListable', [$isListable]);

        return parent::setIsListable($isListable);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsListable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsListable', []);

        return parent::getIsListable();
    }

    /**
     * {@inheritDoc}
     */
    public function isListable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isListable', []);

        return parent::isListable();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroup', []);

        return parent::getGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroup($group): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroup', [$group]);

        parent::setGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPubliclyUpdatable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPubliclyUpdatable', []);

        return parent::getIsPubliclyUpdatable();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPubliclyUpdatable($isPubliclyUpdatable): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPubliclyUpdatable', [$isPubliclyUpdatable]);

        parent::setIsPubliclyUpdatable($isPubliclyUpdatable);
    }

    /**
     * {@inheritDoc}
     */
    public function identifierWorkaround(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'identifierWorkaround', []);

        parent::identifierWorkaround();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getColumnIsNotCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColumnIsNotCreated', []);

        return parent::getColumnIsNotCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setColumnIsNotCreated(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColumnIsNotCreated', []);

        parent::setColumnIsNotCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setColumnWasCreated(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColumnWasCreated', []);

        parent::setColumnWasCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function disablePublishChange(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'disablePublishChange', []);

        return parent::disablePublishChange();
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalIsPublishedValue(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalIsPublishedValue', []);

        return parent::getOriginalIsPublishedValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getCacheNamespacesToDelete(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCacheNamespacesToDelete', []);

        return parent::getCacheNamespacesToDelete();
    }

    /**
     * {@inheritDoc}
     */
    public function isIsIndex(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isIsIndex', []);

        return parent::isIsIndex();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsIndex(bool $indexable): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsIndex', [$indexable]);

        parent::setIsIndex($indexable);
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
