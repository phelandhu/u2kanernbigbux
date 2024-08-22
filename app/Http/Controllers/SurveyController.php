<?php

namespace App\Http\Controllers;

use App\Http\Requests\Survey\ListSurveysRequest;
use App\Http\Requests\Question\ListQuestionsRequest;
use App\Services\SurveyService;
use App\Services\QuestionService;
use Illuminate\Http\JsonResponse;

class SurveyController extends Controller
{
    protected ?SurveyService $surveyService = null;

    public function __construct(SurveyService $surveyService)
    {
        $this->surveyService = $surveyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function list(ListQuestionsRequest $request): JsonResponse
    {
        $survey = $this->surveyService->list($request->get('survey_id'));

        $answers = '';

        return response()->json([
            'success' => true,
            'survey' => $survey,
            'message' => "Survey retrieved successfully.",
        ]); // 200
   
    }
    
    public function get(int $id): JsonResponse
    {
        $survey = $this->surveyService->getById($id);

        if($survey) {
            return response()->json([
                'success' => true,
                'survey' => $survey,
                'message' => "Survey retrieved successfully.",
            ]); // 200
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
