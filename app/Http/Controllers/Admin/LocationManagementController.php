<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Classes\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class LocationManagementController extends Controller
{
    /**
     * Get all countries.
     */
    public function getCountries()
    {
        $countries = Country::orderBy('name')
            ->select('id', 'name')
            ->paginate(limit(request()->all()));

        return ApiResponse::success(200, 'Countries retrieved successfully', $countries);
    }

    /**
     * Get states by country_id (optional).
     */
    public function getStates(Request $request)
    {
        $countryId = $request->input('country_id');

        $states = $countryId
            ? $this->getStatesByCountry($countryId)
            : State::orderBy('name')->select('id', 'name','country_id')->paginate(limit(request()->all()));

        return $states instanceof \Illuminate\Http\JsonResponse
            ? $states
            : ApiResponse::success(200, 'States retrieved successfully', $states);
    }

    /**
     * Get cities by state_id (optional).
     */
    public function getCities(Request $request)
    {
        $stateId = $request->input('state_id');

        $cities = $stateId
            ? $this->getCitiesByState($stateId)
            : City::orderBy('name')->select('id', 'name', 'state_id')->paginate(limit(request()->all()));

        return $cities instanceof \Illuminate\Http\JsonResponse
            ? $cities
            : ApiResponse::success(200, 'Cities retrieved successfully', $cities);
    }

    /**
     * Helper: Get states for a specific country.
     */
    private function getStatesByCountry($countryId)
    {
        $country = Country::find($countryId);

        if (!$country) {
            return ApiResponse::notFound(404, 'Country not found');
        }

        return $country->states()
            ->orderBy('name')
            ->select('id', 'name', 'country_id')
            ->paginate(limit(request()->all()));
    }

    /**
     * Helper: Get cities for a specific state.
     */
    private function getCitiesByState($stateId)
    {
        $state = State::find($stateId);

        if (!$state) {
            return ApiResponse::notFound(404, 'State not found');
        }

        return $state->cities()
            ->orderBy('name')
            ->select('id', 'name', 'state_id')
            ->paginate(limit(request()->all()));
    }
}
