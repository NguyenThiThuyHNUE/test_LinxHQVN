<?php


namespace App\Http\Controllers\Repository\impl;


use App\Http\Controllers\Repository\LeaveRepositoryInterfave;
use App\Leave_request;

class LeaveRepository implements LeaveRepositoryInterfave
{

    public function getAll()
    {
        return Leave_request::all();
    }

    public function store($leave)
    {
        $leave->save();
    }
}
