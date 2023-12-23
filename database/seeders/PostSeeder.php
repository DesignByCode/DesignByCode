<?php

    namespace Database\Seeders;

    use App\Models\Post;
    use Illuminate\Database\Seeder;

    class PostSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            $posts = [
                [
                    'title' => 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit',
                    'user_id' => 1,
                    'body' => "quia et suscipit suscipit recusandae consequuntur expedita et cum reprehenderit molestiae ut ut quas totam nostrum rerum est autem sunt rem eveniet architecto",
                ],
                [
                    'title' => 'qui est esse',
                    'user_id' => 1,
                    'body' => "quia et suscipit suscipit recusandae consequuntur expedita et cum reprehenderit molestiae ut ut quas totam nostrum rerum est autem sunt rem eveniet architecto",
                ],
                [
                    'title' => 'ea molestias quasi exercitationem repellat qui ipsa sit aut',
                    'user_id' => 1,
                    'body' => "quia et suscipit suscipit recusandae consequuntur expedita et cum reprehenderit molestiae ut ut quas totam nostrum rerum est autem sunt rem eveniet architecto",
                ],
                [
                    'title' => 'eum et est occaecati',
                    'user_id' => 1,
                    'body' => "quia et suscipit suscipit recusandae consequuntur expedita et cum reprehenderit molestiae ut ut quas totam nostrum rerum est autem sunt rem eveniet architecto",
                ],
                [
                    'title' => 'nesciunt quas odio',
                    'user_id' => 1,
                    'body' => "quia et suscipit suscipit recusandae consequuntur expedita et cum reprehenderit molestiae ut ut quas totam nostrum rerum est autem sunt rem eveniet architecto",
                ],
            ];


            foreach ($posts as $post) {
                Post::create($post);
            }

        }
    }
