<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Costumer
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $phone
 * @property $address
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Costumer extends Model
{
    // esta es la parte de como se crea la base de datos lo que se solicita al inicar sesion
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','phone','address'];



}
