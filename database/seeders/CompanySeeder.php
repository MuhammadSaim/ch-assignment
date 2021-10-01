<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Traits\GeneralHelper;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder {

    use GeneralHelper;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $companies = $this->csvToArray( base_path( '/demo_data/top500Domains.csv' ) );
        foreach ( $companies as $company ) {
            Company::create( [
                'rank'                 => $company['Rank'],
                'logo'                 => 'https://logo.clearbit.com/' . $company['Root Domain'],
                'root_domain'          => $company['Root Domain'],
                'linking_root_domains' => str_replace( ',', '', $company['Linking Root Domains'] ),
                'domain_authority'     => $company['Domain Authority'],
            ] );
        }
    }
}