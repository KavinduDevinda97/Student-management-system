<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\View\View;



class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $payments = Payment::all();
        return view ('payments.index')->with('payments', $payments);
    }
 
    public function create(): View
    {
        $enrollments = Enrollment::pluck('enroll_no','id');
        return view('payments.create', compact('enrollments'));
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message', 'Payment Addedd!');
    }
    public function show(string $id): View
    {
        $payments = Payment::find($id);
        return view('payments.show')->with('payments', $payments);
    }
    public function edit(string $id): View
    {
        $payments = Payment::find($id);
        $enrollments = Enrollment::pluck('enroll_no','id');
        return view('payments.edit', compact('payments','enrollments'));
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $payments = Payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'Payment Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'Payment deleted!'); 

}
}