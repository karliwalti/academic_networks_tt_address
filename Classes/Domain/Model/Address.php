<?php

namespace karliwalti\AcademicNetworksTtAddress\Domain\Model;

class Address extends \FriendsOfTYPO3\TtAddress\Domain\Model\Address
{

    /** @var string */
    protected $orcid = '';
    protected $scholar = '';
    protected $researcherid = '';
    protected $researchgate = '';

    /**
     * @return string
     */
    public function getOrcid()
    {
        return $this->orcid;
    }

    /**
     * @param string $quote
     */
    public function setOrcid($orcid)
    {
        $this->orcid = $orcid;
    }


    /**
     * @return string
     */
    public function getScholar()
    {
        return $this->scholar;
    }

    /**
     * @param string $quote
     */
    public function setScholar($scholar)
    {
        $this->scholar = $scholar;
    }



    /**
     * @return string
     */
    public function getResearcherid()
    {
        return $this->researcherid;
    }

    /**
     * @param string $quote
     */
    public function setResearcherid($researcherid)
    {
        $this->researcherid = $researcherid;
    }



    /**
     * @return string
     */
    public function getResearchgate()
    {
        return $this->researchgate;
    }

    /**
     * @param string $quote
     */
    public function setResearchgate($researchgate)
    {
        $this->researchgate = $researchgate;
    }


}
