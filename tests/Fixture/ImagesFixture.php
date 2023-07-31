<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImagesFixture
 */
class ImagesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'destination' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-07-24 07:40:41',
                'modified' => '2023-07-24 07:40:41',
            ],
        ];
        parent::init();
    }
}
