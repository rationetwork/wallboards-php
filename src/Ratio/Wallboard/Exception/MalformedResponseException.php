<?php

namespace Ratio\Wallboard\Exception;


class MalformedResponseException extends \Exception
{
    private $response;

    function __construct($response)
    {
        $this->response = $response;

        parent::__construct("The response from the API wasn't valid JSON");
    }

    public function getResponse()
    {
        return $this->response;
    }
}
