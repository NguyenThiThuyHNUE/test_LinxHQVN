<?php


namespace App\Http\Controllers\Service;


interface LeaveServiceInterface
{
    public function getAll();
    public function store($request);
}
