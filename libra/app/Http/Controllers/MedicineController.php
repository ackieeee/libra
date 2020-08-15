<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MedicineRepositoryInterface;

class MedicineController extends Controller
{
    protected $medicines;

    public function __construct(MedicineRepositoryInterface $medicines)
    {
        $this->medicines = $medicines;
    }

    public function index()
    {
        $medicines = $this->medicines->FindAll();
        return response()->json($medicines, 200);
    }
}
