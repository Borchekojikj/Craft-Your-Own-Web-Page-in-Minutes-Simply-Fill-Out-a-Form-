<?php


class Website
{
    private $urlCoverImage;
    private $mainTitle;
    private $subtitle;
    private $personDescription;
    private $phone;
    private $location;
    private $urlImage1;
    private $descriptionImage1;
    private $urlImage2;
    private $descriptionImage2;
    private $urlImage3;
    private $descriptionImage3;
    private $descriptionProdServ;
    private $urlLinkedin;
    private $urlFacebook;
    private $urlTwitter;
    private $urlGoogle;
    private $type;
    private $dbObj;

    public function __construct(array $postData, $dbObj)
    {
        $this->dbObj = $dbObj;

        $this->setUrlCoverImage($postData['urlCoverImage'] ?? '');
        $this->setMainTitle($postData['mainTitle'] ?? '');
        $this->setSubtitle($postData['subtitle'] ?? '');
        $this->setPersonDescription($postData['personDescription'] ?? '');
        $this->setPhone($postData['phone'] ?? '');
        $this->setLocation($postData['location'] ?? '');
        $this->setUrlImage1($postData['urlImage1'] ?? '');
        $this->setDescriptionImage1($postData['descriptionImage1'] ?? '');
        $this->setUrlImage2($postData['urlImage2'] ?? '');
        $this->setDescriptionImage2($postData['descriptionImage2'] ?? '');
        $this->setUrlImage3($postData['urlImage3'] ?? '');
        $this->setDescriptionImage3($postData['descriptionImage3'] ?? '');
        $this->setDescriptionProdServ($postData['descriptionProdServ'] ?? '');
        $this->setUrlLinkedin($postData['urlLinkedin'] ?? '');
        $this->setUrlFacebook($postData['urlFacebook'] ?? '');
        $this->setUrlTwitter($postData['urlTwitter'] ?? '');
        $this->setUrlGoogle($postData['urlGoogle'] ?? '');
        $this->setType($postData['type'] ?? '');
    }

    /**
     * Get the value of urlCoverImage
     */
    public function getUrlCoverImage()
    {
        return $this->urlCoverImage;
    }

    /**
     * Set the value of urlCoverImage
     *
     * @return  self
     */
    public function setUrlCoverImage($urlCoverImage)
    {
        $this->urlCoverImage = $urlCoverImage;

        return $this;
    }

    /**
     * Get the value of mainTitle
     */
    public function getMainTitle()
    {
        return $this->mainTitle;
    }

    /**
     * Set the value of mainTitle
     *
     * @return  self
     */
    public function setMainTitle($mainTitle)
    {
        $this->mainTitle = $mainTitle;

        return $this;
    }

    /**
     * Get the value of subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @return  self
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get the value of personDescription
     */
    public function getPersonDescription()
    {
        return $this->personDescription;
    }

