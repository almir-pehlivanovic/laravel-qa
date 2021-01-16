<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use App\Models\Question;

class EditQuestion extends Component
{
    public $question;
    public $title;
    public $body;

    protected $rules = [
        'title' => 'required|max:255',
        'body'  => 'required',
    ];


    public function mount(Question $question)
    {
        $this->question = $question;
        $this->title    = $this->question->title;
        $this->body     = $this->question->body;
    }
    

    public function editQuestion()
    {
        if (! \Gate::allows('update-question', $this->question)) {
            abort(403);
        }

        $this->validate();
        
        $this->question->update([
            'title' => $this->title,
            'body'  => $this->body,
        ]);

        $this->emit('saved');
    }
    
    public function render()
    {

        return view('livewire.questions.edit-question');
    }
}
