<?php 

namespace Idy\Yudisium\Infrastructure;

use Idy\Yudisium\Domain\Model\Mahasiswa;
use Idy\Yudisium\Domain\Model\MahasiswaRepository;
use Idy\Yudisium\Domain\Model\wisuda;
use Phalcon\Di;
use PDO;

class SqlMahasiswaRepository implements MahasiswaRepository
{
    private $dbManager;

    public function __construct()
    {
        $this->dbManager = Di::getDefault()->get('db');
    }


    public function all()
    {
        $statement = sprintf("SELECT * FROM mahasiswa");
        return $this->dbManager->query($statement)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(Mahasiswa $mahasiswa)
    {
        $statement = sprintf("INSERT INTO mahasiswa (nrp, nama, ipk, wisuda, status) VALUES(:nrp, :nama, :ipk, :wisuda, :status)");

        $params = [
            'nrp' => intval($mahasiswa->nrp()), 
            'nama' => $mahasiswa->nama(),
            'ipk' => $mahasiswa->ipk(),
            'wisuda' => $mahasiswa->wisuda()->wisuda(),
            'status' => $mahasiswa->status()
        ];
        
        return $this->dbManager->execute($statement, $params);
    }

    public function mahasiswaInPeriodeYudisium(Wisuda $wisuda)
    {
        $statement = sprintf("SELECT * FROM mahasiswa WHERE wisuda = :wisuda");
        $param = [
            'wisuda' => $wisuda->wisuda()
        ];

        return $this->dbManager->query($statement, $param)->fetchAll(PDO::FETCH_ASSOC);

    }
    public function laporan(wisuda $wisuda)
    {
        $statement = sprintf("SELECT * FROM mahasiswa WHERE wisuda = :wisuda");
        $param = [
            'wisuda' => $wisuda->wisuda()
        ];

        return $this->dbManager->query($statement, $param)->fetchAll(PDO::FETCH_ASSOC);
    }

    
}