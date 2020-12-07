<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Productimagesproduct
 *
 * @property int $id
 * @property int $product_id
 * @property int $productimage_id
 * @method static \Illuminate\Database\Eloquent\Builder|Productimagesproduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Productimagesproduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Productimagesproduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|Productimagesproduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Productimagesproduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Productimagesproduct whereProductimageId($value)
 * @mixin \Eloquent
 */
class image_product extends Model
{
    use HasFactory;
    protected $table = 'image_product';
}
