<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $this->call('UsersSeed');

        $data = [
            [
                'id' => 1,
                'user_id' => 1,
                'title' => 'First Post 231',
                'slug' => 'First-Post-231',
                'body' => 'This is the first post.',
                'published' => 1,
                'created' => '2023-07-19 10:00:48',
                'modified' => '2023-07-19 04:40:20',
            ],
            [
                'id' => 7,
                'user_id' => 1,
                'title' => 'test asdals',
                'slug' => 'test-asdals',
                'body' => 'wowoa hehehe',
                'published' => 0,
                'created' => '2023-07-19 06:54:07',
                'modified' => '2023-07-19 06:54:07',
            ],
            [
                'id' => 8,
                'user_id' => 2,
                'title' => '123asd1 123123',
                'slug' => '123asd1-123123',
                'body' => 'hahaaaa211112a sdas',
                'published' => 0,
                'created' => '2023-07-20 10:16:21',
                'modified' => '2023-07-20 10:16:21',
            ],
            [
                'id' => 9,
                'user_id' => 2,
                'title' => 'khoa tran ba',
                'slug' => 'khoa-tran-ba',
                'body' => 'asdasdaaaaaaaaaaa asd',
                'published' => 0,
                'created' => '2023-07-21 07:50:45',
                'modified' => '2023-07-21 07:50:45',
            ],
            [
                'id' => 10,
                'user_id' => 2,
                'title' => 'khoa tb 2123',
                'slug' => 'khoa-tb-2123',
                'body' => 'khoasda sda sda sd123',
                'published' => 0,
                'created' => '2023-07-21 07:52:15',
                'modified' => '2023-07-21 07:52:15',
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();

    }
}
