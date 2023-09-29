<?php

namespace App\Livewire;

use App\Models\Email;
use App\Models\Email_and_User_Relation;
use App\Models\PhoneNumber;
use App\Models\PhoneNumber_and_User_Relation;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUser extends Component
{
    use WithFileUploads;
    public $form = array();

//    protected $rules = [
//        'form.fname' => 'required|min:6',
//    ];

    public function save()
    {
//        $this->validate();
        $user = new User($this->form);

        $result = $user->save();
        $id = $user->getAttribute('id');
        $lastEmailId = DB::table('emails')->pluck('id');
        $lastPhoneNumberId = DB::table('phone_numbers')->pluck('id');

        $lastEmailId = $lastEmailId != null ? $lastEmailId->last() : 0;
        $lastPhoneNumberId = $lastPhoneNumberId != null ? $lastPhoneNumberId->last() : 0;

        $user->phoneNumber()->save(
            new PhoneNumber(
                ['phone_number' => $this->form['phone_number'], 'user_id' => $id, 'phone_number_id' => $lastPhoneNumberId + 1]),
                ['user_id' => $id, 'phone_number_id' => $lastPhoneNumberId + 1]);

        $user->email()->save(
            new Email(
                ['email' => $this->form['email'], 'user_id' => $id, 'email_id' => $lastEmailId + 1]),
                ['user_id' => $id, 'email_id' => $lastEmailId + 1]);

        if ($result){
            return redirect()->to('/user-success?type=create');
        }

        return redirect()->to('/user-failed?type=create-fail');
    }

    public function addPhoto(){
        $this->validate([
            'form.photo' => 'image|max:1024', // 1MB Max
        ]);

        $path = $this->form['photo']->store('photos');

        $user = Email::where('email', '=', $this->form['emailPhoto'])->first();

        $photo = new Photo(['user_id' => $user->getAttribute('id'), 'path' => $path]);
        $photo->save();

        if ($path){
            return redirect()->to('/user-success?type=upload');
        }

        return redirect()->to('/user-failed?type=upload-fail');
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
