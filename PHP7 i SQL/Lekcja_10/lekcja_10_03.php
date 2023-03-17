<?php
$myText1 = "Piękne niebo! Dlaczego ludzie patrzą w niebo?";
$myText2 = "Jak czytać KSIĄŻKI i dlaczego książki warto czytać?";

$len1 = mb_strlen($myText1);
$len2 = mb_strlen($myText2);

if ($len1 == $len2) {
    print "Ciągi znaków mają tę samą długość.";
} else {
    print "Ciągi znaków nie mają tej samej długości.\n";
    print "Pierwszy ma długość $len1 znaków, a drugi ma długość $len2 znaków.";
}
?>