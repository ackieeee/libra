<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MedicineRepositoryInterface;
use Illuminate\Http\JsonResponse;

class MedicineController extends Controller
{
    protected $medicines;

    public function __construct(MedicineRepositoryInterface $medicines)
    {
        $this->medicines = $medicines;
    }

    /**
     * 全件取得
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $medicines = $this->medicines->FindAll();
        return response()->json($medicines, 200);
    }

    /**
     * １件取得
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $medicine = $this->medicines->Find($id);
        return response()->json($medicine, 200);
    }
}
