<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $company = new Company;
        $company->nome = "admin";
        $company->email = "admin@admin.com";
        $company->password = bcrypt("123");
        $company->cnpj = "12.345.678/9012-34";
        $company->save();
    }
}
