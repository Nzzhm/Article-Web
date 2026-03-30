<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
Use illuminate\support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function Symfony\Component\Clock\now;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $udin = User::create([
            'name' => 'Udin Petot',
            'username' => 'udaradingin',
            'email' => 'udyn@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([UserSeeder::class, CategorySeeder::class]);
        Post::factory(50)->recycle([
            // Category::factory(5)->create(),
            Category::all(),
            $udin,
            User::all()
            // User::factory(10)->create() ini di pindah ke UserSeeder
        ])->create();

        //untuk menjalankannya di terminal ketik : php artisan migrate:fresh --seed
    }
}
