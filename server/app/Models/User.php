<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  protected $fillable = ['firstname', 'lastname', 'address', 'gender', 'phone', 'email', 'password'];
  protected $hidden   = ['password', 'remember_token'];
  protected $casts    = ['email_verified_at' => 'datetime'];

  const GENDER_MALE   = 1;
  const GENDER_FEMALE = 2;

  public static function getGenders()
  {
    return [
      self::GENDER_MALE   => 'Мужской',
      self::GENDER_FEMALE => 'Женской',
    ];
  }

  public function getGenderNameAttribute()
  {
    return self::getGenders()[$this->gender];
  }
}
