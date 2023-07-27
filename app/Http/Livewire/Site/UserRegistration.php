<?php

namespace App\Http\Livewire\Site;

use App\Models\User;
use App\Mail\TestMail;
use App\Models\Profile;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Events\UserRegistered;
use App\Mail\UserRegisteredMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use App\Mail\UserRegistered as MailUserRegistered;
use App\Models\Governate;

class UserRegistration extends Component
{
    public Profile $profile;
    public $password;
    public $password_confirmation;
    public $date_of_birth;
    public $governates;
    public $area;
    public function mount(Profile $profile)
    {
        $this->profile = new Profile();
        $this->date_of_birth = '';
        $this->governates = Governate::all();
    }

    protected function rules()
    {
        return [
            'profile.name' =>['required'],
            'profile.email' =>['required','unique:users,email','email'],
            'profile.phone' =>['required','numeric'],
            'profile.gender' =>['required'],
            'password' =>['required','confirmed','min:8'],
            'date_of_birth' =>['required'],
            'area' =>['required'],

        ];
    }

    public function register()
    {
        $this->validate();
        DB::transaction(function () {
            $new_user = User::create([
                'name' => $this->profile->name,
                'email' => $this->profile->email,
                'password' => $this->password
            ]);
            $this->profile->user_id = $new_user->id;
            $this->profile->dob = $this->date_of_birth;
            $new_user->assignRole('user');
            $new_user->area_id = $this->area;
            $new_user->save();
            $this->profile->save();
            event(new UserRegistered($new_user));
            $this->redirect(route('site.registration-thanks'));
            $this->resetFields();
        });

    }

    public function render()
    {
        return view('livewire.site.user-registration');
    }

    private function perform_password_reset()
    {
        $status = Password::sendResetLink(
            ['email' => $this->profile->email]
        );
     
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    private function resetFields()
    {
        // $this->user = new User();
        $this->profile = new Profile();
        $this->password = '';
        $this->password_confirmation = '';
    }

}
