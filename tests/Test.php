<?php

namespace phpUnit;

use PHPUnit\Framework\TestCase;

class Test extends TestCase {

    public function testHello() {
        $this->assertEquals('Hello', 'Hell' . 'o');
    }

}