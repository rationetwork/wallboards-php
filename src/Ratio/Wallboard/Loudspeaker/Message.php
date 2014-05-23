<?php

namespace Ratio\Wallboard\Loudspeaker;

class Message
{
    private $params = array(
        'SubsystemName' => null,
        'Title' => null,
        'SeverityID' => null,
        'MessageBody' => null,
        'ContactGroup' => null,
        'Filename' => null,
        'LineNumber' => null,
    );

    public function setSubsystemName($subsystemName)
    {
        $this->params['SubsystemName'] = $subsystemName;

        return $this;
    }

    public function setTitle($title)
    {
        $this->params['Title'] = $title;

        return $this;
    }

    public function setSeverityID($severityID)
    {
        $this->params['SeverityID'] = $severityID;

        return $this;
    }

    public function setMessageBody($messageBody)
    {
        $this->params['MessageBody'] = $messageBody;

        return $this;
    }

    public function setContactGroup($contactGroup)
    {
        $this->params['ContactGroup'] = $contactGroup;

        return $this;
    }

    public function setFilename($filename)
    {
        $this->params['Filename'] = $filename;

        return $this;
    }

    public function setLineNumber($lineNumber)
    {
        $this->params['LineNumber'] = $lineNumber;

        return $this;
    }

    public function toJson()
    {
        //throw new \Exception('This is a test');

        return json_encode($this->params);
    }

    public function getData()
    {
        return $this->params;
    }
}
