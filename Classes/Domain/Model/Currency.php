<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameCs = '';
    /**
     * @var string
     */
    protected $subdivisionNameCs = '';

    /**
     * @return string
     */
    public function getNameCs(): string
    {
        return $this->nameCs;
    }

    /**
     * @param string $nameCs
     */
    public function setNameCs(string $nameCs)
    {
        $this->nameCs = $nameCs;
    }

    /**
     * @return string
     */
    public function getSubdivisionNameCs(): string
    {
        return $this->subdivisionNameCs;
    }

    /**
     * @param string $subdivisionNameCs
     */
    public function setSubdivisionNameCs(string $subdivisionNameCs)
    {
        $this->subdivisionNameCs = $subdivisionNameCs;
    }
}
