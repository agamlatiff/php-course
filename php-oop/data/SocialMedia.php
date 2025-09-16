<?php

class SocialMedia
{

  public string $name;
}

final class Facebook extends SocialMedia
{
 final public function login() {
  return true;
 }
}

final class Youtube extends SocialMedia
{
 public function login() {
  return true;
 }
}

class Instagram extends Facebook
{
 public function login() {
  return true;
 }
}