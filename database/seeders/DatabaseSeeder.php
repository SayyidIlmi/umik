<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AlamatUmkm;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Tes utk mendefinisikan superadmin (mungkin akan dihapus di produksi)
        User::factory()->create([
            'nama' => 'superadmin',
            'username' => 'superadmin',
            'no_tlp' => '+6282962541463',
            'email' => 'super.admin@gmail.com',
            'level_user' => 'admin_keseluruhan',
        ]);

        User::factory(5)->create();

        // Utk seeding db, user_id nya ada di AlamatUmkmFactory
        // Klo mau dikomen gpp, soalnya masih aku juga masih agak bingung
        // AlamatUmkm::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
