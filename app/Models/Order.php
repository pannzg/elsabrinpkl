<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['nama','no_telp','alamat','total','status'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
?>