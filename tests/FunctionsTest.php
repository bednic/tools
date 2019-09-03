<?php

namespace Tools\Test;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testCamelToKebab()
    {
        $this->assertTrue(function_exists('camelToKebab'));
        $this->assertEquals('test-string', camelToKebab('testString'));
        $this->assertEquals('first-upper', camelToKebab('FirstUpper'));
    }

    public function testCamelToSnake()
    {
        $this->assertTrue(function_exists('camelToSnake'));
        $this->assertEquals('test_string', camelToSnake('testString'));
        $this->assertEquals('first_upper', camelToSnake('FirstUpper'));
    }

    public function testSlashToDot()
    {
        $this->assertTrue(function_exists('slashToDot'));
        $this->assertEquals('Tools.Test.FunctionsTest', slashToDot(self::class));
    }

    public function testPluralize()
    {
        $this->assertTrue(function_exists('pluralize'));
        $this->assertEquals('proxies', pluralize('proxy'));
        $this->assertEquals('dots', pluralize('dot'));
        $this->assertEquals('nines', pluralize('nine'));
    }

    public function testFormatBytes()
    {
        $this->assertTrue(function_exists('formatBytes'));
        $this->assertEquals('1 B', formatBytes(1));
        $this->assertEquals('12 B', formatBytes(12));
        $this->assertEquals('123 B', formatBytes(123));
        $this->assertEquals('1.23 kB', formatBytes(1234));
        $this->assertEquals('12.35 kB', formatBytes(12345));
        $this->assertEquals('123.46 kB', formatBytes(123456));
        $this->assertEquals('1.23 MB', formatBytes(1234567));
        $this->assertEquals('12.35 MB', formatBytes(12345678));
        $this->assertEquals('123.46 MB', formatBytes(123456789));
    }

    public function testFloatValue()
    {
        $this->assertTrue(function_exists('floatValue'));
        $this->assertEquals(123456.789, floatValue('123,456.789'));
        $this->assertEquals(123456.789, floatValue('123.456,789'));
        $this->assertEquals(123456.789, floatValue('123 456.789'));
        $this->assertEquals(123456.789, floatValue('123 456,789'));
        $this->assertTrue(is_float(floatValue('123 456,789')));
    }
}
