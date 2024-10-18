<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'Uchenna John',
                'position' => 'Chief Marketing Officer',
            ],
            [
                'name' => 'Ohaeri Lilian',
                'position' => 'Chief Commercial Officer (CCO), Chief Operating Officer (COO), Software Tester',
            ],
            [
                'name' => 'Rabbiu Abubakar',
                'position' => 'Information Officer & Data Analyst',
            ],
            [
                'name' => 'Ibeh Stanley',
                'position' => 'Mobile App Developer & Operating Officer',
            ],
            [
                'name' => 'Enyidede Jonathan',
                'position' => 'Lead Creative Team & UI/UX Designer',
            ],
            [
                'name' => 'Nina Dike-Otutu',
                'position' => 'Customer Experience',
            ],
            [
                'name' => 'Okike Vitalis',
                'position' => 'Marketing Manager',
            ],
            [
                'name' => 'Charles Chibuzor',
                'position' => 'Graphics Designer',
            ],
            [
                'name' => 'Nze Livinus Ifeanyi',
                'position' => 'Chief Business Officer',
            ],
            [
                'name' => 'Michael Erastus',
                'position' => 'CEO & Backend Engineer',
            ],
            [
                'name' => 'Agboeze Ugonna',
                'position' => 'Legal Adviser',
            ],
        ];

        foreach ($teamMembers as $member) {
            Team::create($member);
        }
    }
}
