<?php

namespace Proxies\__CG__\FrxIntranet\FrxintranetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Retrait extends \FrxIntranet\FrxintranetBundle\Entity\Retrait implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Retrait' . "\0" . 'id', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Retrait' . "\0" . 'retraitMontant', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Retrait' . "\0" . 'retraitPourcentage', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Retrait' . "\0" . 'retraitDate', 'retraitClient', 'retraitPaye', 'retraitUtil');
        }

        return array('__isInitialized__', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Retrait' . "\0" . 'id', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Retrait' . "\0" . 'retraitMontant', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Retrait' . "\0" . 'retraitPourcentage', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Retrait' . "\0" . 'retraitDate', 'retraitClient', 'retraitPaye', 'retraitUtil');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Retrait $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
     * @static
     */
    public function __getLazyProperties()
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetraitMontant($retraitMontant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetraitMontant', array($retraitMontant));

        return parent::setRetraitMontant($retraitMontant);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetraitMontant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetraitMontant', array());

        return parent::getRetraitMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetraitPourcentage($retraitPourcentage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetraitPourcentage', array($retraitPourcentage));

        return parent::setRetraitPourcentage($retraitPourcentage);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetraitPourcentage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetraitPourcentage', array());

        return parent::getRetraitPourcentage();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetraitDate($retraitDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetraitDate', array($retraitDate));

        return parent::setRetraitDate($retraitDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetraitDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetraitDate', array());

        return parent::getRetraitDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetraitClient(\FrxIntranet\FrxintranetBundle\Entity\Client $retraitClient = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetraitClient', array($retraitClient));

        return parent::setRetraitClient($retraitClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetraitClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetraitClient', array());

        return parent::getRetraitClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetraitPaye(\FrxIntranet\FrxintranetBundle\Entity\Paye $retraitPaye = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetraitPaye', array($retraitPaye));

        return parent::setRetraitPaye($retraitPaye);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetraitPaye()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetraitPaye', array());

        return parent::getRetraitPaye();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetraitUtil(\FrxIntranet\FrxintranetBundle\Entity\Util $retraitUtil = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetraitUtil', array($retraitUtil));

        return parent::setRetraitUtil($retraitUtil);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetraitUtil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetraitUtil', array());

        return parent::getRetraitUtil();
    }

}
