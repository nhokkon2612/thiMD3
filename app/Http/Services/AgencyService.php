<?php


namespace App\Http\Services;


use App\Http\Repositories\AgencyRepository;
use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyService
{
    protected $agencyRepository;

    public function __construct(AgencyRepository $agencyRepository)
    {
        $this->agencyRepository = $agencyRepository;
    }

    public function index()
    {
        //
        return $this->agencyRepository->index();

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($agency)
    {
        //
        return $this->agencyRepository->findByname($agency);
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
