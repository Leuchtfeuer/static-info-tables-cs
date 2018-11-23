<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    protected $nameCs = '';

    public function getNameCs(): string
    {
        return $this->nameCs;
    }

    public function setNameCs(string $nameCs)
    {
        $this->nameCs = $nameCs;
    }
}
