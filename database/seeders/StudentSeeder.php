<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    // {
    //     Student::factory(10)->create();
    // }

    {
        $students = [
            [
                'fname' => 'Rea Jen',
                'lname' => 'Bahenting',
                'course' => 'BSIT',
                'year' => '3',
                'email' => 'reajenbahenting829@gmail.com',
                'phone' => '09457562829',
            ],
            [
                'fname' => 'Veronica',
                'lname' => 'Harley',
                'course' => 'BSED',
                'year' => '2',
                'email' => 'jenruy123@gmail.com',
                'phone' => '09357562827',
            ],
            [
                'fname' => 'Elgene',
                'lname' => 'Buaya',
                'course' => 'BSCRIM',
                'year' => '1',
                'email' => 'archer.tarius@gmail.com',
                'phone' => '09617562846',
            ],
            [
                'fname' => 'Leonor',
                'lname' => 'Calapuan',
                'course' => 'BSHM',
                'year' => '1',
                'email' => 'leonorcalapuan@gmail.com',
                'phone' => '09617562846',
            ],
            [
                'fname' => 'Sarah Jane',
                'lname' => 'Bahenting',
                'course' => 'BSED',
                'year' => '4',
                'email' => 'sarahjanebahinting@gmail.com',
                'phone' => '09717562846',
            ],
            [
                'fname' => 'Grace',
                'lname' => 'Buaya',
                'course' => 'BSN',
                'year' => '1',
                'email' => 'gracebuaya@gmail.com',
                'phone' => '09817262846',
            ],
            [
                'fname' => 'Rea Lyn',
                'lname' => 'Maldura',
                'course' => 'BSA',
                'year' => '1',
                'email' => 'realynmadura@gmail.com',
                'phone' => '09417567846',
            ],
            [
                'fname' => 'Ronald',
                'lname' => 'Cabahug',
                'course' => 'BSCRIM',
                'year' => '2',
                'email' => 'ronaldocabahug@gmail.com',
                'phone' => '09617562846',
            ],

            [
                'fname' => 'Jessica',
                'lname' => 'Reyes',
                'course' => 'BSBA',
                'year' => '3',
                'email' => 'jessicareyes@gmail.com',
                'phone' => '09217542846',
            ],
            [
                'fname' => 'Recardo',
                'lname' => 'Patac',
                'course' => 'BSIT',
                'year' => '3',
                'email' => 'recardopatac@gmail.com',
                'phone' => '09217542846',
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
