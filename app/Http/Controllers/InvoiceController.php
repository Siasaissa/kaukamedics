<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('admin.invoice.index');
    }

    public function create()
    {
        return view('admin.invoice.index');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.Invoice.index')->with('success', 'Invoice creation page is available, but full invoice saving is not implemented yet.');
    }

    public function show($invoice)
    {
        return view('admin.invoice.index');
    }

    public function edit($invoice)
    {
        return view('admin.invoice.index');
    }

    public function update(Request $request, $invoice)
    {
        return redirect()->route('admin.Invoice.index')->with('success', 'Invoice update flow is not implemented yet.');
    }

    public function destroy($invoice)
    {
        return redirect()->route('admin.Invoice.index')->with('success', 'Invoice delete flow is not implemented yet.');
    }

    public function print($invoice)
    {
        return view('admin.invoice.index');
    }

    public function markAsPaid($invoice)
    {
        return redirect()->route('admin.Invoice.index')->with('success', 'Invoice status update is not implemented yet.');
    }

    public function updateStatus(Request $request, $invoice)
    {
        return redirect()->route('admin.Invoice.index')->with('success', 'Invoice status update is not implemented yet.');
    }

    public function duplicate($invoice)
    {
        return redirect()->route('admin.Invoice.index')->with('success', 'Invoice duplication is not implemented yet.');
    }
}
