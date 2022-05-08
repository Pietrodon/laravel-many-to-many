<?php


use App\Post;
use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $categories=Category::all();
        $categoriesId = $categories->pluck('id')->all();

        $tags = Tag::all();
        $tagsId = $tags->pluck('id')->all();


        for ($i=0; $i < 25 ; $i++) {


        $post = new Post();
        $post->title = $faker->words(10, true);
        $post->slug = Str::slug($post->title);
        $post->description = $faker->words(50, true);
        $post->category_id = $faker->optional()->randomElement( $categoriesId );
        $post->published_at = $faker->dateTimeThisCentury();


        $post->save();
        }
    }
}
