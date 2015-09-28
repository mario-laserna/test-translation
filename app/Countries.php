<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model {

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['code', 'name'];

}
