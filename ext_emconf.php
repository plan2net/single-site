<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Single site',
    'description' => 'Optimize TYPO3 site handling for a single site installation',
    'category' => 'be',
    'author' => 'Wolfgang Klinger',
    'author_email' => 'wk@plan2.net',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author_company' => 'plan2net GmbH',
    'version' => '1.1.2',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.14-10.4.99'
        ]
    ]
];
