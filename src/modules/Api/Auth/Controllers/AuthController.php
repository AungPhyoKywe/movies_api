<?php

namespace Movies\Api\Auth\Controllers;

use Movies\Api\Auth\Validation\LoginRequest;
use Movies\Api\Auth\Services\AuthServices;

class AuthController
{
    /**
     * @var AuthServices
     */
    protected AuthServices $authServices;


    public function __construct(AuthServices $authServices)
    {
        $this->authServices = $authServices;
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        return $this->authServices->login(
            [
                'email' => $request->email,
                'password' => $request->password
            ]
        );
    }
}
