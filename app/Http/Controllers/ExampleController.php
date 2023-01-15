<?php

use App\Models\User;

class UserStoreController
{
    public function store($password)
    {
       (new UserValidateAuth())->validateUser();
        $user=new User;
        $user->password=(new UsersPasswordHelper())->generatePasswordHard($password);
        $user->save();       
    }
   
}
class UserValidateAuth
{
    public function validateUser()
    {
        if(!Auth::id()==123456789){
            throw exception("Exception en auth");
        }
    }
}
class UsersPasswordHelper
{
    public function generatePassword($password)
    {
        return password_hash($password,PASSWORD_DEFAULT);
    }
    public function generatePasswordHard($password)
    {
        return password_hash($password,PASSWORD_BCRYPT);
    }
}