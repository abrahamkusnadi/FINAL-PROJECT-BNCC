<?php

namespace App\Http\Controllers;

use App\Models\invoice_item;
use App\Http\Requests\Storeinvoice_itemRequest;
use App\Http\Requests\Updateinvoice_itemRequest;

class InvoiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storeinvoice_itemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(invoice_item $invoice_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(invoice_item $invoice_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateinvoice_itemRequest $request, invoice_item $invoice_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(invoice_item $invoice_item)
    {
        //
    }
}
