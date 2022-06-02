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

        Visitor::create([
            'name' => 'Eko Marsudiono',
            'gender' => 'Male',
            'phone' => '082213134918',
            'email' => 'eko.mars@gmail.com',
            'photo' => '',
        ]);

        Visitor::create([
            'name' => 'Ervinda Rizky Safitri',
            'gender' => 'Female',
            'phone' => '082213134918',
            'email' => 'vinda.rs@gmail.com',
            'photo' => '',
        ]);

        Visitor::create([
            'name' => 'Ayu Rahayu',
            'gender' => 'Female',
            'phone' => '082213134918',
            'email' => 'ayu@gmail.com',
            'photo' => '',
        ]);

        Visitor::create([
            'name' => 'Edi Winarno',
            'gender' => 'Male',
            'phone' => '082213134918',
            'email' => 'edie.winz@gmail.com',
            'photo' => '',
        ]);

        Visitor::create([
            'name' => 'Winz.Art_',
            'gender' => 'Male',
            'phone' => '082213134918',
            'email' => 'winz.art@gmail.com',
            'photo' => '',
        ]);

        Device::create([
            'name' => 'Admin',
            'device' => 'Reader',
        ]);

        Device::create([
            'name' => 'Door_1',
            'device' => 'Reader',
        ]);

        Device::create([
            'name' => 'Door_2',
            'device' => 'Reader',
        ]);

        Device::create([
            'name' => 'Door_3',
            'device' => 'Reader',
        ]);
        Device::create([
            'name' => 'Door_4',
            'device' => 'Reader',
        ]);

        Device::create([
            'name' => 'Door_5',
            'device' => 'Reader',
        ]);

        Relation::create([
            'device_id' => '1',
            'visitor_id' => '1',
        ]);
        Relation::create([
            'device_id' => '2',
            'visitor_id' => '2',
        ]);
        Relation::create([
            'device_id' => '3',
            'visitor_id' => '3',
        ]);
        Relation::create([
            'device_id' => '1',
            'visitor_id' => '4',
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
            'device_id' => '1',
            'visitor_id' => '2',
        ]);
        Relation::create([
            'device_id' => '2',
            'visitor_id' => '3',
        ]);
        Relation::create([
            'device_id' => '3',
            'visitor_id' => '4',
        ]);
        Relation::create([
            'device_id' => '1',
            'visitor_id' => '5',
        ]);
    }
}
