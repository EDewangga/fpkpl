<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Idy\Yudisium\Domain\Model\PeriodeYudisium;
use Idy\Yudisium\Domain\Model\Status;
use Idy\Yudisium\Application\CreateNewPeriodeYudisiumResponse;


class EditPeriodeYudisiumService
{
    private $periodeYudisiumRepository;

    public function __construct(PeriodeYudisiumRepository $periodeYudisiumRepository)
    {
        $this->periodeYudisiumRepository = $periodeYudisiumRepository;
    }

    public function execute(EditPeriodeYudisiumRequest $request)
    {
        $yudisium = new PeriodeYudisium($request->wisuda(), $request->urutan(), $request->tanggalawal(), $request->tanggalakhir(), new Status($request->status()));
        $response = $this->periodeYudisiumRepository->edit($yudisium);

        if ($response) {
            return new EditPeriodeYudisiumResponse("Periode yudisium berhasil diubah!");
        }

        return new EditPeriodeYudisiumResponse("Terjadi error", 500);
    }

}