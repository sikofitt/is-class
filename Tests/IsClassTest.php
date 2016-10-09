<?php

/**
 * is-class - Creates a missing is_class function
 * Copyleft (C) <2016>  <sikofitt>.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Sikofitt\Tests;

class IsClassTest extends \PHPUnit_Framework_TestCase
{
    private $testClass;
    private $stdClass;

    public function setUp()
    {
        $this->testClass = new \ArrayObject();
        $this->stdClass = new \stdClass();

        parent::setUp();
    }

    public function testClassFailure()
    {
        $this->assertFalse(is_class($this->stdClass));
        $this->assertFalse(is_class('\ArrayAccess', true));
        $this->assertFalse(is_class('test'));
    }

    public function testClassSuccess()
    {
        $this->assertTrue(is_class($this->testClass));
        $this->assertTrue(is_class('\ArrayAccess'));
    }
}
