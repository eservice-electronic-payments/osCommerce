<?php
namespace EservicePayments;

class TurnkeyValidationException extends \Exception{
    protected $message = 'A request parameter was missing or invalid';
    protected $code = '-10000';
}