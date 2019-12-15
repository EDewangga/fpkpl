<?php

namespace Idy\Yudisium\Domain\Model;
use Idy\Yudisium\Domain\Model;

interface PeriodeYudisiumRepository
{
    public function create(PeriodeYudisium $periodeYudisium);
    public function all();
    public function aktif();
    public function tidakAktif();
}