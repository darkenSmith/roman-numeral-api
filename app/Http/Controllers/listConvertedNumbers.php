<?php

namespace App\Http\Controllers;

use App\Http\Requests\convertNumberRequest;
use App\Http\Resources\ConvertedNumberResource;
use App\Models\ConvertedNumber;
use App\Services\RomanNumeralConverter;
use Illuminate\Http\JsonResponse;

class listConvertedNumbers extends Controller
{
    private RomanNumeralConverter $converter;
    private ConvertedNumber $convertNumberRecord;


    public function __construct()
    {
        $this->converter = new RomanNumeralConverter();
        $this->convertNumberRecord = new ConvertedNumber();
    }

    function store(convertNumberRequest $request): JsonResponse
    {
        $number = $request->validated()['convert_number'];
        $this->convertNumberRecord->number = $number;
        $this->convertNumberRecord->roman_numerals = $this->converter->convertInteger((int)$number);
        $this->convertNumberRecord->save();

        $response = new convertedNumberResource(ConvertedNumber::findOrFail($this->convertNumberRecord->id));
        return response()->json($response);
    }

    function showAll(): JsonResponse
    {
        return response()->json(ConvertedNumberResource::collection(ConvertedNumber::all()));
    }

    function topTen(): JsonResponse
    {
        return response()->json(ConvertedNumber::topTen()->get());
    }

}
