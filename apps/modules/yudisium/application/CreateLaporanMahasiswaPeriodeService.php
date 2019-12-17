<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\MahasiswaRepository;
use Idy\Yudisium\Domain\Model\Mahasiswa;
use Idy\Yudisium\Domain\Model\Status;
use Idy\Yudisium\Application\CreateLaporanMahasiswaPeriodeResponse;
use Idy\Yudisium\Domain\Model\Wisuda;

class CreateLaporanMahasiswaPeriodeService
{
    private $mahasiswaRepository;

    public function __construct(MahasiswaRepository $mahasiswaRepository)
    {
        $this->mahasiswaRepository = $mahasiswaRepository;
    }

    public function execute(CreateLaporanMahasiswaPeriodeRequest $request)
    {
        $wisuda = new Wisuda($request->wisuda());
        $response = $this->mahasiswaRepository->laporan($wisuda);
        $handle = fopen("file.txt", "w");
        foreach ($response as $r) {
            fwrite($handle, implode('| ', $r). PHP_EOL);
        }
        fclose($handle);

        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename('file.txt'));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('file.txt'));
        readfile('file.txt');
        exit;
        return $response;
    }

    

}