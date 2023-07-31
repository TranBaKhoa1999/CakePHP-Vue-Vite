<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
        $data = [
            [
                'id' => 1,
                'email' => 'cakephp@example.com',
                'password' => '$2y$10$vBlO9hEtugg2wgo73rnGou2apADOOlwmZVTL1NeXqKDrc0Keu7zMW',
                'created' => '2023-07-19 10:00:48',
                'modified' => '2023-07-20 07:59:35',
            ],
            [
                'id' => 2,
                'email' => 'khoatb@younetgroup.com',
                'password' => '$2y$10$4QOu7IseWmMn.8PzkMG5/OcBnfiNAvu/dOLDzf5GLH1KnJZWdaLSe',
                'created' => '2023-07-20 03:46:07',
                'modified' => '2023-07-20 08:17:43',
            ],
            [
                'id' => 3,
                'email' => 'admin@avp.comkhoatb',
                'password' => '$2y$10$0NxClhp3MwNl6u1xdyFuxeX3t3TIZsdnam14eQp2CIQjdxA7FMoTi',
                'created' => '2023-07-20 07:47:56',
                'modified' => '2023-07-20 08:19:04',
            ],
            [
                'id' => 4,
                'email' => 'admin@sexydate.plkhoatb',
                'password' => '$2y$10$fs2XUW5gW5ppWkvEGwNdgeytAdD70Y9827fYL3U5Hlgu8.dmcd7Ny',
                'created' => '2023-07-20 08:18:32',
                'modified' => '2023-07-20 08:18:52',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();

    }
}
