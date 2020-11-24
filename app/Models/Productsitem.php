<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Productsitem
 *
 * @property int $id
 * @property int $product_id
 * @property int $attributeitem_id
 * @method static \Illuminate\Database\Eloquent\Builder|Productsitem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Productsitem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Productsitem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Productsitem whereAttributeitemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Productsitem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Productsitem whereProductId($value)
 * @mixin \Eloquent
 */
class Productsitem extends Model
{
    use HasFactory;
    protected $table = 'productsitems';
}