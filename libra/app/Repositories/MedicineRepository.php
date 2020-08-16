<?php

namespace App\Repositories;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Collection;

class MedicineRepository implements MedicineRepositoryInterface
{
  /**
   * Medicine 全件取得
   *
   * @return \Illuminate\Database\Eloquent\Collection
   */
  public function FindAll(): Collection
  {
    $medicines = Medicine::All();
    return $medicines;
  }

  /**
   * Medicine １件取得
   *
   * @param int $int 薬ID
   * @return \App\Models\Medicine
   */
  public function Find(int $id): Medicine
  {
    $medicine = Medicine::find($id);
    return $medicine;
  }
}
