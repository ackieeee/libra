<?php

namespace Tests\Unit\App\Repositories;

use PHPUnit\Framework\TestCase;

class MedicineRepositoryInterface.php extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testFindAll()
    {
        $this->assertTrue(is_array($this->Medicines->all()));
    }
}
