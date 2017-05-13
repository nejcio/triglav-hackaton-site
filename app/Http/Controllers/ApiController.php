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
            $data = $request->all();

            if (array_key_exists('content', $data)) {
                $data['content'] = json_encode($data['content']);
            }
            $item = Api::create($data);
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
            $data = $request->all();
            if (array_key_exists('content', $data)) {
                $data['content'] = json_encode($data['content']);
            }
            $item->update($data);
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
