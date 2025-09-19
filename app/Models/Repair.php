<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_code',
        'customer_name',
        'product_details',
        'issue_description',
        'delivery_date',
        'estimated_completion_date',
        'status',
    ];

    protected static function booted(): void
    {
        static::creating(function (Repair $repair) {
            $repair->internal_tracking_code = 'REP-' . date('Ym') . '-' . strtoupper(uniqid());
        });
    }

    protected function customerCode(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value) => $value ? strtoupper($value) : null,
        );
    }
}
