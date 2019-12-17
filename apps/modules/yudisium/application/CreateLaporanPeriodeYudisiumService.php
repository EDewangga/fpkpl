<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Idy\Yudisium\Domain\Model\PeriodeYudisium;
use Idy\Yudisium\Domain\Model\Status;
use Idy\Yudisium\Application\CreateLaporanPeriodeYudisiumResponse;


class CreateLaporanPeriodeYudisiumService
{
    private $periodeYudisiumRepository;

    public function __construct(PeriodeYudisiumRepository $periodeYudisiumRepository)
    {
        $this->periodeYudisiumRepository = $periodeYudisiumRepository;
    }

    public function execute(CreateLaporanPeriodeYudisiumRequest $request)
    {
        $status = new Status($request->status());
        $response = $this->periodeYudisiumRepository->download($status);
        $handle = fopen("file.txt", "w");
        fwrite($handle, '$response');
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