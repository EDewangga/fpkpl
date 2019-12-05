<?php 

namespace Idy\Yudisium\Infrastructure;

use Idy\Idea\Domain\Model\YudisiumRepository;
use Phalcon\Di;
use PDO;

class SqlYudisiumRepository implements YudisiumRepository
{
    private $dbManager;

    public function __construct()
    {
        $this->dbManager = Di::getDefault()->get('db');
    }

    public function byId()
    { 
        return "Oke";
    }
}