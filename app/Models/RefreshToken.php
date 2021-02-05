<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefreshToken extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id',
        'esi_client_id',
        'refresh_token',
        'scope_set_id',
    ];

    protected $hidden = [
        'refresh_token',
    ];

    public function esi_client() {
        return $this->belongsTo(EsiClient::class);
    }

    public function scope_set() {
        return $this->belongsTo(ScopeSet::class);
    }
}
