<?php

namespace Proxies\__CG__\CollegeSearch\CollegeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CollegeList extends \CollegeSearch\CollegeBundle\Entity\CollegeList implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'id', 'comments', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'category', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'name', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'email', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'address', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'city', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'phone', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'url', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'photo', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'info', 'courses', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'fees');
        }

        return array('__isInitialized__', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'id', 'comments', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'category', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'name', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'email', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'address', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'city', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'phone', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'url', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'photo', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'info', 'courses', '' . "\0" . 'CollegeSearch\\CollegeBundle\\Entity\\CollegeList' . "\0" . 'fees');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CollegeList $proxy) {
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
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', array($address));

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', array());

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', array($url));

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', array());

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', array($photo));

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', array());

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFees($fees)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFees', array($fees));

        return parent::setFees($fees);
    }

    /**
     * {@inheritDoc}
     */
    public function getFees()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFees', array());

        return parent::getFees();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setInfo($info)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInfo', array($info));

        return parent::setInfo($info);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfo($length = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfo', array($length));

        return parent::getInfo($length);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function _toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_toString', array());

        return parent::_toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setCourses($courses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCourses', array($courses));

        return parent::setCourses($courses);
    }

    /**
     * {@inheritDoc}
     */
    public function getCourses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCourses', array());

        return parent::getCourses();
    }

    /**
     * {@inheritDoc}
     */
    public function getnewcourses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getnewcourses', array());

        return parent::getnewcourses();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\CollegeSearch\CollegeBundle\Entity\Comments $comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', array($comments));

        return parent::addComment($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\CollegeSearch\CollegeBundle\Entity\Comments $comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', array($comments));

        return parent::removeComment($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', array());

        return parent::getComments();
    }

}
