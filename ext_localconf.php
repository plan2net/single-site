<?php

defined('TYPO3_MODE') or die ('Access denied.');

(static function () {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Site\SiteFinder::class] = array(
        'className' => \Plan2net\SingleSite\Site\SiteFinder::class
    );
})();
