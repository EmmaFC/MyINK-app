<?php

namespace Database\Seeders;

/* use Illuminate\Database\Console\Seeds\WithoutModelEvents; */
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Company;
use App\Models\ContactLink;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit company']);
        Permission::create(['name' => 'delete company']);
        Permission::create(['name' => 'create company']);
        Permission::create(['name' => 'list company']);
        Permission::create(['name' => 'show company']);

        Permission::create(['name' => 'edit contact links']);
        Permission::create(['name' => 'delete contact links']);
        Permission::create(['name' => 'create contact links']);
        Permission::create(['name' => 'list contact links']);
        Permission::create(['name' => 'show contact links']);

        Permission::create(['name' => 'edit roles']);
        Permission::create(['name' => 'delete roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'show roles']);

        Permission::create(['name' => 'edit permissions']);
        Permission::create(['name' => 'delete permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'list permissions']);
        Permission::create(['name' => 'show permissions']);

        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'show users']);

        Permission::create(['name' => 'edit admins']);
        Permission::create(['name' => 'delete admins']);
        Permission::create(['name' => 'create admins']);
        Permission::create(['name' => 'list admins']);
        Permission::create(['name' => 'show admins']);

        Permission::create(['name' => 'edit books']);
        Permission::create(['name' => 'delete books']);
        Permission::create(['name' => 'create books']);
        Permission::create(['name' => 'list books']);
        Permission::create(['name' => 'show books']);

        Permission::create(['name' => 'edit categories']);
        Permission::create(['name' => 'delete categories']);
        Permission::create(['name' => 'create categories']);
        Permission::create(['name' => 'list categories']);
        Permission::create(['name' => 'show categories']);

        Permission::create(['name' => 'edit profile']);
        Permission::create(['name' => 'filter search']);
        Permission::create(['name' => 'mark favorites']);
        Permission::create(['name' => 'mark ranking']);

        Permission::create(['name' => 'login as user']);
        Permission::create(['name' => 'login as admin']);
        Permission::create(['name' => 'register users']);
        Permission::create(['name' => 'register admins']);



        
        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'superadmin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        
        $role2 = Role::create(['name' => 'admin VIP']);

            $role2->givePermissionTo('edit contact links');
            $role2->givePermissionTo('delete contact links');
            $role2->givePermissionTo('create contact links');
            $role2->givePermissionTo('list contact links');
            $role2->givePermissionTo('show contact links');
            
            $role2->givePermissionTo('login as admin');
            $role2->givePermissionTo('register admins');
            $role2->givePermissionTo('edit profile');

            $role2->givePermissionTo('edit admins');
            $role2->givePermissionTo('delete admins');
            $role2->givePermissionTo('create admins');
            $role2->givePermissionTo('list admins');
            $role2->givePermissionTo('show admins');

            $role2->givePermissionTo('edit users');
            $role2->givePermissionTo('delete users');
            $role2->givePermissionTo('create users');
            $role2->givePermissionTo('list users');
            $role2->givePermissionTo('show users');

            $role2->givePermissionTo('edit books');
            $role2->givePermissionTo('delete books');
            $role2->givePermissionTo('create books');
            $role2->givePermissionTo('list books');
            $role2->givePermissionTo('show books');



        $role3 = Role::create(['name' => 'admin']);
        
            $role2->givePermissionTo('login as admin');
            $role3->givePermissionTo('edit profile');

            $role3->givePermissionTo('list admins');
            $role3->givePermissionTo('list users');

            $role3->givePermissionTo('filter search');

            $role3->givePermissionTo('edit books');
            $role3->givePermissionTo('delete books');
            $role3->givePermissionTo('create books');
            $role3->givePermissionTo('list books');
            $role3->givePermissionTo('show books');


        $role4 = Role::create(['name' => 'user']);

            $role4->givePermissionTo('register users');
            $role4->givePermissionTo('login as user');
            $role4->givePermissionTo('edit profile');

            $role4->givePermissionTo('list books');
            $role4->givePermissionTo('show books');

            $role4->givePermissionTo('filter search');
            $role4->givePermissionTo('mark favorites');
            $role4->givePermissionTo('mark ranking');
        
            
        // create demo users
        $user = User::factory()->create([
            'name' => 'Sonia',
            'email' => 'superadmin@contact.com',
            'description' => 'Hola, soy la superadmin',
            'admin_key' => '$2y$10$QMs.f6PPq795yQm3bJc9FuU7lzVWfj./XFFPuI7K3/vJlGV44NIPC',
        ]);
        $user->assignRole($role1);

        $user = User::factory()->create([
            'name' => 'Matthew',
            'email' => 'adminvip@contact.com',
            'description' => 'Hola, soy un admin VIP',
            'admin_key' => '$2y$10$QMs.f6PPq795yQm3bJc9FuU7lzVWfj./XFFPuI7K3/vJlGV44NIPC',
        ]);
        $user->assignRole($role2);

        $user = User::factory()->create([
            'name' => 'Mila',
            'email' => 'admin@contact.com',
            'description' => 'Hola, soy una admin',
            'admin_key' => '$2y$10$QMs.f6PPq795yQm3bJc9FuU7lzVWfj./XFFPuI7K3/vJlGV44NIPC',
        ]);
        $user->assignRole($role3);



        User::factory(20)->create();
        Book::factory(50)->create();
        Category::factory(8)->create();
        Company::factory(1)->create();
        ContactLink::factory(3)->create();

    }
}