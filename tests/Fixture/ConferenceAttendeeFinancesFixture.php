<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConferenceAttendeeFinancesFixture
 */
class ConferenceAttendeeFinancesFixture extends TestFixture
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
                'finance_id' => 1,
                'add_conference_attendee_id' => 1,
                'cancel_conference_attendee_id' => 1,
                'creator' => 1,
                'created' => '2021-12-12 07:10:15',
                'modifier' => 1,
                'modified' => '2021-12-12 07:10:15',
            ],
        ];
        parent::init();
    }
}
