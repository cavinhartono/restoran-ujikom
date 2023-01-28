<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\PermissionRegistrar;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $manajer1 = User::create([
                'name' => 'Martin Ginting',
                'email' => 'martin@gmail.com',
                'password' => Hash::make('martin123')
            ]);

            $admin1 = User::create([
                'name' => 'Zoe Rhahmawati',
                'email' => 'rhahmawati@gmail.com',
                'password' => Hash::make('zoe123')
            ]);

            $admin2 = User::create([
                'name' => 'Jonny Firmansyah',
                'email' => 'jonny@gmail.com',
                'password' => Hash::make('jonny123')
            ]);

            $admin3 = User::create([
                'name' => 'Kevin Jaya',
                'email' => 'kevin@gmail.com',
                'password' => Hash::make('kevin123')
            ]);

            Permission::create(['name' => 'transaksi']);
            Permission::create(['name' => 'menu']);
            Permission::create(['name' => 'laporan']);

            $admin = Role::create(['name' => 'admin']);
            $manajer = Role::create(['name' => 'manajer']);
            $customer = Role::create(['name' => 'customer']);

            $manajer->givePermissionTo([
                'transaksi',
                'menu',
                'laporan'
            ]);

            $admin->givePermissionTo([
                'transaksi',
            ]);

            $manajer1->assignRole('manajer');
            $admin1->assignRole('admin');
            $admin2->assignRole('admin');
            $admin3->assignRole('admin');
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
