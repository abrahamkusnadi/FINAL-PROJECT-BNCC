<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Invoice extends Model
{
    /** @use HasFactory<\Database\Factories\InvoiceFactory> */
    use HasFactory;
    protected $fillable = ['invoice_number','user_id','address','postal_code','total_price'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function items() {
        return $this->hasMany(invoice_item::class);
    }
}
