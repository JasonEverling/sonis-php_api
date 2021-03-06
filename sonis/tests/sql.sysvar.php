<?php
/**
 *
 * MIT License
 *
 * Copyright (c) 2016-2019 Jason A. Everling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

/**
 * Sonis API Framework
 *
 * Test file for SoapSql.cfc
 *
 * @file sql.sysvar.php
 * @package Test
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016-2019
 * @license https://opensource.org/licenses/MIT
 */

use Jenzabar\Sonis\Api\SoapSql;

define('SONIS_USER', 'username');  // your api user
define('SONIS_PASSWORD', 'password'); // your api password
define('SONIS_HOST', 'https://sonis.example.edu'); // your sonis host url, do not append /

require __DIR__ . '/../sonis.php';

/**
 * SOAP SQL is the easiest to work with.
 *
 * Data returned is exactly what you have
 * requested, no more, no less. It is
 * recommended to use the API over SQL
 * to help guard against attacks.
 *
 */

/**
 * The query statement to be
 * ran in regular sql language.
 *
 * @var string $stmt
 * @example "SELECT TOP 1 * FROM sysvar"
 */
$stmt = "SELECT TOP 1 * FROM sysvar";

/**
 * Stores the data queried in $result.
 * Data can be retrieved using the column
 * name in all uppercase, COLUMN_NAME
 *
 * @var array $result
 * @example $result['FIRST_NAME'];
 */
$result = SoapSql::run($stmt);

print_r($result);
print_r('Sonis API Framework: ' . $utils->getVersion('pretty'));
