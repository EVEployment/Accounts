<?php

namespace App\Ldap;

use LdapRecord\Models\Entry;
use Illuminate\Contracts\Auth\Authenticatable;
use LdapRecord\Models\Concerns\CanAuthenticate;
use LdapRecord\Query\Builder;

class Server extends Entry implements Authenticatable
{
    use CanAuthenticate;

    /**
     * The object classes of the LDAP model.
     *
     * @var array
     */
    public static $objectClasses = [
        "account",
        "simpleSecurityObject"
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot() {
        parent::boot();

        static::addGlobalScope(function (Builder $builder) {
            $builder->in('ou=servers,dc=winterco,dc=org');
        });
    }
}
