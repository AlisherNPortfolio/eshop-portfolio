<?php

namespace App\Modules\User\database\seeders;

use App\Modules\User\Models\UserProfile;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'user_id' => 1,
                'full_name' => 'Admin Admin',
                'username' => 'admin',
                'phone' => '+998989998877',
                'region_id' => 1,
                'district_id' => 171
            ],
            [
                'user_id' => 2,
                'full_name' => 'User 1 User 1',
                'username' => 'user1',
                'phone' => '+998989997777',
                'region_id' => 1,
                'district_id' => 166
            ],
            [
                'user_id' => 3,
                'full_name' => 'User 2 User 2',
                'username' => 'user2',
                'phone' => '+998989998888',
                'region_id' => 1,
                'district_id' => 175
            ]
        ];

        foreach ($profiles as $profile) {
            UserProfile::create($profile);
        }
    }
}
