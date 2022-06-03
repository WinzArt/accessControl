<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Device;
use App\Models\Visitor;
use App\Models\Relation;
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
        // \App\Models\User::factory(10)->create();

        // Seed Data Access User

        Visitor::create([
            'name' => 'Administrator',
            'gender' => 'Male',
            'phone' => '082213134918',
            'email' => 'admin@email.com',
            'photo' => '',
        ]);

        Visitor::create([
            'name' => 'User A',
            'gender' => 'Male',
            'phone' => '082213134918',
            'email' => 'user.a@email.com',
            'photo' => '',
        ]);

        Visitor::create([
            'name' => 'User B',
            'gender' => 'Female',
            'phone' => '082213134918',
            'email' => 'user.b@email.com',
            'photo' => '',
        ]);

        Visitor::create([
            'name' => 'User C',
            'gender' => 'Female',
            'phone' => '082213134918',
            'email' => 'user.c@email.com',
            'photo' => '',
        ]);

        Visitor::create([
            'name' => 'User D',
            'gender' => 'Male',
            'phone' => '082213134918',
            'email' => 'user.d@email.com',
            'photo' => '',
        ]);

        // Seed Data Devices

        Device::create([
            'name' => 'Pendaftaran Ruang Admin',
            'device' => 'Enrollment',
        ]);

        Device::create([
            'name' => 'Intelligent Controller',
            'device' => 'IntelligentController',
        ]);

        Device::create([
            'name' => 'Pintu A',
            'device' => 'Reader',
        ]);

        Device::create([
            'name' => 'Pintu B',
            'device' => 'Reader',
        ]);

        Device::create([
            'name' => 'Pintu C',
            'device' => 'Reader',
        ]);
        Device::create([
            'name' => 'Pintu D',
            'device' => 'Reader',
        ]);

        Device::create([
            'name' => 'Pintu E',
            'device' => 'Reader',
        ]);

        // Seed Relasi Data Access User dengan Devices

        Relation::create([
            'device_id' => '1',
            'visitor_id' => '1',
        ]);
        Relation::create([
            'device_id' => '1',
            'visitor_id' => '2',
        ]);
        Relation::create([
            'device_id' => '1',
            'visitor_id' => '4',
        ]);
        Relation::create([
            'device_id' => '1',
            'visitor_id' => '5',
        ]);
        Relation::create([
            'device_id' => '2',
            'visitor_id' => '2',
        ]);
        Relation::create([
            'device_id' => '2',
            'visitor_id' => '3',
        ]);
        Relation::create([
            'device_id' => '2',
            'visitor_id' => '5',
        ]);
        Relation::create([
            'device_id' => '3',
            'visitor_id' => '1',
        ]);
        Relation::create([
            'device_id' => '3',
            'visitor_id' => '3',
        ]);
        Relation::create([
            'device_id' => '3',
            'visitor_id' => '4',
        ]);

    }
}
