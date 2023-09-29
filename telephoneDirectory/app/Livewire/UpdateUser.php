<?php

namespace App\Livewire;

use App\Models\Email;
use App\Models\Email_and_User_Relation;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UpdateUser extends Component
{
    public $form = array();

//    protected $rules = [
//        'form.fname' => 'required|min:6',
//    ];

    public function update()
    {
//        $this->validate();
        $emailId = Email::where('email', '=', $this->form['email'])->first();
        if ($emailId == null){
            return redirect()->to('/user-failed?type=not_found_user');
        }
        $emailId = $emailId->getAttribute('id');

        $user_id = Email_and_User_Relation::where('email_id', '=' ,$emailId)->pluck('user_id')->first();

        if ($user_id == null){
            return redirect()->to('/user-failed?type=not_found_user');
        }

        $user = User::where('id', '=', $user_id)->first();

        $user->fname = $this->form['fname'];
        $user->lname = $this->form['lname'];

        $result = $user->update(['fname' => $user->fname, 'lname' => $user->lname]);

        if ($result){
            return redirect()->to('/user-success?type=update');
        }

        return redirect()->to('/user-failed?type=update-fail');
    }

    public function addEmail()
    {
//        $this->validate();
        $emailId = Email::where('email', '=', $this->form['plusEmail'])->first();

        if ($emailId != null){
            return redirect()->to('/user-failed?type=found_email-fail');
        }

        $user = User::where('fname', '=', $this->form['plusFname'])->where('lname', '=', $this->form['plusLname'])->first();

        if ($user == null){
            return redirect()->to('/user-failed?type=not_found_user');
        }

        $user_id = $user->getAttribute('id');
        $lastEmailId = DB::table('emails')->pluck('id');
        $lastEmailId = $lastEmailId != null ? $lastEmailId->last() : 0;

        $result = $user->email()->save(
            new Email(
                ['email' => $this->form['plusEmail'], 'user_id' => $user_id, 'email_id' => $lastEmailId + 1]),
                ['user_id' => $user_id, 'email_id' => $lastEmailId + 1]);

        if ($result){
            return redirect()->to('/user-success?type=update');
        }

        return redirect()->to('/user-failed?type=update-fail');
    }
    public function render()
    {
        return view('livewire.update-user');
    }
}
