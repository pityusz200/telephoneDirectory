<?php

namespace App\Livewire;

use App\Models\Email;
use App\Models\Email_and_User_Relation;
use App\Models\PhoneNumber;
use App\Models\PhoneNumber_and_User_Relation;
use App\Models\User;
use Livewire\Component;

class DeletUser extends Component
{
    public $form = array();
    public function delete()
    {
//        $this->validate();
        $emailId = Email::where('email', '=', $this->form['email'])->first();
        if ($emailId == null){
            return redirect()->to('/user-failed?type=not_found_user');
        }
        $emailId = $emailId->getAttribute('id');

        $emailAndUserRelation = Email_and_User_Relation::where('email_id', '=' ,$emailId)->get();
        if ($emailAndUserRelation == null){
            return redirect()->to('/user-failed?type=not_found_user');
        }

        $user_id = $emailAndUserRelation->first()->getAttribute('user_id');

        foreach ($emailAndUserRelation as $item) {
            $id = $item->getAttribute('id');
            Email_and_User_Relation::destroy($id);
            Email::destroy($id);
        }

        $phoneNumberAndUserRelation = PhoneNumber_and_User_Relation::where('user_id', '=' , $user_id)->get();
        if ($phoneNumberAndUserRelation == null){
            return redirect()->to('/user-failed?type=not_found_user');
        }

        foreach ($phoneNumberAndUserRelation as $item) {
            $id = $item->getAttribute('id');
            PhoneNumber_and_User_Relation::destroy($id);
            PhoneNumber::destroy($id);
        }

        $user = User::where('id', '=', $user_id)->first();
        $result = $user->delete();

        if ($result){
            return redirect()->to('/user-success?type=delete');
        }

        return redirect()->to('/user-failed?type=delete-fail');
    }

    public function render()
    {
        return view('livewire.delet-user');
    }
}
