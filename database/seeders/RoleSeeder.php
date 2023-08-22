<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {






        $AMCPodclassRole = Role::create(['name' => 'AMC Podclass']);
        Role::create(['name' => 'Active Recall']);
        Role::create(['name' => 'On the Go']);
        Role::create(['name' => 'Masterclass']);
        $PowermockRole = Role::create(['name' => 'Powermock']);
        Role::create(['name' => 'user']);
        $adminRole = Role::create(['name' => 'admin']);

        //$ActiveRecallRole = Role::create(['name' => 'Active Recall']);
        //$OntheGoRole = Role::create(['name' => 'On the Go']);
        //$MasterclassRole = Role::create(['name' => 'Masterclass']);
        Permission::create(['name' => 'Assessment']);
        Permission::create(['name' => 'Flipbook']);
        Permission::create(['name' => 'Powermock']);
        $assessmentPermission = Permission::where('name', 'Assessment')->first();
        $flipbookPermission = Permission::where('name', 'Flipbook')->first();
        $powermockPermission = Permission::where('name', 'Powermock')->first();

        $adminRole->givePermissionTo($assessmentPermission);
        $PowermockRole->givePermissionTo($powermockPermission);
        $AMCPodclassRole->givePermissionTo($assessmentPermission, $flipbookPermission, $powermockPermission);
        //$ActiveRecallRole->givePermissionTo($assessmentPermission);
        //$OntheGoRole->givePermissionTo($assessmentPermission);
        //$MasterclassRole->givePermissionTo($assessmentPermission);

    }


}
