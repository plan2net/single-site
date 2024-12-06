<?php

declare(strict_types=1);

namespace Plan2net\SingleSite\Site;

use TYPO3\CMS\Core\Exception\SiteNotFoundException;
use TYPO3\CMS\Core\Site\Entity\Site;

readonly class SiteFinder extends \TYPO3\CMS\Core\Site\SiteFinder
{
    /**
     * Return a Site instance if there is only one Site configured,
     * otherwise search for a Site by going up the current page's root line (default behavior).
     *
     * @throws SiteNotFoundException
     */
    public function getSiteByPageId(int $pageId, array $rootLine = null, string $mountPointParameter = null): Site
    {
        $sites = $this->getAllSites();
        if (1 === count($sites)) {
            return current($sites);
        }

        return parent::getSiteByPageId($pageId, $rootLine, $mountPointParameter);
    }
}
