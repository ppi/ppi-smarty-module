PPI Smarty Module
=================

[@php]:     http://php.net/         "PHP: Hypertext Preprocessor"
[@ppi]:     http://ppi.io/          "PPI Framework - The PHP Meta Framework!"
[@smarty]:  http://www.smarty.net/  "The compiling PHP template engine"

Smarty3[@smarty] template engine module for [PPI2][@ppi].

[![Build Status](https://secure.travis-ci.org/ppi/ppi-smarty-module.png)](http://travis-ci.org/ppi/ppi-smarty-module)

Smarty
------

<img src="https://www.arvixe.com/images/landing_pages/smarty_hosting.png" height="100" />

> Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic.
> This implies that PHP code is application logic, and is separated from the presentation.
>
> Some of Smarty's features:
>
> * It is extremely fast.
> * It is efficient since the PHP parser does the dirty work.
> * No template parsing overhead, only compiles once.
> * It is smart about recompiling only the template files that have changed.
> * You can easily create your own custom functions and variable modifiers, so the template language is extremely extensible.
> * Configurable template `{delimiter}` tag syntax, so you can use `{$foo}, {{$foo}}, <!--{$foo}-->`, etc.
> * The `{if}..{elseif}..{else}..{/if}` constructs are passed to the PHP parser, so the `{if...}` expression syntax can be as simple or as complex an evaluation as you like.
> * Allows unlimited nesting of sections, if's etc.
> * Built-in caching support.
> * Arbitrary template sources.
> * Template Inheritance for easy management of template content.
> * Plugin architecture.


Requirements
------------

* [PHP][@php] 5.3.3 and up
* [PPI Framework 2][@ppi] (2.1.x)

Installation
------------

### 1. Install Composer

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

``` bash
curl -s http://getcomposer.org/installer | php
```

### 2. Add ppi/smarty-module to your composer.json and install

``` bash
$ php composer.phar require ppi/smarty-module dev-master
```

Composer will install the module to your project's `vendor/ppi` directory.

### 3. Enable the module

Enable this module by editing `app/config/modules.yml`:

``` yml
modules:
    - PPI\SmartyModule
    # ...
```

License
-------

This module is licensed under the MIT License. See the [LICENSE file](https://github.com/ppi/ppi-smarty-module/blob/master/LICENSE) for details.

Authors
-------

* Paul Dragoonis - <paul@ppi.io> ~ [twitter.com/dr4goonis](http://twitter.com/dr4goonis)
* Vítor Brandão - <vitor@ppi.io> ~ [twitter.com/noiselabs](http://twitter.com/noiselabs) ~ [noiselabs.org](http://noiselabs.org)

See also the list of [contributors](https://github.com/ppi/ppi-smarty-module/contributors) who participated in this project.

Submitting bugs and feature requests
------------------------------------

Bugs and feature requests are tracked on [GitHub](https://github.com/ppi/ppi-smarty-module/issues).

About PPI
---------

<img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Ppi-framework-logo.png" width="74" height="50" />

> PPI is an open source PHP meta-framework. It has taken the good bits from Symfony2, ZendFramework2 & Doctrine2 and combined them together to create a solid and very easy web application framework. It can be considered the boilerplate of PHP frameworks.
