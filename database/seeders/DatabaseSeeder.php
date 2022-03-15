<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Alex Putra',
        //     'email' => 'alex@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque perferendis labore quasi dolore magnam officia id assumenda ad quia, sequi eum obcaecati fuga? Alias, id! Doloribus eum sed totam delectus sunt ipsam magni deserunt temporibus vitae nobis, eveniet adipisci pariatur repudiandae cumque quia inventore asperiores! Fugit nobis explicabo ut exercitationem beatae possimus totam inventore, odio esse id magni laboriosam, corrupti nesciunt obcaecati. Sit quas repellat dolores, veritatis quae vero dolore molestiae dolorum delectus voluptas consectetur, animi amet qui explicabo molestias ea asperiores provident quaerat. Molestiae, neque. Dolore itaque dolor vitae minima, aut expedita, molestiae at consequatur totam dolorem, cumque exercitationem.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque perferendis labore quasi dolore magnam officia id assumenda ad quia, sequi eum obcaecati fuga? Alias, id! Doloribus eum sed totam delectus sunt ipsam magni deserunt temporibus vitae nobis, eveniet adipisci pariatur repudiandae cumque quia inventore asperiores! Fugit nobis explicabo ut exercitationem beatae possimus totam inventore, odio esse id magni laboriosam, corrupti nesciunt obcaecati. Sit quas repellat dolores, veritatis quae vero dolore molestiae dolorum delectus voluptas consectetur, animi amet qui explicabo molestias ea asperiores provident quaerat. Molestiae, neque. Dolore itaque dolor vitae minima, aut expedita, molestiae at consequatur totam dolorem, cumque exercitationem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque perferendis labore quasi dolore magnam officia id assumenda ad quia, sequi eum obcaecati fuga? Alias, id! Doloribus eum sed totam delectus sunt ipsam magni deserunt temporibus vitae nobis, eveniet adipisci pariatur repudiandae cumque quia inventore asperiores! Fugit nobis explicabo ut exercitationem beatae possimus totam inventore, odio esse id magni laboriosam, corrupti nesciunt obcaecati. Sit quas repellat dolores, veritatis quae vero dolore molestiae dolorum delectus voluptas consectetur, animi amet qui explicabo molestias ea asperiores provident quaerat. Molestiae, neque. Dolore itaque dolor vitae minima, aut expedita, molestiae at consequatur totam dolorem, cumque exercitationem.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque perferendis labore quasi dolore magnam officia id assumenda ad quia, sequi eum obcaecati fuga? Alias, id! Doloribus eum sed totam delectus sunt ipsam magni deserunt temporibus vitae nobis, eveniet adipisci pariatur repudiandae cumque quia inventore asperiores! Fugit nobis explicabo ut exercitationem beatae possimus totam inventore, odio esse id magni laboriosam, corrupti nesciunt obcaecati. Sit quas repellat dolores, veritatis quae vero dolore molestiae dolorum delectus voluptas consectetur, animi amet qui explicabo molestias ea asperiores provident quaerat. Molestiae, neque. Dolore itaque dolor vitae minima, aut expedita, molestiae at consequatur totam dolorem, cumque exercitationem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque perferendis labore quasi dolore magnam officia id assumenda ad quia, sequi eum obcaecati fuga? Alias, id! Doloribus eum sed totam delectus sunt ipsam magni deserunt temporibus vitae nobis, eveniet adipisci pariatur repudiandae cumque quia inventore asperiores! Fugit nobis explicabo ut exercitationem beatae possimus totam inventore, odio esse id magni laboriosam, corrupti nesciunt obcaecati. Sit quas repellat dolores, veritatis quae vero dolore molestiae dolorum delectus voluptas consectetur, animi amet qui explicabo molestias ea asperiores provident quaerat. Molestiae, neque. Dolore itaque dolor vitae minima, aut expedita, molestiae at consequatur totam dolorem, cumque exercitationem.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque perferendis labore quasi dolore magnam officia id assumenda ad quia, sequi eum obcaecati fuga? Alias, id! Doloribus eum sed totam delectus sunt ipsam magni deserunt temporibus vitae nobis, eveniet adipisci pariatur repudiandae cumque quia inventore asperiores! Fugit nobis explicabo ut exercitationem beatae possimus totam inventore, odio esse id magni laboriosam, corrupti nesciunt obcaecati. Sit quas repellat dolores, veritatis quae vero dolore molestiae dolorum delectus voluptas consectetur, animi amet qui explicabo molestias ea asperiores provident quaerat. Molestiae, neque. Dolore itaque dolor vitae minima, aut expedita, molestiae at consequatur totam dolorem, cumque exercitationem.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque perferendis labore quasi dolore magnam officia id assumenda ad quia, sequi eum obcaecati fuga? Alias, id! Doloribus eum sed totam delectus sunt ipsam magni deserunt temporibus vitae nobis, eveniet adipisci pariatur repudiandae cumque quia inventore asperiores! Fugit nobis explicabo ut exercitationem beatae possimus totam inventore, odio esse id magni laboriosam, corrupti nesciunt obcaecati. Sit quas repellat dolores, veritatis quae vero dolore molestiae dolorum delectus voluptas consectetur, animi amet qui explicabo molestias ea asperiores provident quaerat. Molestiae, neque. Dolore itaque dolor vitae minima, aut expedita, molestiae at consequatur totam dolorem, cumque exercitationem.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque perferendis labore quasi dolore magnam officia id assumenda ad quia, sequi eum obcaecati fuga? Alias, id! Doloribus eum sed totam delectus sunt ipsam magni deserunt temporibus vitae nobis, eveniet adipisci pariatur repudiandae cumque quia inventore asperiores! Fugit nobis explicabo ut exercitationem beatae possimus totam inventore, odio esse id magni laboriosam, corrupti nesciunt obcaecati. Sit quas repellat dolores, veritatis quae vero dolore molestiae dolorum delectus voluptas consectetur, animi amet qui explicabo molestias ea asperiores provident quaerat. Molestiae, neque. Dolore itaque dolor vitae minima, aut expedita, molestiae at consequatur totam dolorem, cumque exercitationem.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
