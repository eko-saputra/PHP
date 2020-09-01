<?php

// Struktur Kendali Percabangan(IF)
$nilai_a = 5;
$nilai_b = 1;
// Operator komparasinya ==/>/</<=/>=/===/!=
if ($nilai_b > $nilai_a) {
    echo "nilai b lebih besar dari nilai a";
} else if ($nilai_b == 2) {
    echo $nilai_b;
} else {
    echo "kondisi di atas tidak benar";
}
