<?php

namespace App\Filters;

use CollegePortal\Models\User;
use CollegePortal\Models\IntentType;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IntentTypeFilters extends BaseFilters
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }
}