<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegistrationTeamConferenceLocalitiesFixture
 */
class RegistrationTeamConferenceLocalitiesFixture extends TestFixture
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
                'registration_team_id' => 1,
                'conference_locality_id' => 1,
                'creator' => 1,
                'created' => '2021-12-12 07:10:25',
                'modifier' => 1,
                'modified' => '2021-12-12 07:10:25',
            ],
        ];
        parent::init();
    }
}
