<?php

namespace App\Imports;

use App\Models\Empresa;
use Maatwebsite\Excel\Concerns\{Importable, ToModel, WithHeadingRow};

class EmpresasImport implements ToModel, WithHeadingRow
{
    use Importable;

    public function model(array $row)
    {
        return Empresa::create($row);
    }
}
