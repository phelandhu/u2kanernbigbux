<?php

namespace App\Services;

use App\Models\Survey;
use Illuminate\Database\Eloquent\Collection;

class SurveyService
{
    public function getAll(): Collection
    {
        return Survey::all();
    }

    public function List(int $surveyId)
    {
        return Survey::with(['questions', 'questions.answer'])->where('id', $surveyId)->get();
    }

    public function getById(int $id)
    {
        return Survey::where('id', $id)->first();
        //return Question::find(1)->syrvey;
    }
}