<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function list() {
        $items = Api::get();
        if ($items->isEmpty()) {

            return $this->createResponse('no_content');
        }

        return $this->createResponse('ok', $items);
    }

    public function show($hash)
    {
        $item = Api::where('hash', $hash)->first();
        if (!$item) {

            return $this->createResponse('not_found');
        }

        return $this->createResponse('ok', $item);
    }

    public function store(Request $request)
    {

        try {
            $item = Api::create($request->all());
        } catch (\Exception $e) {
            return $this->createResponse('err', $e->getMessage());
        }

        return $this->createResponse('created', $item);
    }

    public function update($hash, Request $request)
    {
        try {
            $item = Api::where('hash', $hash)->first();
            if (!$item) {

                return $this->createResponse('not_found');
            }
            $item->update($request->all());
        } catch (\Exception $e) {
            return $this->createResponse('err', $e->getMessage());
        }

        return $this->createResponse('ok', $item);
    }

    /**
     * @param $id
     * Delete
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($hash)
    {
        try {
            $item = Api::where('hash', $hash)->first();
            if (!$item) {

                return $this->createResponse('not_found');
            }

            $item->destroy();
        } catch (\Exception $e) {

            return $this->createResponse('err', $e->getMessage());
        }

        return $this->createResponse('ok');
    }
}
