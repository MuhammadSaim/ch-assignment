<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'companies', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'rank' );
            $table->string( 'logo' );
            $table->string( 'root_domain' );
            $table->string( 'linking_root_domains' );
            $table->string( 'domain_authority' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'companies' );
    }
}