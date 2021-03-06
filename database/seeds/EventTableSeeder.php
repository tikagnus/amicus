<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{

    public function run()
    {
        //DB::table('events')->delete();

        // aniversary
        \App\Amicus\EventHelper::create(array(
            'name' => 'Aniversare Amicus',
            'start_date' => \Carbon\Carbon::now(),
            'end_date' => \Carbon\Carbon::now()->addDays(100),
            'event_type_id' => 20,
            'active' => 1,
            'subsidiary_id' => 1,
            'address' => 'Adresa'
        ));

        // project
        \App\Amicus\EventHelper::create(array(
            'name' => 'Curatenie in Parcul Carol',
            'start_date' => \Carbon\Carbon::now(),
            'end_date' => \Carbon\Carbon::now()->addDays(100),
            'event_type_id' => 20,
            'active' => 1,
            'subsidiary_id' => 2,
            'address' => 'Adresa'

        ));
    }
}