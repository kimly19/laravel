<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Repositories\CompanyRepository;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CompanyRepository $company)
    {
        //
        $contacts = $this -> getContacts();
        $companies = json_decode(json_encode($company -> company_data()));
        return view('contacts.index', ['contacts'=>$contacts, 'companies'=>$companies]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}