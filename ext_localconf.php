<?php

declare(strict_types=1);

use Plan2net\SingleSite\Site\SiteFinder;

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Site\SiteFinder::class] = [
    'className' => SiteFinder::class
];
