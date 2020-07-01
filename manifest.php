<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2017 Open Assessment Technologies SA;
 */

/**
 * Generated using taoDevTools 2.17.0
 */
return array(
    'name' => 'taoItemPrint',
    'label' => 'Item Print CSS',
    'description' => 'Custom CSS for printing items',
    'license' => 'GPL-2.0',
    'version' => '1.1.0',
    'author' => 'Open Assessment Technologies SA',
    'requires' => array(
        'tao' => '>=9.0.0'
    ),
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#taoItemPrintManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#taoItemPrintManager', array('ext'=>'taoItemPrint')),
    ),
    'install' => array(
        'php' => array(
            \oat\taoItemPrint\scripts\install\SetItemThemes::class,
            \oat\taoItemPrint\scripts\install\SetNewTestRunner::class,
        )
    ),
    'update' => \oat\taoItemPrint\scripts\update\Updater::class,
    'uninstall' => array(
    ),
    'routes' => array(
        '/taoItemPrint' => 'oat\\taoItemPrint\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'taoItemPrint/',
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )
);
