<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConferenceDeadlineExceptionsFixture
 */
class ConferenceDeadlineExceptionsFixture extends TestFixture
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
                'conference_id' => 1,
                'conference_deadline_id' => 1,
                'date' => '2021-12-12',
                'time' => '07:10:16',
                'creator' => 1,
                'created' => '2021-12-12 07:10:16',
                'modifier' => 1,
                'modified' => '2021-12-12 07:10:16',
            ],
        ];
        parent::init();
    }
}
