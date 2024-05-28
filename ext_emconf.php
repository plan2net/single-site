<?php

$EM_CONF['single_site'] = [
    'title' => 'Single site',
    'description' => 'Optimize TYPO3 site handling for a single site installation',
    'category' => 'be',
    'author' => 'Wolfgang Klinger',
    'author_email' => 'wk@plan2.net',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author_company' => 'plan2net GmbH',
    'version' => '1.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.14-12.4.99'
        ]
    ]
];
