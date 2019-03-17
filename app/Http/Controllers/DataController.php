<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * Class DataController
 * @package App\Http\Controllers
 */
class DataController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function echo(Request $request)
    {
        Log::info('Request: '.$request->getContentType());

        if ($request->isJson()) {
            $data = $this->formatData($request);
        } else {
            $data = $this->errorResponse();
        }
        return response()->json($data);
    }

    /**
     * @param Request $request
     *
     * @return array
     */
    private function formatData(Request $request)
    {
        return [
            'method' => $request->method(),
            'data' => $request->all()
        ];
    }

    /**
     * @return array
     */
    private function errorResponse()
    {
        return array(
            'error' => 'Method not accepted. Try again with Json format'
        );
    }
}
