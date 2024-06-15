<?php

namespace App\Http\Controllers;

use App\Services\CareerAptitudeTestQuestionService;
use Illuminate\Http\Request;

class CareerAptitudeTestQuestionController extends Controller
{
    public function __construct(
        private CareerAptitudeTestQuestionService $careerAptitudeTestQuestionService
    ){
    }

    public function index(){
        $questions = $this->careerAptitudeTestQuestionService->getTestQuestion();
        return view('test.career-aptitude', ["questions" => $questions]);
    }
}
