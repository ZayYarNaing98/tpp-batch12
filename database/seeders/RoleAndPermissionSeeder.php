<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insturctor = Role::create(['name' => "Instructor"]);
        $student = Role::create(['name' => "Student"]);

        // Batch Permission
        $batchList = Permission::create(['name' => 'batchList']);
        $batchCreate = Permission::create(['name' => 'batchCreate']);
        $batchUpdate = Permission::create(['name' => 'batchUpdate']);
        $batchDelete = Permission::create(['name' => 'batchDelete']);

        // Insturctor
        $instructorList = Permission::create(['name' => 'instructorList']);
        $instructorCreate = Permission::create(['name' => 'instructorCreate']);
        $instructorUpdate = Permission::create(['name' => 'instructorUpdate']);
        $instructorDelete = Permission::create(['name' => 'instructorDelete']);


        $insturctor->givePermissionTo([
            $batchList,
            $batchCreate,
            $batchUpdate,
            $batchDelete,

            $instructorList,
            $instructorCreate,
            $instructorUpdate,
            $instructorDelete,
        ]);

        $student->givePermissionTo([
            $batchList,

            $instructorList
        ]);
    }
}
