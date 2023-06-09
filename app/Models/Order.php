<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'country',
        'companySize',
        'reason',
        'description',
        'quality',
        'service_id',
        'affiliate_id',
        'service_type'
    ];
    public function getService()
    {
        return $this->hasOne(Service::class, 'id', 'service_id');
    }
}
