<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (CS)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

class Territory extends AbstractEntity
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
