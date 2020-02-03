<?php


namespace App\Http\Controllers\Service\impl;


use App\Http\Controllers\Repository\LeaveRepositoryInterfave;
use App\Http\Controllers\Service\LeaveServiceInterface;
use App\Leave_request;

class LeaveService implements LeaveServiceInterface
{
    protected $productRepository;
    /**
     * @var LeaveRepositoryInterfave
     */
    private $leaveRepository;

    public function __construct(LeaveRepositoryInterfave $leaveRepository)
    {
        $this->leaveRepository = $leaveRepository;
    }
    public function getAll()
    {
        return $this->leaveRepository->getAll();
    }

    public function store($request)
    {
        $leave = new Leave_request();
        $leave->name_of_leave = $request->input('name_of_leave');
        $leave->start_date = $request->input('start_date');
        $leave->begin_date = $request->input('begin_date');
        $leave->reason_of_leave = $request->input('reason_of_leave');
        $leave->approver_of_name = $request->input('approver_of_name');
        return $this->leaveRepository->store($leave);
    }
}
