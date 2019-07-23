<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameCs = '';

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
}
