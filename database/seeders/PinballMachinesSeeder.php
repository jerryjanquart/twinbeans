<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PinballMachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pinball_machines')->insert([

            'name' => 'Firepower',
            'slug' => 'firepower',
            'year' => '1980',
            'manufacturer' => 'Williams', 
            'headline' => 'The ultimate space machine', 
            'about' => 'From the very first words at the start of each game . . . to "You are destroyed" if the game is tilted . . . and all other messages of daring and challenge during play . . . the player is urged on with a wild momentum that builds and builds!', 
            'active' => 'true'

        ]);

        DB::table('pinball_machines')->insert([

            'name' => 'Scorpion',
            'slug' => 'scorpion',
            'year' => '1980',
            'manufacturer' => 'Williams', 
            'headline' => 'There\'s no time to lose!', 
            'about' => 'Time. Ticking away precious seconds. Seconds that call for supreme strategy. Seconds that can mean the ultimate victory . . . or a devastating defeat!', 
            'active' => 'true'

        ]);

        DB::table('pinball_machines')->insert([

            'name' => 'Black Knight',
            'slug' => 'black-knight',
            'year' => '1980',
            'manufacturer' => 'Williams', 
            'headline' => 'Introducing Black Knight, the 1st multi-level pinball (and that\'s just the beginning)', 
            'about' => 'The Black Knight is a milestone in the evolution of pinball. It introduced many of new designs to pinball. It was the first game with the patented "Magna-Save" feature. It was the first with a two-level playing field, and faceted inserts in the playfield. ', 
            'active' => 'true'

        ]);

        DB::table('pinball_machines')->insert([

            'name' => 'Laser Ball',
            'slug' => 'laser-ball',
            'year' => '1979',
            'manufacturer' => 'Williams', 
            'headline' => 'Streak through the stars!', 
            'about' => 'Drop L-A-S-E-R targets and build increasing value to 20,000 and possible extra ball and special! Drop B-A-L-L targets and score 10,000 points for every "Laser Beam" lit! Advance the Bonus Multiplier with the super-charged hole kicker or by streaking through the target lane. Laser Ball radiates high scoring power!', 
            'active' => 'true'

        ]);

        DB::table('pinball_machines')->insert([

            'name' => 'Sorcerer',
            'slug' => 'sorcerer',
            'year' => '1989',
            'manufacturer' => 'Williams', 
            'headline' => 'Let the Sorcerer work a little magic for you.', 
            'about' => 'Once the sorcerer is challenged, his special power proves to bea a mighty force that must be reckoned with! The playfield embodies his very being and his penetrating stare cannot be avoided. Following every move, his glare intensifies with the game play, and hypnotizes as he speaks! There can be no doubt, the Sorcerer is a creature who cannot be denied.', 
            'active' => 'true'

        ]);

        DB::table('pinball_machines')->insert([

            'name' => 'Bad Cats',
            'slug' => 'bad-cats',
            'year' => '1989',
            'manufacturer' => 'Williams', 
            'headline' => 'Pinball purr-fection.', 
            'about' => 'Only Bad Cats brings to life some classic ingredients of the 60s, such as backglass animation, with the flair of the 90s for a state-of-the-art pinball attraction that could only come from the wizards at Williams.', 
            'active' => 'true'

        ]);

        DB::table('pinball_machines')->insert([

            'name' => 'Who Dunnit',
            'slug' => 'who-dunnit',
            'year' => '1995',
            'manufacturer' => 'Bally', 
            'headline' => 'Bally embroiled in murder mystery, four suspects being questioned.', 
            'about' => '"Several people seen at the casino around the time of the murder are wanted for questioning," said Police Commander Joe Dillon. "Who Dunnit is an engaging mystery to solve," Spode added. "You need to combine clues you discover with background information on each of the four suspects to close the case."', 
            'active' => 'true'

        ]);

        DB::table('pinball_machines')->insert([

            'name' => 'Cactus Canyon',
            'slug' => 'cactus-canyon',
            'year' => '2021',
            'manufacturer' => 'Chicago Gaming Co.', 
            'headline' => 'Do you have what it takes to save the day?', 
            'about' => 'Cactus Canyon Remake puts you in the game as the future lawman of the old west town of Cactus Canyon. Save the town bank from a robbery, show off your skills as an expert marksman, even tame wild broncos and don\'t forget to save Polly Peril from the train! Cactus Canyon is the fourth game in the exciting line of remakes of the greatest Bally/Williams pinball machines. ', 
            'active' => 'true'

        ]);

        
    }
}
