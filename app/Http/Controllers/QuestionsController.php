<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questions.index', compact('questions'));
    }

    public function allQuestions()
    {
        
        $questions =  Question::with('user')->latest()->get();
        return response()->json($questions);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create question');
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create question');
        $this->validateQuestion($request);
        $question = Auth()->user()->questions()->create($request->all());
        return vire('questions.show', compact('question'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::with('user', 'comments')->findOrFail($id);
        // return $question;
        // return response()->json($question,201);
        return view('questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $this->authorize('edit_question',$question);
        return view('questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateQuestion($request);
        $question = Question::findOrFail($id);
        $this->authorize('edit_question',$question);
        $question->update($request->all());
        return response()->json($question,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $this->authorize('delete_question',$question);
        $question->delete();
        return redirect(route('questions.index'));
    }

    public function validateQuestion(Request $request)
    {
        $validate = $this->validate(
            $request,
            [
                'title' => 'required|string|min:3', 
                'body' => 'required|string|min:10'
            ],
            [
                'required' => 'This Filed is required',
                'title.min' => 'this filled should be at least 3 chars',
                'body.min' => 'this filled should be at least 10 chars',
            ]
        );
    }
}
