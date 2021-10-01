<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model {
    use HasFactory;

    // Mass assignment
    protected $guarded = [];

    /**
     * search companies with name root domain count or domain authority if the parameters are not found then
     * whole records will be return
     *
     * @param array $data
     */
    public function scopeSearchCompanies( $query, array $data = [] ) {
        if ( !empty( $data ) ) {
            if ( !empty( $data['name'] ) ) {
                $query->where( 'root_domain', 'LIKE', '%' . $data['name'] . '%' );
            }
            if ( !empty( $data['root_domain_count'] ) ) {
                $query->where( 'linking_root_domains', $data['root_domain_count'] );
            }
            if ( !empty( $data['domain_authority'] ) ) {
                $query->where( 'domain_authority', $data['domain_authority'] );
            }
            return $query;
        } else {
            return $query;
        }
    }

}