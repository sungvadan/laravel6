<?php

use App\Conversation;
use App\Reply;
use App\User;
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
        $users = factory(User::class, 5)->create();

        $conversions = factory(Conversation::class, 3)->create([
            'user_id' => 1
        ]);

        for ($i = 1; $i < 5; $i++) {
            factory(Reply::class)->create([
                'user_id' => $i,
                'conversation_id' => 1,
            ]);
        }
        // $this->call(UsersTableSeeder::class);
    }
}
