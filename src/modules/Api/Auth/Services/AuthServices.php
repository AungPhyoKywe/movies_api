<?php

namespace Movies\Api\Auth\Services;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Movies\Api\BaseController;

class AuthServices extends BaseController
{

    public function __construct()
    {
        $this->limit = null;
        $this->offset = null;
        $this->startTime = microtime(true);
    }

    /**
     * @param array $params
     * 
     * @return Response
     */
    public function login(array $params)
    {
        if (Auth::attempt($params)) {
            $user = Auth::user();
            $success['name'] =  $user->name;
            $success['email'] = $user->email;
            $success['token'] =  $user->createToken('accessToken')->accessToken;

            return $this->sendResponse($success, Response::HTTP_CREATED);
        } else {
            return $this->sendError([
                'message' => 'Unauthorized.',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }
}
