<?php


class ValidationUtil
{
  public function validate(LoginRequest $request)
  {
    if (!isset($request->username) || !isset($request->password)) {
      throw new ValidationException("Username and password is required");
      ;
    }
  }

  static function ValidationReflection($request)
  {
    $reflection = new ReflectionClass($request);
    $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
    foreach ($reflection as $property) {
      if ($property->isInitialized($request)) {
        throw new ValidationException("$property->name is not set");
      } else if(is_null($property->getValue($request))) {
         throw new ValidationException("$property->name is null");
      }
    }
  }
}