<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface MedicineRepositoryInterface
{
  public function FindAll(): Collection;
}
