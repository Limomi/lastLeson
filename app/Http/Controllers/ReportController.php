<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("req.create");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'address' => ['required', 'string', 'max:255'],
                'contact' => ['required', 'string', 'max:255'],
                'date' => ['required', 'date'],
                'time' => ['required', 'string'],
                'contact' => ['required', 'string', 'max:255'],
                'payment' => ['required', 'string']
            ]);



        Report::create([
            'address' =>$request->address,
            'contact'=>$request->contact,
            'date'=>$request->date,
            'time'=>$request->time,
            'payment'=>$request->payment,
            'user_id'=>Auth::user()->id,
            // 'user_id'=>0,
            'service_id'=>1
        ]);

        return redirect() -> route('req.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
