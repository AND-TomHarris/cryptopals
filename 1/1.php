<?

$inputString = '49276d206b696c6c696e6720796f757220627261696e206c696b65206120706f69736f6e6f7573206d757368726f6f6d';
$expectedOutput = 'SSdtIGtpbGxpbmcgeW91ciBicmFpbiBsaWtlIGEgcG9pc29ub3VzIG11c2hyb29t';

function hexToStr($hex) {
    $string='';
    for ($i=0; $i < strlen($hex); $i+=2){
      $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}

$decodedString = hexToStr($inputString);

echo "string: $decodedString <br><br>";

$output = base64_encode($decodedString);

echo "base 64: $output";

echo "<br><br>";

if ($output == $expectedOutput) {
  echo "PASS";
} else {
  echo "FAIL";
}


?>
