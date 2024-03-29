<?php

namespace Idy\Yudisium\Domain\Model;
use Idy\Yudisium\Domain\Model;

interface MahasiswaRepository
{
    public function all();
    public function create(Mahasiswa $mahasiswa);
    public function mahasiswaInPeriodeYudisium(Wisuda $wisuda);
    public function laporan(wisuda $wisuda);

}