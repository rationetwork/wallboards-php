<?php

namespace Ratio\Wallboard\Loudspeaker;

use Ratio\Wallboard\Exception as WallboardException;

class Connection
{
    private $serviceUrl;

    public function __construct($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
    }

    /**
     * @param Message $message
     * @throws \Ratio\Wallboard\Exception\MalformedResponseException
     * @throws \Ratio\Wallboard\Exception\InvalidMessageException
     */
    public function send(Message $message)
    {
        $ch = curl_init($this->serviceUrl);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message->toJson());
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $rawResponse = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($rawResponse);

        if (json_last_error()) {
            throw new WallboardException\MalformedResponseException($rawResponse);
        }

        if ( ! $response->Success) {
            throw new WallboardException\InvalidMessageException($response->Errors);
        }
    }
}
