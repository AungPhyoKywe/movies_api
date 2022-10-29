<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Container\Container;
use Movies\Api\Movies\Models\Movies;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Movies\Api\Comments\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = new User();
        $this->movies = new Movies();
        $this->comments = new Comment();
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 50; $i++) {
            $this->movies->insert([
                'title' => $this->faker->title,
                'summary' => $this->faker->sentence(30),
                'image_path' =>  '',
                'generes' => $this->faker->randomElement(['Funny', 'Fighting', 'Horror', 'Drama']),
                'author' => $this->faker->name,
                'tags' => 'tag-' . $i,
                'imdb_rate' => $i,
                'pdf_file' => $this->faker->url,
                'created_at' => $this->faker->dateTime(),
                'updated_at' => $this->faker->dateTime()
            ]);

            $this->user->insert([
                'name' => $this->faker->name,
                'email' => $this->faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' =>  Hash::make('super123'), // password
                'remember_token' => Str::random(10),
                'created_at' => $this->faker->dateTime(),
                'updated_at' => $this->faker->dateTime()
            ]);

            $this->comments->insert([
                'movie_id' => $i,
                'email' => $this->faker->unique()->safeEmail(),
                'comment' => $this->faker->text,
                'created_at' => $this->faker->dateTime(),
                'updated_at' => $this->faker->dateTime()
            ]);
        }
    }
}
