<?php
use App\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Sport di squadra','Sport singoli','Sport con veicoli'
        ];

        foreach ($tags as $name) {
            $tag = new Tag();
            $tag->name = $name;

            $tag->save();
        };
    }
}
