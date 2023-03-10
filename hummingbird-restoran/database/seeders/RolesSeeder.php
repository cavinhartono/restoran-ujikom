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

            $kasir1 = User::create([
                'name' => 'Nenny Kusanti',
                'email' => 'nenny@gmail.com',
                'password' => Hash::make('nenny123')
            ]);

            $kasir2 = User::create([
                'name' => 'I Gusti Pratama',
                'email' => 'gusti@gmail.com',
                'password' => Hash::make('gusti123')
            ]);

            Permission::create(['name' => 'transaksi']);
            Permission::create(['name' => 'menu']);
            Permission::create(['name' => 'laporan']);
            Permission::create(['name' => 'aktivitas']);
            Permission::create(['name' => 'user']);

            $admin = Role::create(['name' => 'admin']);
            $manajer = Role::create(['name' => 'manajer']);
            $customer = Role::create(['name' => 'customer']);
            $kasir = Role::create(['name' => 'kasir']);

            $manajer->givePermissionTo([
                'transaksi',
                'menu',
                'laporan',
                'aktivitas',
            ]);

            $kasir->givePermissionTo(['transaksi', 'aktivitas']);

            $admin->givePermissionTo([
                'aktivitas',
                'user'
            ]);

            $manajer1->assignRole('manajer');
            $admin1->assignRole('admin');
            $admin2->assignRole('admin');
            $admin3->assignRole('admin');
            $kasir1->assignRole('kasir');
            $kasir2->assignRole('kasir');
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
