<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['code', 'name'];

    public $translationModel = 'App\CountryTranslation';

}
