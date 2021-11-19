<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Livre extends \App\Entity\Livre implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'nbpages', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'datedition', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'nbexemplaire', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'isbn', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'editeur', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'auteurs', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'emprunteurs', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'image'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'nbpages', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'datedition', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'nbexemplaire', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'isbn', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'editeur', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'auteurs', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'emprunteurs', '' . "\0" . 'App\\Entity\\Livre' . "\0" . 'image'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Livre $proxy) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbpages(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbpages', []);

        return parent::getNbpages();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbpages(int $nbpages): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbpages', [$nbpages]);

        return parent::setNbpages($nbpages);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatedition(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatedition', []);

        return parent::getDatedition();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatedition(\DateTimeInterface $datedition): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatedition', [$datedition]);

        return parent::setDatedition($datedition);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbexemplaire(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbexemplaire', []);

        return parent::getNbexemplaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbexemplaire(int $nbexemplaire): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbexemplaire', [$nbexemplaire]);

        return parent::setNbexemplaire($nbexemplaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(float $prix): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsbn(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsbn', []);

        return parent::getIsbn();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsbn(string $isbn): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsbn', [$isbn]);

        return parent::setIsbn($isbn);
    }

    /**
     * {@inheritDoc}
     */
    public function getEditeur(): ?\App\Entity\Editeur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditeur', []);

        return parent::getEditeur();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditeur(?\App\Entity\Editeur $editeur): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditeur', [$editeur]);

        return parent::setEditeur($editeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie(): ?\App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(?\App\Entity\Categorie $categorie): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', [$categorie]);

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteurs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteurs', []);

        return parent::getAuteurs();
    }

    /**
     * {@inheritDoc}
     */
    public function addAuteur(\App\Entity\Auteur $auteur): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAuteur', [$auteur]);

        return parent::addAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAuteur(\App\Entity\Auteur $auteur): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAuteur', [$auteur]);

        return parent::removeAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmprunteurs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmprunteurs', []);

        return parent::getEmprunteurs();
    }

    /**
     * {@inheritDoc}
     */
    public function addEmprunteur(\App\Entity\Emprunteur $emprunteur): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmprunteur', [$emprunteur]);

        return parent::addEmprunteur($emprunteur);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmprunteur(\App\Entity\Emprunteur $emprunteur): \App\Entity\Livre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmprunteur', [$emprunteur]);

        return parent::removeEmprunteur($emprunteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

}
