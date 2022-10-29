<?php

namespace Movies\Api;

use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{
    /**
     * A flag for understanding the process was success or not.
     *
     * @var int 1: success / 0: failed
     */
    protected $success = 1;

    /**
     * HTTP status code.
     *
     * @var int
     */
    protected $code = 200;

    /**
     * Accessed HTTP method.
     *
     * @var
     */
    protected $method;

    /**
     * Accessed endpoint.
     *
     * @var
     */
    protected $endpoint;

    /**
     * Starting position of retrieves a resource.
     *
     * @var
     */
    protected $offset;

    /**
     * End position of retrieves a resource.
     *
     * @var
     */
    protected $limit;

    /**
     * A total count of retrieved result.
     *
     * @var
     */
    protected $total;

    /**
     * A response data.
     *
     * @var mixed
     */
    protected $data;

    /**
     * Response errors.
     *
     * @var array
     */
    protected $errors = [];

    /**
     * Executing time.
     *
     * @var int
     */
    protected $duration = 0;

    /**
     * Stating time of executed.
     *
     * @var int
     */
    protected $startTime = 0;

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, int $code)
    {
        $response = [
            'success' => 1,
            'code' => $code,
            'meta' => $this->getMeta(),
            'data' => $result,
            'errors' => $this->getErrors(),
            'duration' => $this->calcDuration()
        ];

        return response()->json($response, $code);
    }

    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $code = 404)
    {
        $response = [
            'success' => 0,
            'code' => $code,
            'meta' => [
                'method' => \request()->getMethod(),
                'endpoint' => \request()->getRequestUri()
            ],
            'data' => [],
            'error' => $error,
            'duration' => $this->calcDuration()
        ];

        return response()->json($response);
    }

    /**
     * Returns the meta data that includes:
     * 
     * @return array
     */
    public function getMeta(): array
    {
        $meta = [
            'method' => \request()->getMethod(),
            'endpoint' => \request()->getRequestUri()
        ];

        if ($this->limit !== null) {
            $meta['limit'] = $this->limit;
        }

        if ($this->offset !== null) {
            $meta['offset'] = $this->offset;
        }

        if ($this->total !== null) {
            $meta['total'] = $this->total;
        }

        return $meta;
    }

    /**
     * Returns the error data.
     *
     * @return array|object
     */
    public function getErrors()
    {
        $errors = $this->errors;
        if (empty($errors)) {
            $errors = (object)$errors;
        }

        return $errors;
    }

    /**
     * Calculates the duration by started time.
     *
     * @return float
     */
    public function calcDuration()
    {
        $now = microtime(true);
        return $this->duration = (float) sprintf("%.3f", ($now - $this->startTime));
    }
}
