<?php 

namespace Idy\Yudisium\Infrastructure;

use Idy\Yudisium\Domain\Model\Syarat;
use Idy\Yudisium\Domain\Model\SyaratRepository;
use Idy\Yudisium\Domain\Model\status;
use Phalcon\Di;
use PDO;

class SqlSyaratRepository implements SyaratRepository
{
    private $dbManager;

    public function __construct()
    {
        $this->dbManager = Di::getDefault()->get('db');
    }


    public function all()
    {
        $statement = sprintf("SELECT * FROM syarat");
        // $statement = sprintf("SELECT * FROM periodeyudisium WHERE tanggal = :tanggal");
        // $param = [
        //     'tanggal' => '7'
        // ];

        // return $this->dbManager->query($statement, $param)->fetchAll(PDO::FETCH_ASSOC);


        return $this->dbManager->query($statement)->fetchAll(PDO::FETCH_ASSOC);
    }
    
}