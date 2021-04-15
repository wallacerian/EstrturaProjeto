<?php

namespace SON\Db;

class DbTest extends \PHPUnit_Framework_testCase
{
    public function testTestarSeAClasseEstaInstanciando()
    {
       $db = new Db;

       $this->assertInstaceOf('SON\Db\Db', $db);
    }
}
