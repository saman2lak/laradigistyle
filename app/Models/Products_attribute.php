<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Products_attribute
 *
 * @property int $id
 * @property int $product_id
 * @property int $attribute_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Products_attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Products_attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Products_attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Products_attribute whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products_attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products_attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products_attribute whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products_attribute whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Products_attribute extends Model
{
    use HasFactory;

    protected $table = 'products_attributes';
    public $timestamps = false;
}