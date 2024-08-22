<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\ListQuestionsRequest;
use App\Services\SurveyService;
use App\Services\QuestionService;
use Illuminate\Http\JsonResponse;

class QuestionController extends Controller
{
    protected ?QuestionService $questionService = null;
    
    public function __construct(QuestionService $questionService)
    {
        $this->questionService = $questionService;
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
   
        $questions = $this->questionService->list($request->get('survey_id'));

        return response()->json([
            'success' => true,
            'questions' => $questions,
            'message' => "Survey retrieved successfully.",
        ]); // 200
   
    }
    
    public function get(int $id): JsonResponse
    {
        $question = $this->questionService->getById($id);

        if($question) {
            return response()->json([
                'success' => true,
                'question' => $question,
                'message' => "Question retrieved successfully.",
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
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Questions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Questions $questions)
    {
        //
    }
}
