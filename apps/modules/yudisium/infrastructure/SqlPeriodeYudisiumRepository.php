<?php 

namespace Idy\Yudisium\Infrastructure;

use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Phalcon\Di;
use PDO;

class SqlPeriodeYudisiumRepository implements PeriodeYudisiumRepository
{
    private $dbManager;

    public function __construct()
    {
        $this->dbManager = Di::getDefault()->get('db');
    }

    public function create()
    {
        return "tes";
    }
    
}