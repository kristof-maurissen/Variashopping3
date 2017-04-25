<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\ElasticaBundle\Configuration\Search;
/**
 * shops1
 *
 * @ORM\Table(name="shops1")
 * @Search(repositoryClass="AppBundle\Repository\shops1Repository")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\shops1Repository")
 */
class shops1
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="shopname", type="string", length=255)
     */
    private $shopname;

    /**
     * @var string
     *
     * @ORM\Column(name="cat", type="string", length=255)
     */
    private $cat;

    /**
     * @var int
     *
     * @ORM\Column(name="Quot", type="integer")
     */
    private $quot;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=5000)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="affurl", type="string", length=255)
     */
    private $affurl;

    /**
     * @var string
     *
     * @ORM\Column(name="promo1", type="string", length=500)
     */
    private $promo1;

    /**
     * @var string
     *
     * @ORM\Column(name="promo2", type="string", length=500)
     */
    private $promo2;

    /**
     * @var string
     *
     * @ORM\Column(name="promo3", type="string", length=500)
     */
    private $promo3;

    /**
     * @var string
     *
     * @ORM\Column(name="promo4", type="string", length=500)
     */
    private $promo4;

    /**
     * @var string
     *
     * @ORM\Column(name="promo5", type="string", length=500)
     */
    private $promo5;

    /**
     * @var string
     *
     * @ORM\Column(name="ads", type="string", length=255)
     */
    private $ads;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set shopname
     *
     * @param string $shopname
     *
     * @return shops1
     */
    public function setShopname($shopname)
    {
        $this->shopname = $shopname;

        return $this;
    }

    /**
     * Get shopname
     *
     * @return string
     */
    public function getShopname()
    {
        return $this->shopname;
    }

    /**
     * Set cat
     *
     * @param string $cat
     *
     * @return shops1
     */
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return string
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set quot
     *
     * @param integer $quot
     *
     * @return shops1
     */
    public function setQuot($quot)
    {
        $this->quot = $quot;

        return $this;
    }

    /**
     * Get quot
     *
     * @return int
     */
    public function getQuot()
    {
        return $this->quot;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return shops1
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return shops1
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return shops1
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return shops1
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set affurl
     *
     * @param string $affurl
     *
     * @return shops1
     */
    public function setAffurl($affurl)
    {
        $this->affurl = $affurl;

        return $this;
    }

    /**
     * Get affurl
     *
     * @return string
     */
    public function getAffurl()
    {
        return $this->affurl;
    }

    /**
     * Set promo1
     *
     * @param string $promo1
     *
     * @return shops1
     */
    public function setPromo1($promo1)
    {
        $this->promo1 = $promo1;

        return $this;
    }

    /**
     * Get promo1
     *
     * @return string
     */
    public function getPromo1()
    {
        return $this->promo1;
    }

    /**
     * Set promo2
     *
     * @param string $promo2
     *
     * @return shops1
     */
    public function setPromo2($promo2)
    {
        $this->promo2 = $promo2;

        return $this;
    }

    /**
     * Get promo2
     *
     * @return string
     */
    public function getPromo2()
    {
        return $this->promo2;
    }

    /**
     * Set promo3
     *
     * @param string $promo3
     *
     * @return shops1
     */
    public function setPromo3($promo3)
    {
        $this->promo3 = $promo3;

        return $this;
    }

    /**
     * Get promo3
     *
     * @return string
     */
    public function getPromo3()
    {
        return $this->promo3;
    }

    /**
     * Set promo4
     *
     * @param string $promo4
     *
     * @return shops1
     */
    public function setPromo4($promo4)
    {
        $this->promo4 = $promo4;

        return $this;
    }

    /**
     * Get promo4
     *
     * @return string
     */
    public function getPromo4()
    {
        return $this->promo4;
    }

    /**
     * Set promo5
     *
     * @param string $promo5
     *
     * @return shops1
     */
    public function setPromo5($promo5)
    {
        $this->promo5 = $promo5;

        return $this;
    }

    /**
     * Get promo5
     *
     * @return string
     */
    public function getPromo5()
    {
        return $this->promo5;
    }

    /**
     * Set ads
     *
     * @param string $ads
     *
     * @return shops1
     */
    public function setAds($ads)
    {
        $this->ads = $ads;

        return $this;
    }

    /**
     * Get ads
     *
     * @return string
     */
    public function getAds()
    {
        return $this->ads;
    }
}

