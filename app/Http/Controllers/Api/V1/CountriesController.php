<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\CountryService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CountriesController extends Controller
{
    public function __construct(
        private readonly CountryService $countryService
    ) {}

    public function fetchByName(string $name, Request $request): JsonResponse
    {
        $fullText = $request->get('fullText', false);
        $countries = $this->countryService->fetchByName($name, $fullText);

        return response()->json($countries);
    }

    public function fetchByCode(string $code, Request $request): JsonResponse
    {
        return response()->json($this->countryService->fetchByCode($code));
    }

    public function fetchByCurrency(string $currency, Request $request): JsonResponse
    {
        return response()->json($this->countryService->fetchByCurrency($currency));
    }

    public function fetchByLanguage(string $language, Request $request): JsonResponse
    {
        return response()->json($this->countryService->fetchByLanguage($language));
    }

    public function fetchByRegion(string $region, Request $request): JsonResponse
    {
        return response()->json($this->countryService->fetchByRegion($region));
    }

    public function fetchByPopulationRange(Request $request): JsonResponse
    {
        $min = $request->input('min');
        $max = $request->input('max');
        $countries = $this->countryService->fetchByPopulationRange($min, $max);

        return response()->json($countries);
    }
}
