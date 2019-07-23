<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameCs = '';

    /**
     * @return string
     */
    public function getShortNameCs(): string
    {
        return $this->shortNameCs;
    }

    /**
     * @param string $shortNameCs
     */
    public function setShortNameCs(string $shortNameCs)
    {
        $this->shortNameCs = $shortNameCs;
    }
}
