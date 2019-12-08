<?php 

namespace Idy\Yudisium\Infrastructure;

use Idy\Yudisium\Domain\Model\PeriodeYudisium;
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

    public function create(PeriodeYudisium $periodeYudisium)
    {
        $statement = sprintf("INSERT INTO periodeyudisium (wisuda, urutan, tanggalawal, tanggalakhir, status) VALUES(:wisuda, :urutan, :tanggalawal, :tanggalakhir, :status)");

        $params = [
            'wisuda' => intval($periodeYudisium->wisuda()),
            'urutan' => intval($periodeYudisium->urutan()), 
            'tanggalawal' => $periodeYudisium->tanggalAwal(),
            'tanggalakhir' => $periodeYudisium->tanggalAkhir(),
            'status' => $periodeYudisium->status()->status()
            
        ];
        
        return $this->dbManager->execute($statement, $params);
    }

    public function all()
    {
        $statement = sprintf("SELECT * FROM periodeyudisium");
        // $statement = sprintf("SELECT * FROM periodeyudisium WHERE tanggal = :tanggal");
        // $param = [
        //     'tanggal' => '7'
        // ];

        // return $this->dbManager->query($statement, $param)->fetchAll(PDO::FETCH_ASSOC);


        return $this->dbManager->query($statement)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lulus()
    {
        $statement = sprintf("SELECT * FROM periodeyudisium");
        $statement = sprintf("SELECT * FROM periodeyudisium WHERE status = :status");
        $param = [
            'status' => 'lulus'
        ];

        return $this->dbManager->query($statement, $param)->fetchAll(PDO::FETCH_ASSOC);
    }
    
}