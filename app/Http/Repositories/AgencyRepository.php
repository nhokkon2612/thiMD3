<?php


namespace App\Http\Repositories;


use App\Models\Agency;

class AgencyRepository
{
    protected $agencyModel;
    public function __construct(Agency $agency)
    {
        $this->agencyModel=$agency;
    }

    public function index()
    {
        return $this->agencyModel->with('status','employee')->get();
    }

    public function findByName($agency)
    {
        return $this->agencyModel->where('name_agency',     'Like', "%{$agency}%")->get();
    }

}
