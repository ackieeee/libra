<?php

namespace Tests\Unit\App\Repositories;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Collection;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Str;

class MedicineRepositoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /*
    public function testFind()
    {
        $medicine = MedicineRepository::Find(1);
    }
    */
}

/*
class MedicineMock extends Medicine
{
    public $mock_data;
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $mocks = [];
        for ($i = 0; $i <= 5; ++$i) {
            $mocks[] = (new Medicine())->forceFill([
                'id' => $i,
                'name' => Str::random(10),
                'description' => Str::random(40),
                'tablets' => mt_rand(1, 10),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $this->mock_data = new Collection($mocks);
    }
}
*/
