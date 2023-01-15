<?php
interface Users
{
    public function sayHello();
}

class NaturalUser implements Users
{
    public function sayHello()
    {
        return 'Hello world from natural user';
    }
}
class BussinesUser implements Users
{
    public function sayHello()
    {
        return 'Hello world from bussines user';
    }
}
class AdminUser implements Users
{
    public function sayHello()
    {
        return 'Hello world from admin user';
    }
}

class UsersImplementation
{
    public function identifyUser(Users $users)
    {
        $users->sayHello();
    }
}
// class Users
// {
//     public function identifyUser($user)
//     {
//         switch($user){
//             case 'natural':
//                 $this->sayHello('natural user');
//                 break;
//             case 'bussiness':
//                 $this->sayHello('bussiness user');
//                 break;
//             case 'admin':
//                 $this->sayHello('admin user');
//                 break;
//         }
//     }
//     public function sayHello($user)
//     {
//         return 'Hello world from '.$user;
//     }
// }