<?php

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

/**
* @file autoload.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.backend
* @copyright Sioweb - Sascha Weidner
*/


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'sioweb\contao\extensions\backend'
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'sioweb\contao\extensions\backend\DownloadFolder'				=> 'system/modules/SWDownloadFolder/elements/DownloadFolder.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_downloadfolder'       => 'system/modules/SWDownloadFolder/templates',
));
