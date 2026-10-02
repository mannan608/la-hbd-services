<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'dashboard.view',

            // User permissions
            'user.list',
            'user.view',
            'user.create',
            'user.edit',
            'user.delete',
            'user.impersonate',
            'user.status.change',

            // Role permissions
            'role.list',
            'role.view',
            'role.create',
            'role.edit',
            'role.delete',
            'role.manage',

            // 'permission.sync',
            
            // Blog permissions
            'blog.list',
            'blog.view',
            'blog.create',
            'blog.edit',
            'blog.delete',
            'blog.publish',
            'blog.manage',
            
            // Event permissions
            'event.list',
            'event.view',
            'event.create',
            'event.edit',
            'event.delete',
            'event.manage',

            //event-leads
            'event-leads.list',
            'event-leads.view',
            'event-leads.delete',
            'event-leads.manage',

            // SEO permissions
            'seo.list',
            'seo.view',
            'seo.create',
            'seo.edit',
            'seo.delete',
            'seo.manage',

             
         // course-categories
            'course-categories.list',
            'course-categories.index',
            'course-categories.create',
            'course-categories.show',
            'course-categories.edit',
            'course-categories.delete',
            'course-categories.status.change',
            'course-categories.manage',

            // Course permissions
            'course.list',
            'course.create',
            'course.view',
            'course.edit',
            'course.delete',
            'course.status.change',
      
          
            //contact
            'contact.list',
            'contact.view',
            'contact.delete',

            //subscriber
            'subscriber.list',
            'subscriber.view',
            'subscriber.delete',

            //students
            'student.list',
            'student.view',
            'student.delete',
            'student.manage',

            // bookings 
            'bookings.list',
            'bookings.view',
            'bookings.update',                        
            'bookings.delete',
            'bookings.manage'



        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => config('rbac.default_guard', 'web'),
            ]);
        }

        //super admin role 1
        $superAdmin = Role::firstOrCreate([
            'name' => config('rbac.super_admin_role'),
            'guard_name' => config('rbac.default_guard', 'web'),
        ]); 
        // admin role 2     

        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => config('rbac.default_guard', 'web'),
        ]);

        // default role 3
         $defaultRole = Role::firstOrCreate([
            'name' => 'default',
            'guard_name' => config('rbac.default_guard', 'web'),
        ]);

        // student role 4
         $studentRole = Role::firstOrCreate([
            'name' => 'student',
            'guard_name' => config('rbac.default_guard', 'web'),
        ]);
      

        $adminRole->syncPermissions($permissions);
        $superAdmin->syncPermissions($permissions);
        $defaultRole->syncPermissions(['dashboard.view']);
        $studentRole->syncPermissions([]);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
