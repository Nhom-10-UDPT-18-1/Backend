<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class profile extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'TEN',
        'CMND',
        'SDT',
        'NGAY_SINH',
        'DIA_CHI',
        'VAI_TRO',
        'id'
    ];
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
