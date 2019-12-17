<?php

namespace Idy\Yudisium\Domain\Model;
use Idy\Yudisium\Domain\Model;

interface PeriodeYudisiumRepository
{
    public function create(PeriodeYudisium $periodeYudisium);
    public function all();
    public function aktif();
    public function tidakAktif();
    public function download(Status $status);
    public function getYudisium(Wisuda $wisuda);
    public function edit(PeriodeYudisium $periodeYudisium);
}