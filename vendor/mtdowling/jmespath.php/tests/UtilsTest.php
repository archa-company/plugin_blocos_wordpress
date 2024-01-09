<?php
namespace JmesPath\Tests;

use JmesPath\Utils;
use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{
    public static function typeProvider(): array
    {
        return [
            ['a', 'string'],
            [10, 'number'],
            [1.0, 'number'],
            [true, 'boolean'],
            [false, 'boolean'],
            [[], 'array'],
            [[1, 2], 'array'],
            [['a' => 1], 'object'],
            [new \stdClass(), 'object'],
            [function () {}, 'expression'],
            [new \ArrayObject(), 'array'],
            [new \ArrayObject([1, 2]), 'array'],
            [new \ArrayObject(['foo' => 'bar']), 'object'],
            [new _TestStr(), 'string']
        ];
    }

    /**
     * @dataProvider typeProvider
     */
    public function testGetsTypes($given, string $type): void
    {
        $this->assertEquals($type, Utils::type($given));
    }

    public function testThrowsForInvalidArg(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Utils::type(new _TestClass());
    }

    public static function isArrayProvider(): array
    {
        return [
            [[], true],
            [[1, 2], true],
            [['a' => 1], false],
            [new _TestClass(), false],
            [new \ArrayObject(['a' => 'b']), false],
            [new \ArrayObject([1]), true],
            [new \stdClass(), false]
        ];
    }

    /**
     * @dataProvider isArrayProvider
     */
    public function testChecksIfArray($given, bool $result)
    {
        $this->assertSame($result, Utils::isArray($given));
    }

    public static function isObjectProvider(): array
    {
        return [
            [[], true],
            [[1, 2], false],
            [['a' => 1], true],
            [new _TestClass(), false],
            [new \ArrayObject(['a' => 'b']), true],
            [new \ArrayObject([1]), false],
            [new \stdClass(), true]
        ];
    }

    /**
     * @dataProvider isObjectProvider
     */
    public function testChecksIfObject($given, $result): void
    {
        $this->assertSame($result, Utils::isObject($given));
    }

    public function testHasStableSort(): void
    {
        $data = [new _TestStr(), new _TestStr(), 0, 10, 2];
        $result = Utils::stableSort($data, function ($a, $b) {
            $a = (int) (string) $a;
            $b = (int) (string) $b;
            return $a > $b ? -1 : ($a == $b ? 0 : 1);
        });
        $this->assertSame($data[0], $result[0]);
        $this->assertSame($data[1], $result[1]);
        $this->assertEquals(10, $result[2]);
        $this->assertEquals(2, $result[3]);
        $this->assertEquals(0, $result[4]);
    }

    public function testSlicesArrays(): void
    {
        $this->assertEquals([3, 2, 1], Utils::slice([1, 2, 3], null, null, -1));
        $this->assertEquals([1, 3], Utils::slice([1, 2, 3], null, null, 2));
        $this->assertEquals([2, 3], Utils::slice([1, 2, 3], 1));
    }

    public function testSlicesStrings(): void
    {
        $this->assertEquals('cba', Utils::slice('abc', null, null, -1));
        $this->assertEquals('ac', Utils::slice('abc', null, null, 2));
        $this->assertEquals('bc', Utils::slice('abc', 1));
    }
}

class _TestClass implements \ArrayAccess
{
    public function offsetExists($offset): bool {}
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) {}
    public function offsetSet($offset, $value): void {}
    public function offsetUnset($offset): void {}
}

class _TestStr
{
    public function __toString(): string
    {
        return '100';
    }
}
