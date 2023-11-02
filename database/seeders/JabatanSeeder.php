<?php

namespace Database\Seeders;

use App\Models\MasterData\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //masukan data dibawah sesuai dengan table
        $jabatan =
        [
            [
            'nama' => 'imam',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')
            ],
            [
            'nama' => 'Tilawah',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')
            ],
        ];

        //untuk menghubungkan dengan model
        Jabatan::insert($jabatan);
    }
}
