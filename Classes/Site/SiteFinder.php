<?php

declare(strict_types=1);

namespace Plan2net\SingleSite\Site;

use TYPO3\CMS\Core\Exception\SiteNotFoundException;
use TYPO3\CMS\Core\Site\Entity\Site;

/**
 * Class SiteFinder
 *
 * @author Wolfgang Klinger <wk@plan2.net>
 */
class SiteFinder extends \TYPO3\CMS\Core\Site\SiteFinder
{
    /**
     * Return a Site instance if there is only one site configured,
     * otherwise search for a site by going up the root line
     *
     * @throws SiteNotFoundException
     */
    public function getSiteByPageId(int $pageId, array $rootLine = null, string $mountPointParameter = null): Site
    {
        if (1 === count($this->sites)) {
            return current($this->sites);
        }

        return parent::getSiteByPageId($pageId, $rootLine, $mountPointParameter);
    }
}
