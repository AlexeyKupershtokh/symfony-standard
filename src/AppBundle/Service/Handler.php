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
        // TODO: Implement ping() method.
    }

    /**
     * @param int $id
     * @return \AppBundle\ThriftModel\Test[]
     * @throws \AppBundle\ThriftModel\InvalidValueException
     */
    public function getList($id)
    {
        // TODO: Implement getList() method.
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

    public function ping()
    {
        // TODO: Implement ping() method.
    }

    public function getList($id)
    {
        // TODO: Implement getList() method.
    }

    public function create(\AppBundle\ThriftModel\Test $test)
    {
        // TODO: Implement create() method.
    }
}
