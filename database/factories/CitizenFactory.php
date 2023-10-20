<?php

namespace Database\Factories;

use Hamcrest\Type\IsBoolean;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitizenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        
        return [
            
        'nic' => $this->faker->unique()->regexify('[0-9]{9}[vV]'),
        'district' => $this->faker->word,
        'division' => $this->faker->word,
        'is_registered' => false,

        
        /*
        'fname' => $this->faker->firstName,
        'lname' => $this->faker->lastName,      
        'email' =>$this->faker->unique()->safeEmail,
        'dob' => $this->faker->date,
        'gender' => $this->faker->randomElement(['Male', 'Female']),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone' => $this->faker->phoneNumber,
        'address' => $this->faker->address,
        
*/

        ];
    }
}