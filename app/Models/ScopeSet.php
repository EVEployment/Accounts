<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScopeSet extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'scopes',
    ];

    public function refresh_tokens() {
        return $this->hasMany(RefreshToken::class);
    }
}
