<?php

namespace validator;

interface IValidator
{
    public function validate($value);
    public function setError($msg);
    public function getLastError();
    public function clearError();
}
