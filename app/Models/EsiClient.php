<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EsiClient extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'login_endpoint',
        'esi_endpoint',
        'tenant',
        'client_id',
        'client_secret',
        'callback_url',
        'provider',
    ];

    protected $hidden = [
        'client_secret',
    ];

    public function refresh_tokens() {
        return $this->hasMany(RefreshToken::class);
    }
}
