<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['html', 'css', 'javascript', 'vue', 'php', 'laravel'];
        foreach ($technologies as $item) {
            $new_type = new Technology();
            $new_type->name = $item;
            $new_type->slug = Str::slug($new_type->name, '-');
            $new_type->save();
        }
    }
}
