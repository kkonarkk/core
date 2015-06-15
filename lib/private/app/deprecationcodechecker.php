<?php
/**
 * @author Joas Schilling <nickvergessen@owncloud.com>
 *
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OC\App;

class DeprecationCodeChecker extends CodeChecker {
	protected $checkEqualOperators = true;

	/** @var string */
	protected $blackListDescription = 'deprecated';

	protected $blackListedClassNames = [
		// Deprecated classes
		'OCP\Config' => '8.0.0',
		'OCP\Contacts' => '8.1.0',
		'OCP\DB' => '8.1.0',
		'OCP\IHelper' => '8.1.0',
		'OCP\JSON' => '8.1.0',
		'OCP\Response' => '8.1.0',
		'OCP\AppFramework\IApi' => '8.0.0',
	];

	protected $blackListedConstants = [
		// Deprecated constants
		'OCP::PERMISSION_CREATE' => '8.0.0',
		'OCP::PERMISSION_READ' => '8.0.0',
		'OCP::PERMISSION_UPDATE' => '8.0.0',
		'OCP::PERMISSION_DELETE' => '8.0.0',
		'OCP::PERMISSION_SHARE' => '8.0.0',
		'OCP::PERMISSION_ALL' => '8.0.0',
		'OCP::FILENAME_INVALID_CHARS' => '8.0.0',
	];
}
