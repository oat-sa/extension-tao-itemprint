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
 *
 * @author Alexander Zagovorichev <zagovorichev@1pt.com>
 */

namespace oat\taoItemPrint\scripts\update;

use common_ext_ExtensionUpdater;

/**
 * Update the extension
 */
class Updater extends common_ext_ExtensionUpdater
{
    /**
     * Update extension version by version
     *
     * @param string $initialVersion the version to update from
     * @return string string the current version after the update
     */
    public function update($initialVersion)
    {
        $this->skip('1.0.0', '1.0.1');
    }
}
