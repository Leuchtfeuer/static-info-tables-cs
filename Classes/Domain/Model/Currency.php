<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    protected $nameCs = '';

    protected $subdivisionNameCs = '';

    public function getNameCs(): string
    {
        return $this->nameCs;
    }

    public function setNameCs(string $nameCs)
    {
        $this->nameCs = $nameCs;
    }

    public function getSubdivisionNameCs(): string
    {
        return $this->subdivisionNameCs;
    }

    public function setSubdivisionNameCs(string $subdivisionNameCs)
    {
        $this->subdivisionNameCs = $subdivisionNameCs;
    }
}
