<?php

namespace AppBundle\Service;

use AppBundle\ThriftModel\ServiceIf;
use Overblog\ThriftBundle\Api\Extensions\BaseExtension;

class Handler extends BaseExtension implements ServiceIf
{

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
