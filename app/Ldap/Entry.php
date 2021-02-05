<?php

namespace App\Ldap;

use LdapRecord\Connection;
use LdapRecord\Models\Entry as BaseEntry;
use LdapRecord\Query\Model\Builder;
use LdapRecord\Query\Model\OpenLdapBuilder;

class Entry extends BaseEntry {
    /**
     * The attribute key that contains the models object GUID.
     *
     * @var string
     */
    protected $guidKey = 'entryUUID';

    /**
     * Create a new query builder.
     *
     * @param Connection $connection
     *
     * @return Builder
     */
    // public function newQueryBuilder(Connection $connection) {
    //     return new Builder($connection);
    // }

}
