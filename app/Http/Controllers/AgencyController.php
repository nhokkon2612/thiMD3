<?php

namespace App\Http\Controllers;

use App\Http\Services\AgencyService;
use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    protected $agencyService;

    public function __construct(AgencyService $agencyService)
    {
        $this->agencyService = $agencyService;
    }

    public function index()
    {
        //
        $agencies = $this->agencyService->index();
        return view('agency.list', compact('agencies'));

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $requset)
    {
        //
        $values = $this->agencyService->show($requset->agency);
        return view('agency.find',compact('values'));
    }

    public function edit(Agency $agency)
    {
        //
    }

    public function update(Request $request, Agency $agency)
    {
        //
    }

    public function destroy(Agency $agency)
    {
        //
    }
}
