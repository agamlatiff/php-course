<?php

class Address {
  public ?string $country;
  public ?string $city;
  public ?string $street;
}

function getCountry(?Address $address) : ?string {
  return $address?->country;
}

echo getCountry(null);