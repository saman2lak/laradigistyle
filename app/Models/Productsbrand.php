<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Productsbrand
 *
 * @property int $id
 * @property int $product_id
 * @property int $brand_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Productsbrand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Productsbrand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Productsbrand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Productsbrand whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Productsbrand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Productsbrand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Productsbrand whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Productsbrand whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Productsbrand extends Model
{
    use HasFactory;
    protected $table = 'brand_product';
}
