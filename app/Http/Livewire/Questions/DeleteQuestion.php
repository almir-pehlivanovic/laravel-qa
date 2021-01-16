<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Question;

class DeleteQuestion extends Component
{
    public $confirmingQuestionDeletion = false;

    public $password = '';

    public $question;

    public function mount(Question $question)
    {
        $this->question = $question;
    }

    public function confirmQuestionDeletion()
    {
        if (! \Gate::allows('delete-question', $this->question)) {
            abort(403);
        }
        
        $this->resetErrorBag();

        $this->password = '';

        $this->dispatchBrowserEvent('confirming-delete-question');

        $this->confirmingQuestionDeletion = true;
    }

    public function deleteQuestion()
    {
        $this->resetErrorBag();

        if (! Hash::check($this->password, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'password' => [__('This password does not match our records.')],
            ]);
        }

        $this->question->delete();

        return redirect('/questions');
    }

    public function render()
    {
        return view('livewire.questions.delete-question');
    }
}
