<?php

interface ConnectionAdapter
{
    public function getAllUsers(): ?array;

}

class EloquentAdapter implements ConnectionAdapter
{
    public function getAllUsers(): ?array
    {
        $users=User::all();
        return [
            "users"=>$users
        ];    

    }
}
class storeProcedureAdapter implements ConnectionAdapter
{
    public function getAllUsers(): ?array
    {   
        $users=DB::execute("CALL lsp_call_all_users()");
        return [
            "users"=>$users
        ];    
    }
}



class IndexController
{
    private $adapter; 

    public function __construct(ConnectionAdapter $adapter)
    {
        $this->adapter=$adapter;
    }
    public function __invoke(): ?array//return array o null
    {
       return $this->adapter->getAllUsers();
    }
}