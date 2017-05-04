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
namespace oat\taoItemPrint\scripts\install;

use oat\tao\model\ThemeRegistry;
use oat\tao\model\ThemeNotFoundException;
use oat\oatbox\extension\InstallAction;
use oat\taoQtiItem\model\themes\ItemThemeInstaller;

class SetItemThemes extends InstallAction
{
    public function __invoke($params)
    {

        $themes = [
            'default' => 'Item Print Theme'
        ];

        $itemThemeInstaller = new ItemThemeInstaller('taoItemPrint');
        $itemThemeInstaller->add($themes);

        $itemThemeInstaller->setDefault('default');
    }
}
