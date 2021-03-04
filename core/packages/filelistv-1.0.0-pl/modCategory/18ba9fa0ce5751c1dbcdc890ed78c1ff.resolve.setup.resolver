<?php
/**
 * FileLisTV
 *
 * Copyright 2017 by Vitaly Checkryzhev <13hakta@gmail.com>
 *
 * This file is part of FileLisTV, file list TV component for MODx Revolution.
 *
 * FileAttach is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * FileAttach is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FileAttach; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 */

$success = false;

if ($object->xpdo) {
	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_UNINSTALL:
			$modx =& $object->xpdo;
			if ($modx instanceof modX) {
				// Convert TV to richtext
				$fileTV = $modx->getCollection('modTemplateVar', array('type' => 'filelist'));
				foreach ($fileTV as $item) {
					$item->set('type', 'textarea');
					$item->set('display', 'default');
					$item->set('output_properties', 'a:0:{}');
					$item->save();
				}
			}

			$success = true;
			break;
		default:
			$success = true;
	}
}

return $success;