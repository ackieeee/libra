<?php

namespace App\Repositories;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Collection;

interface MedicineRepositoryInterface
{
  public function FindAll(): Collection;
  public function Find(int $id): Medicine;
}
