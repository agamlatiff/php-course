<?php


// Attribute notblack
#[Attribute(Attribute::TARGET_PROPERTY)]
class NotBlank
{

}


// Attribute length for valitadion length login request
#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
  public int $min;
  public int $max;

  public function __construct(int $min, int $max)
  {
    $this->min = $min;
    $this->max = $max; 
  }
}

// Login request 
class LoginRequest
{

  #[Length(min: 5, max: 10)]
  #[NotBlank]
  public string $username;

  #[Length(min: 6, max: 12)]
  #[NotBlank]
  public ?string $password;

}

function validate(object $object)
{
  
  // Get property from object like username and password
  $class = new ReflectionClass($object);
  $properties = $class->getProperties();

  // Looping properties and validate 
  foreach ($properties as $property) {
    validateNotBlank($property, $object);
    validateLength($property, $object);
  }
}

function validateNotBlank(ReflectionProperty $property, object $object)
{
  // Get attributes notblank
  $attributes = $property->getAttributes(NotBlank::class);
  // Checking attributes is available
  if (count($attributes) > 0) {
    // Is available, checking for property is has value
    if (!$property->isInitialized($object)) {
      throw new Exception("Property $property->name is null");
    }
    
    // For this checking the value of property is null or not
    if ($property->getValue($object) == null) {
      throw new Exception("Property $property->name is null");
    }
  }
  
  // Success validate
  echo "VALIDATE NOT BLANK" . PHP_EOL;
}

function validateLength(ReflectionProperty $property, object $object)
{
  
  // Checking attributes is available
  if (!$property->isInitialized($object) || $property->getValue($object) == null) {
    return;
  }
  
  // Get attributes and value of property
  $value = $property->getValue($object);
  $attributes = $property->getAttributes(Length::class);
  
  // Loop attributes
  foreach ($attributes as $attribute) {
    
    // Get attribute length from attribute to class
    $length = $attribute->newInstance();
    
    // Get value length user
    $valueLength = strlen($value);
    
    // Validation if user too short
    if ($valueLength < $length->min) {
      throw new Exception("Property $property->name is too short");
    }
    
    // Validation if user too long
    if ($valueLength > $length->max) {
      throw new Exception("Property $property->name is too long");
    }

  }

  // For successfully
  echo "VALIDATE LENGTH" . PHP_EOL;
  

}

$request = new LoginRequest();
$request->username = "agam123";
$request->password = "secret1245";
validate($request);
