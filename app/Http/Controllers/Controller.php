<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Response codes
     */
    const OK = 200;
    const CREATED = 201;
    const NO_CONTENT = 204;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const CONFLICT = 409;
    const ERR = 500;

    /**
     * Response
     * @param  string $type [description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function createResponse(string $type, $data = null)
    {
        $arr = [];
        $statusCode = $this->getConst(strtoupper($type));
        if ($statusCode >= 200 && $statusCode < 227) {
            $status = 'success';
        } else {
            $status = 'error';
        }
        if ($data) {
            $arr['data'] = $data;
        }
        $arr['status'] = $status;

        return response($arr, $statusCode);
    }

    /**
     * Const getter
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    public function getConst($name)
    {
        return constant("self::{$name}");
    }
}
