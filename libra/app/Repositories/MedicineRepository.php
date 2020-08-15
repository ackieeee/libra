<?php

namespace App\Repositories;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Collection;

class MedicineRepository implements MedicineRepositoryInterface
{
  public function FindAll(): Collection
  {
    $medicines = Medicine::All();
    return $medicines;
  }
}
