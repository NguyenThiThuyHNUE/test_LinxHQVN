<?php


namespace App\Http\Controllers\Repository;


interface LeaveRepositoryInterfave
{
    public function getAll();
    public function store($request);
}
