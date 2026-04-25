<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert([
            [
                'idprodi' => 101,
                'namafakulitas' => 'Teknik','namaprodi' => 'Teknik Informatika','kodeprodi' => 'TI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idprodi' => 102,
                'namafakulitas' => 'Teknik','namaprodi' => 'Sistem Informasi','kodeprodi' => 'SI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idprodi' => 103,
                'namafakulitas' => 'Teknik','namaprodi' => 'Teknik Komputer','kodeprodi' => 'TK',
                'created_at' => now(),
                'updated_at' => now(),
            ],
                [
                    'idprodi' => 104,
                    'namafakulitas' => 'Teknik','namaprodi' => 'Teknik Elektro','kodeprodi' => 'TE',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'idprodi' => 105,
                    'namafakulitas' => 'Teknik','namaprodi' => 'Teknik Mesin','kodeprodi' => 'TM',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                    [
                        'idprodi' => 106,
                        'namafakulitas' => 'Teknik','namaprodi' => 'Teknik Sipil','kodeprodi' => 'TS',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
        ]);
    }
}
