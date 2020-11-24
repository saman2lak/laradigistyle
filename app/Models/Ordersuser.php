<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ordersuser
 *
 * @property int $id
 * @property int $order_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Ordersuser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ordersuser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ordersuser query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ordersuser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ordersuser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ordersuser whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ordersuser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ordersuser whereUserId($value)
 * @mixin \Eloquent
 */
class Ordersuser extends Model
{
    use HasFactory;
    protected $table = 'ordersusers';
}