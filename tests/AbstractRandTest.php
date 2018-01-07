<?php
/**
 * @link      <https://github.com/Genial-Framework/Cryptography> for the canonical source repository.
 * @copyright Copyright (c) 2017-2019 Genial Framework. <https://github.com/Genial-Components>
 * @license   <https://github.com/Genial-Framework/Cryptography/blob/master/LICENSE> New BSD License.
 */

namespace Genial\Cryptography;

use PHPUnit\Framework\TestCase;

/**
 * AbstractRandTest.
 */
final class AbstractRandTest extends TestCase
{
  
    public function testRandomShuffle()
    {
        $array = Utils::randomShuffle([
            'a', 'b', 'c', 'd',
            'e', 'f', 'g', 'h',
            'i', 'j', 'k', 'l',
            'm', 'n', 'o', 'p',
            'q', 'r', 's', 't',
            'u', 'v', 'w', 'x',
            'y', 'z'
        ]);
        $this->assertTrue(\count($array) === 26);
        $this->assertTrue(\is_array($array));
    }
  
    public function testRandomInt()
    {
        $int = Utils::randomInt(10, 99);
        $this->assertTrue(\is_int($int));
        $this->assertTrue(\strlen($int) === 2);
        $this->assertTrue(!(\strlen($int) === 3));
    }
    
    public function testRandomBytes()
    {
        $bytes = Utils::randomBytes(5);
        $this->assertTrue(\is_string($bytes));
        $this->assertTrue(\strlen($bytes) === 5);
        $this->assertTrue(!(\strlen($bytes) === 6));
    }
  
}
