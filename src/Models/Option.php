<?php

namespace FsgHerbie\MorphSku\Models;

use FsgHerbie\MorphSku\Contracts\OptionContract;
use Illuminate\Database\Eloquent\Model;

class Option extends Model implements OptionContract
{
    protected $guarded = ['id'];

    protected $fillable = ["name"];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('morph-sku.table_names.options'));
    }

    public static function findByName(string $name)
    {
        return static::whereName($name)->first();
    }
}
