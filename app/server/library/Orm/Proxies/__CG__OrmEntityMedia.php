<?php

namespace Orm\Proxies\__CG__\Orm\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Media extends \Orm\Entity\Media implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'id', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'websiteid', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'dateUploaded', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'name', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'filename', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'extension', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'size', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'lastmod', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'file', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'type', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'mimetype', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'albumid', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'iconUrl', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'url', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'lastupdate');
        }

        return array('__isInitialized__', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'id', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'websiteid', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'dateUploaded', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'name', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'filename', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'extension', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'size', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'lastmod', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'file', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'type', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'mimetype', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'albumid', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'iconUrl', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'url', '' . "\0" . 'Orm\\Entity\\Media' . "\0" . 'lastupdate');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Media $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebsiteid($websiteid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsiteid', array($websiteid));

        return parent::setWebsiteid($websiteid);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebsiteid()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getWebsiteid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsiteid', array());

        return parent::getWebsiteid();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateUploaded($dateUploaded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUploaded', array($dateUploaded));

        return parent::setDateUploaded($dateUploaded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateUploaded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUploaded', array());

        return parent::getDateUploaded();
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
    public function setFilename($filename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', array($filename));

        return parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', array());

        return parent::getFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtension($extension)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtension', array($extension));

        return parent::setExtension($extension);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtension', array());

        return parent::getExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', array($size));

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', array());

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastmod($lastmod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastmod', array($lastmod));

        return parent::setLastmod($lastmod);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastmod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastmod', array());

        return parent::getLastmod();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile($file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setMimetype($mimetype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMimetype', array($mimetype));

        return parent::setMimetype($mimetype);
    }

    /**
     * {@inheritDoc}
     */
    public function getMimetype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMimetype', array());

        return parent::getMimetype();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlbumid($albumid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlbumid', array($albumid));

        return parent::setAlbumid($albumid);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlbumid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlbumid', array());

        return parent::getAlbumid();
    }

    /**
     * {@inheritDoc}
     */
    public function setIconUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIconUrl', array($url));

        return parent::setIconUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getIconUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIconUrl', array());

        return parent::getIconUrl();
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
    public function getLastupdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastupdate', array());

        return parent::getLastupdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastupdate($lastupdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastupdate', array($lastupdate));

        return parent::setLastupdate($lastupdate);
    }

    /**
     * {@inheritDoc}
     */
    public function setNewGeneratedId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewGeneratedId', array());

        return parent::setNewGeneratedId();
    }

    /**
     * {@inheritDoc}
     */
    public function toCmsData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toCmsData', array());

        return parent::toCmsData();
    }

}
