# single-site
Optimize TYPO3 site handling for a single site installation

## What does it do?

The extension overwrites a method in the core `SiteFinder` and if your installation has only one configured [site](https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/SiteHandling/Index.html), it simply returns that without trying to find the site configuration based on the current page's root line (which is a very expensive operation).

## Why should I install it?

You have only one site (one domain) in your installation and want the best performance?
Then you need this extension. 
It increases overall performance by 13% (or if you need a concrete number: in my test installation around 200ms per request).

# Installation

Just install it and you're done.

    composer require plan2net/single-site

ps: it doesn't harm an installation with more than one site, as then the operation is simply passed on to the default core method

