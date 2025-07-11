<?php
class User extends Authenticatable {
 protected $fillable = ['name','email','role','password'];
}