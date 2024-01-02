<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // public function showForm()
    // {
    //     return view('instructor.add_invoice');
    // }

    // public function store(Request $request)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         // Add validation rules for your form fields
    //     ]);

    //     // Save the data to the database
    //     Invoice::create($validatedData);

    //     return redirect()->route('instructor.invoices')->with('success', 'Invoice added successfully');
    // }

    // public function preview()
    // {
    //     // Fetch invoice data from the database (replace 'YourModel' with the actual model name)
    //     $invoiceData = YourModel::find($invoiceId);

    //     return view('instructor.preview_invoice', compact('invoiceData'));
    // }

    // public function store(Request $request)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         // Add validation rules for your form fields
    //     ]);

    //     // Save the data to the database
    //     Invoice::create($validatedData);

    //     return redirect()->route('instructor.invoices')->with('success', 'Invoice added successfully');
    // }



    public function showForm()
    {
        return view('instructor.add-invoice');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'student_name' => 'required|string',
            'invoice_number' => 'required|string',
            'amount' => 'required|string',
            'issue_date' => 'required|date',
            'due_date' => 'required|date',
            // Add more validation rules for other fields
        ]);

        // Save the data to the database
        Invoice::create($validatedData);

        return redirect()->route('instructor.invoices')->with('success', 'Invoice added successfully');
    }



}
