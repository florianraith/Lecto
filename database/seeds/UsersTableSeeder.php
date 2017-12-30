<?php

use App\Message;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(User::class, 5)->create()->each(function(User $user) {
            factory(Message::class, 10)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
