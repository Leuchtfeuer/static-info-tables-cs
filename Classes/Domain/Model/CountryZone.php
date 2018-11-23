<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class CountryZone extends AbstractEntity
{
    protected $nameCs = '';

    public function getNameCs(): string
    {
        if ($this->nameCs === '') {
            return $this->getNameLocalized();
        }

        return $this->nameCs;
    }

    public function setNameCs(string $nameCs)
    {
        $this->nameCs = $nameCs;
    }
}
