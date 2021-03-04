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
 * Foundation version 3,
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

if (!class_exists('FileLisTVOutputRender')) {
	class FileLisTVOutputRender extends modTemplateVarOutputRender {
		public function process($value, array $params = array()) {
			if (empty($value)) return NULL;

			$res = '';
			$l = explode("\n", $value);

			$chunk = $this->modx->getObject('modChunk', array('name' => $params['chunk']));
			$chunk->setCacheable(false);

			foreach ($l as $val)
				$res .= $chunk->process(array('value' => $val));

			return $res;
		}
	}
}
return 'FileLisTVOutputRender';