<?php

namespace App\Traits;

trait GeneralHelper {

    /**
     * function get a csv file and return an array
     *
     * @param string $filename
     * @param string $delimiter
     * @param array $data
     */
    public function csvToArray( string $filename = '', string $delimiter = ',' ): array{
        if ( !file_exists( $filename ) || !is_readable( $filename ) ) {
            return false;
        }
        $header = null;
        $data = array();
        if (  ( $handle = fopen( $filename, 'r' ) ) !== false ) {
            while (  ( $row = fgetcsv( $handle, 1000, $delimiter ) ) !== false ) {
                if ( !$header ) {
                    $header = $row;
                } else {
                    $data[] = array_combine( $header, $row );
                }
            }
            fclose( $handle );
        }
        return $data;
    }

}