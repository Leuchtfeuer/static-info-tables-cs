<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    protected $shortNameCs = '';

    public function getShortNameCs(): string
    {
        return $this->shortNameCs;
    }

    public function setShortNameCs(string $shortNameCs)
    {
        $this->shortNameCs = $shortNameCs;
    }
}
