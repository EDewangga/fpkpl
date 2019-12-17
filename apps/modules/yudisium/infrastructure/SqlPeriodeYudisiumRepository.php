<?php 

namespace Idy\Yudisium\Infrastructure;

use Idy\Yudisium\Domain\Model\PeriodeYudisium;
use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Idy\Yudisium\Domain\Model\status;
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

    public function aktif()
    {
        $statement = sprintf("SELECT * FROM periodeyudisium");
        $statement = sprintf("SELECT * FROM periodeyudisium WHERE status = :status");
        $param = [
            'status' => 'aktif'
        ];

        return $this->dbManager->query($statement, $param)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tidakAktif()
    {
        $statement = sprintf("SELECT * FROM periodeyudisium");
        $statement = sprintf("SELECT * FROM periodeyudisium WHERE status = :status");
        $param = [
            'status' => 'tidak aktif'
        ];

        return $this->dbManager->query($statement, $param)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function download(Status $status)
    {
        $statement = sprintf("SELECT * FROM periodeyudisium WHERE status = :status");
        $param = [
            'status' => $status->status()
        ];

        return $this->dbManager->query($statement, $param)->fetchAll(PDO::FETCH_ASSOC);
    }
    
}