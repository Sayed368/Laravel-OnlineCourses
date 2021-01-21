<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            // 'specialist' => ['required', 'string', 'max:255'],
            // 'description' => ['required', 'string', 'max:255'],
            
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
        // if($input->hasFile('profile_photo_path')) {
        //     $image = $input->file('profile_photo_path');
        //     $filename =rand() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('userimg/'), $filename);
        //     $filename='userimg/'.$filename;
           
        // }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            // 'specialist' => $input['specialist'],
            // 'description' => $input['description'],
            'phone' => $input['phone'],
            'university' => $input['university'],
            'gender' => $input['gender'],
            'dob' => $input['dob'],
            'address' => $input['address'],
            // "profile_photo_path"=>$input['profile_photo_path'],
        ]);
        
    }
}
