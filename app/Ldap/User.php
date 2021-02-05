<?php

namespace App\Ldap;

class User extends Entry {
    /**
     * The object classes of the LDAP model.
     *
     * @var array
     */
    public static $objectClasses = [
        'inetOrgPerson',
        'organizationalPerson',
        'person',
    ];
}
