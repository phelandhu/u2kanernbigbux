<?php

namespace App\Services;

use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionService
{
    public function List(int $surveyId)
    {
//        return Question::with('survey')->where('survey_id', $surveyId)->orderBy('question_number')->get();
        return Question::with('survey')->where('survey_id', $surveyId)->orderBy('question_number')->answer->get();
    }

    public function getById(int $id)
    {
        //return Question::where('id', $id)->with('answer')->first();
        return Question::find(1)->answer;
    }

}