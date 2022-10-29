<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (\Illuminate\Validation\ValidationException $e, $request) {
            $errors = $this->toCustomValidationErrors($e->errors());
            return response()->json([
                'success' => 0,
                'code' => Response::HTTP_BAD_REQUEST,
                'meta' => [
                    'method' => $request->getMethod(),
                    'endpoint' => $request->getRequestUri()
                ],
                'data' => [],
                'error' => $errors,
            ], Response::HTTP_BAD_REQUEST);
        });
    }

    /**
     * Converts the validation error messages to the custom structure.
     *
     * @param array $errors
     * @return array
     */
    private function toCustomValidationErrors(array $errors): array
    {
        $result = [];
        foreach ($errors as $key => $value) {

            array_push($result, [
                'attribute' => $key,
                'messages' => $value[0]
            ]);
        }

        return $result;
    }
}
