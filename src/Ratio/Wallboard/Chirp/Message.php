<?php

namespace Ratio\Wallboard\Chirp;


class Message
{
    private $params = array(
        'SubsystemName' => null,
        'SeverityID' => null,
        'Message' => null,
    );

    public function setSubsystemName($subsystemName)
    {
        $this->params['SubsystemName'] = $subsystemName;

        return $this;
    }

    public function setSeverityID($severityID)
    {
        $this->params['SeverityID'] = $severityID;

        return $this;
    }

    public function setMessage($message)
    {
        $this->params['Message'] = $message;

        return $this;
    }

    public function toJson()
    {
        return json_encode($this->params);
    }
}
