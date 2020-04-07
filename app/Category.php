<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $entities
 * @property string $path
 * @property mixed $icon_png
 * @property mixed $icon
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 */
class Category extends Model
{
    protected $guarded = [];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entities()
    {
        return $this->hasMany(Entity::class);
    }

    /**
     * @return string
     */
    public function getPathAttribute()
    {
        return "/admin/categories/$this->id";
    }

}
