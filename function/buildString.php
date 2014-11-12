function build_string()
{
    $lenghPass = 32;
    $newpass = "";
    for($k = 1; $k <= $lenghPass; $k++) {
        if( $k % 3 ) {
            if( rand( 0,200 ) <= 100 ) {
                $newpass .= chr( rand ( 65,90 ) );
            } else {
                $newpass .= chr( rand ( 97,122 ) );
            }
        } else {
            $newpass .= rand( 0,9 );
        }
    }
    return ($newpass);
}
