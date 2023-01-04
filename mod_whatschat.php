<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the search functions only once
JLoader::register('WhatsChatHelper', __DIR__ . '/helper.php');

$lang       = JFactory::getLanguage();
$app        = JFactory::getApplication();
$doc = JFactory::getDocument();
$doc->addScript('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js');
$doc->addScript('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css');
$set_Itemid = (int) $params->get('set_itemid', 0);
$mitemid    = $set_Itemid > 0 ? $set_Itemid : $app->input->getInt('Itemid');
require JModuleHelper::getLayoutPath('mod_whatschat', $params->get('layout', 'default'));