    /**
     * Set the value of personDescription
     *
     * @return  self
     */
    public function setPersonDescription($personDescription)
    {
        $this->personDescription = $personDescription;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     *
     * @return  self
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of urlImage1
     */
    public function getUrlImage1()
    {
        return $this->urlImage1;
    }

    /**
     * Set the value of urlImage1
     *
     * @return  self
     */
    public function setUrlImage1($urlImage1)
    {
        $this->urlImage1 = $urlImage1;

        return $this;
    }

    /**
     * Get the value of descriptionImage1
     */
    public function getDescriptionImage1()
    {
        return $this->descriptionImage1;
    }

    /**
     * Set the value of descriptionImage1
     *
     * @return  self
     */
    public function setDescriptionImage1($descriptionImage1)
    {
        $this->descriptionImage1 = $descriptionImage1;

        return $this;
    }

    /**
     * Get the value of urlImage2
     */
    public function getUrlImage2()
    {
        return $this->urlImage2;
    }

    /**
     * Set the value of urlImage2
     *
     * @return  self
     */
    public function setUrlImage2($urlImage2)
    {
        $this->urlImage2 = $urlImage2;

        return $this;
    }

    /**
     * Get the value of descriptionImage2
     */
    public function getDescriptionImage2()
    {
        return $this->descriptionImage2;
    }

    /**
     * Set the value of descriptionImage2
     *
     * @return  self
     */
    public function setDescriptionImage2($descriptionImage2)
    {
        $this->descriptionImage2 = $descriptionImage2;

        return $this;
    }

    /**
     * Get the value of urlImage3
     */
    public function getUrlImage3()
    {
        return $this->urlImage3;
    }

    /**
     * Set the value of urlImage3
     *
     * @return  self
     */
    public function setUrlImage3($urlImage3)
    {
        $this->urlImage3 = $urlImage3;

        return $this;
    }

    /**
     * Get the value of descriptionImage3
     */
    public function getDescriptionImage3()
    {
        return $this->descriptionImage3;
    }

    /**
     * Set the value of descriptionImage3
     *
     * @return  self
     */
    public function setDescriptionImage3($descriptionImage3)
    {
        $this->descriptionImage3 = $descriptionImage3;

        return $this;
    }

    /**
     * Get the value of descriptionProdServ
     */
    public function getDescriptionProdServ()
    {
        return $this->descriptionProdServ;
    }

    /**
     * Set the value of descriptionProdServ
     *
     * @return  self
     */
    public function setDescriptionProdServ($descriptionProdServ)
    {
        $this->descriptionProdServ = $descriptionProdServ;

        return $this;
    }

    /**
     * Get the value of urlLinkedin
     */
    public function getUrlLinkedin()
    {
        return $this->urlLinkedin;
    }

    /**
     * Set the value of urlLinkedin
     *
     * @return  self
     */
    public function setUrlLinkedin($urlLinkedin)
    {
        $this->urlLinkedin = $urlLinkedin;

        return $this;
    }

    /**
     * Get the value of urlFacebook
     */
    public function getUrlFacebook()
    {
        return $this->urlFacebook;
    }

    /**
     * Set the value of urlFacebook
     *
     * @return  self
     */
    public function setUrlFacebook($urlFacebook)
    {
        $this->urlFacebook = $urlFacebook;

        return $this;
    }

    /**
     * Get the value of urlTwitter
     */
    public function getUrlTwitter()
    {
        return $this->urlTwitter;
    }

    /**
     * Set the value of urlTwitter
     *
     * @return  self
     */
    public function setUrlTwitter($urlTwitter)
    {
        $this->urlTwitter = $urlTwitter;

        return $this;
    }

    /**
     * Get the value of urlGoogle
     */
    public function getUrlGoogle()
    {
        return $this->urlGoogle;
    }

    /**
     * Set the value of urlGoogle
     *
     * @return  self
     */
    public function setUrlGoogle($urlGoogle)
    {
        $this->urlGoogle = $urlGoogle;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of dbObj
     */
    public function getDbObj()
    {
        return $this->dbObj;
    }

    /**
     * Set the value of dbObj
     *
     * @return  self
     */
    public function setDbObj($dbObj)
    {
        $this->dbObj = $dbObj;

        return $this;
    }

    public function createWebsite()
    {
        $dbObj = $this->getDbObj();

        $sql = "INSERT INTO websitedata (
    urlCoverImage, mainTitle, subtitle, personDescription, phone, location, 
    urlImage1, descriptionImage1, urlImage2, descriptionImage2, urlImage3, 
    descriptionImage3, descriptionProdServ, urlLinkedin, urlFacebook, urlTwitter, urlGoogle, type

    ) VALUES 
    (   :urlCoverImage, :mainTitle, :subtitle, :personDescription, :phone, :location, 
    :urlImage1, :descriptionImage1, :urlImage2, :descriptionImage2, :urlImage3, 
    :descriptionImage3, :descriptionProdServ, :urlLinkedin, :urlFacebook, :urlTwitter, :urlGoogle, :type)";


        $data = [
            'urlCoverImage' => $this->getUrlCoverImage(),
            'mainTitle' => $this->getMainTitle(),
            'subtitle' => $this->getSubtitle(),
            'personDescription' => $this->getPersonDescription(),
            'phone' => $this->getPhone(),
            'location' => $this->getLocation(),
            'urlImage1' => $this->getUrlImage1(),
            'descriptionImage1' => $this->getDescriptionImage1(),
            'urlImage2' => $this->getUrlImage2(),
            'descriptionImage2' => $this->getDescriptionImage2(),
            'urlImage3' => $this->getUrlImage3(),
            'descriptionImage3' => $this->getDescriptionImage3(),
            'descriptionProdServ' => $this->getDescriptionProdServ(),
            'urlLinkedin' => $this->getUrlLinkedin(),
            'urlFacebook' => $this->getUrlFacebook(),
            'urlTwitter' => $this->getUrlTwitter(),
            'urlGoogle' => $this->getUrlGoogle(),
            'type' => $this->getType()
        ];


        $statement = $dbObj->prepare($sql);
        $statement->execute($data);
    }
}
