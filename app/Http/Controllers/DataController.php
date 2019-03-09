<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
