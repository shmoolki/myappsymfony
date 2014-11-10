<?php

namespace Proxies\__CG__\FrxIntranet\FrxintranetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Admin extends \FrxIntranet\FrxintranetBundle\Entity\Admin implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'id', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminNbheurechange', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminTauxhorairemin', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminTauxhorairemax', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminTauxdevise', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminSonnerie');
        }

        return array('__isInitialized__', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'id', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminNbheurechange', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminTauxhorairemin', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminTauxhorairemax', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminTauxdevise', '' . "\0" . 'FrxIntranet\\FrxintranetBundle\\Entity\\Admin' . "\0" . 'adminSonnerie');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Admin $proxy) {
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
    public function setAdminNbheurechange($adminNbheurechange)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminNbheurechange', array($adminNbheurechange));

        return parent::setAdminNbheurechange($adminNbheurechange);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminNbheurechange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminNbheurechange', array());

        return parent::getAdminNbheurechange();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminTauxhorairemin($adminTauxhorairemin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminTauxhorairemin', array($adminTauxhorairemin));

        return parent::setAdminTauxhorairemin($adminTauxhorairemin);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminTauxhorairemin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminTauxhorairemin', array());

        return parent::getAdminTauxhorairemin();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminTauxhorairemax($adminTauxhorairemax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminTauxhorairemax', array($adminTauxhorairemax));

        return parent::setAdminTauxhorairemax($adminTauxhorairemax);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminTauxhorairemax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminTauxhorairemax', array());

        return parent::getAdminTauxhorairemax();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminTauxdevise($adminTauxdevise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminTauxdevise', array($adminTauxdevise));

        return parent::setAdminTauxdevise($adminTauxdevise);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminTauxdevise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminTauxdevise', array());

        return parent::getAdminTauxdevise();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminSonnerie($adminSonnerie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminSonnerie', array($adminSonnerie));

        return parent::setAdminSonnerie($adminSonnerie);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminSonnerie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminSonnerie', array());

        return parent::getAdminSonnerie();
    }

}
