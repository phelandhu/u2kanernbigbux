<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Survey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $survey = Survey::create([
            'name' => 'U2KanErnBigBux'
        ]);

        $this->CreateQuestion($survey->id);
       
        $survey = Survey::create([
            'name' => 'TestSurvey1'
        ]);

        $survey_id = $survey->id;

        $question = Question::create([
            'survey_id' => $survey_id,
            'question_number' => 1,
            'question' => "You’ve just arrived in a new town. You immediately:"
        ]);
        $question_id = $question->id;
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'A',
            'answer' => "sigh in relief."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'B',
            'answer' => "strip off all clothes."
        ]);




        $survey = Survey::create([
            'name' => 'TestSurvey2'
        ]);

        $survey_id = $survey->id;

        $question = Question::create([
            'survey_id' => $survey_id,
            'question_number' => 1,
            'question' => "You’ve just arrived in a new town. You immediately:"
        ]);
        $question_id = $question->id;
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'A',
            'answer' => "sigh in relief."
        ]);



        $survey = Survey::create([
            'name' => 'TestSurvey3'
        ]);

        $survey_id = $survey->id;

        $question = Question::create([
            'survey_id' => $survey_id,
            'question_number' => 1,
            'question' => "You’ve just arrived in a new town. You immediately:"
        ]);
        $question_id = $question->id;
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'A',
            'answer' => "sigh in relief."
        ]);

    }

    private function CreateQuestion($survey_id)
    {

        $question = Question::create([
            'survey_id' => $survey_id,
            'question_number' => 1,
            'question' => "You’ve just arrived in a new town. You immediately:"
        ]);
        $question_id = $question->id;
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'A',
            'answer' => "sigh in relief."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => "B",
            'answer' => "find the nearest tavern."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'C',
            'answer' => "strip down to your underwear."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'D',
            'answer' => "do all of the above, to start with."
        ]);

        $question = Question::create([
            'survey_id' => $survey_id,
            'question_number' => 2,
            'question' => "Wizards are:"
        ]);
        $question_id = $question->id;
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'A',
            'answer' => "snappy dressers."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => "B",
            'answer' => "valuable allies."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'C',
            'answer' => "awful darn smart."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'D',
            'answer' => "cute on the end of a spear."
        ]);

        $question = Question::create([
            'survey_id' => $survey_id,
            'question_number' => 3,
            'question' => "What’s the best way to test for trapdoors?"
        ]);
        $question_id = $question->id;
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'A',
            'answer' => "With eyes shut."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'B',
            'answer' => "Make the half-ogre go first."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'C',
            'answer' => "Jump up and down a lot."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'D',
            'answer' => "Burn the place to the ground."
        ]);

        $question = Question::create([
            'survey_id' => $survey_id,
            'question_number' => 4,
            'question' => "It’s late at night, the moon is full, and you notice that your partner is turning hairy. What do you do?"
        ]);
        $question_id = $question->id;
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'A',
            'answer' => "Compliment him on his coiffure."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'B',
            'answer' => "Whip out the scissors and wolvesbane."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'C',
            'answer' => "Check your pack for doggie chow."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'D',
            'answer' => "Join him."
        ]);

        $question = Question::create([
            'survey_id' => $survey_id,
            'question_number' => 5,
            'question' => "A portable hole:"
        ]);
        $question_id = $question->id;
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'A',
            'answer' => "a day keeps the ogre away."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'B',
            'answer' => "comes in handy in the king’s treasury."
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'C',
            'answer' => "What?"
        ]);
        Answer::create ([
            'question_id' => $question_id,
            'placement' => 'D',
            'answer' => "holds a lot of beer."
        ]);

    }
}
