<?php

namespace Ratio\Wallboard\Exception;


class InvalidMessageException extends \Exception
{
    private $invalidFields;

    public function __construct(\stdClass $errors)
    {
        $this->invalidFields = $errors->MissingFields;

        parent::__construct('The message contained invalid fields');
    }

    public function getInvalidFields()
    {
        return $this->invalidFields;
    }
}
