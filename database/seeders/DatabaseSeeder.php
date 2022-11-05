<?php

namespace Database\Seeders;

use App\Models\Meetup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Meetup::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Meetup::create([
        //     'name' => 'Advanced Trail Ride',
        //     'tags' => 'gravel, advanced, london',
        //     'host' => 'SW1 Gravel Riders',
        //     'location' => 'South West London',
        //     'date' => 'Mon 4 Dec - 1:00PM',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quam eum soluta voluptatem repellat ex cumque doloremque? Perspiciatis harum atque nostrum reiciendis a nisi nam nulla facere sunt! Velit, voluptas?'
        // ]);
        // Meetup::create([
        //     'name' => 'Sunday Cruise',
        //     'tags' => 'vintage, leisure, london',
        //     'host' => 'Penny Farthing Club',
        //     'location' => 'North London',
        //     'date' => 'Sunday 24 Dec - 6:00PM',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quisquam enim fugit, laborum, unde asperiores ex minus saepe deserunt, molestias repellendus facilis maxime odit commodi dignissimos perspiciatis eaque delectus id.'
        // ]);
    }
}
