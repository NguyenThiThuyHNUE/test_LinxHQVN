<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Service\LeaveServiceInterface;
use Illuminate\Http\Request;

class LeaveRequestController extends Controller
{

    /**
     * @var LeaveServiceInterface
     */
    private $leaveService;

    public function __construct(LeaveServiceInterface $leaveService)
    {
        $this->leaveService = $leaveService;
        $this->middleware('auth');

    }
    public function index()
    {
        $leaves= $this->leaveService->getAll();
        return view('list',compact('leaves'));

    }

    public function create()
    {
        return view('createLeave');
    }

    public function store(Request $request)
    {
        $leaves= $this->leaveService->store($request);
        return redirect()->route('list',compact('leaves'));
    }
}
