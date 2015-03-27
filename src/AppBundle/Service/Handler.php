<?php

namespace AppBundle\Service;

use AppBundle\ThriftModel\ServiceIf;
use Overblog\ThriftBundle\Api\Extensions\BaseExtension;

class Handler extends BaseExtension implements ServiceIf
{
    /**
     */
    public function ping()
    {
    }

    /**
     * @param int $id
     * @return \AppBundle\ThriftModel\Test[]
     * @throws \AppBundle\ThriftModel\InvalidValueException
     */
    public function getList($id)
    {
        return array(
            new \AppBundle\ThriftModel\Test(array('id' => 1, 'content' => 'asd')),
            new \AppBundle\ThriftModel\Test(array('id' => 2, 'content' => 'zxc'))
        );
    }

    /**
     * @param \AppBundle\ThriftModel\Test $test
     * @return int
     * @throws \AppBundle\ThriftModel\InvalidValueException
     */
    public function create(\AppBundle\ThriftModel\Test $test)
    {
        // TODO: Implement create() method.
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add($a, $b)
    {
        return $a + $b;
    }
}
