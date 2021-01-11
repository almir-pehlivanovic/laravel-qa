<?php

namespace App\Http\Livewire\Questions;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Question;

class AddQuestion extends Component
{
    public $title;
    public $body;
 

    protected $rules = [
        'title' => 'required|max:255',
        'body'  => 'required',
    ];
    
    public function addQuestion()
    {

        // validation of the form
        $this->validate();

        //insert the date in to the table
        Question::create([
            'title'     => $this->title,
            'body'      => $this->body,
            'user_id'   => Auth::user()->id,
        ]);

        //emit the message
        $this->title = '';
        $this->body  = '';

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.questions.add-question');
    }
}
