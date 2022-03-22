<?php
$submit = $_POST['submit'];
$nama_siswa = $_POST['fname'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];

if (!empty($submit)) {
    echo 'Proses : ' . $submit;
    echo '</br>Nama : ' . $nama_siswa;
    echo '</br>Mata Kuliah : ' . $mata_kuliah;
    echo '</br>Nilai UTS : ' . $nilai_uts;
    echo '</br>Nilai UAS : ' . $nilai_uas;
    echo '</br>Nilai Tugas Praktikum: ' . $nilai_tugas;
}


if (!empty($nilai_uts & $nilai_uas & $nilai_tugas)) {
    $lulus = $nilai_uts * 30 / 100 + $nilai_uas * 35 / 100 + $nilai_tugas * 35 / 100;
    if ($lulus > 55) {
        echo '</br>Dinyatakan : Lulus';
    } else {
        echo '</br>Dinyatakan : Tidak Lulus';
    }

    if ($lulus >= 0 && $lulus <= 35) {
        echo '</br>Grade : ' . $grade = 'E';
    } elseif ($lulus >= 36 && $lulus <= 55) {
        echo '</br>Grade : ' . $grade = 'D';
    } elseif ($lulus >= 56 && $lulus <= 69) {
        echo '</br>Grade : ' . $grade = 'C';
    } elseif ($lulus >= 70 && $lulus <= 84) {
        echo '</br>Grade : ' . $grade = 'B';
    } elseif ($lulus >= 85 && $lulus <= 100) {
        echo '</br>Grade : ' . $grade = 'A';
    } else {
        echo '</br>Grade : ' . $grade = 'I';
    }

    switch ($grade) {
        case 'E':
            echo '</br>Predikat : ' . $predikat = 'Sangat Kurang';
            break;
        case 'D':
            echo '</br>Predikat : ' . $predikat = 'Kurang';
            break;
        case 'C':
            echo '</br>Predikat : ' . $predikat = 'Cukup';
            break;
        case 'B':
            echo '</br>Predikat : ' . $predikat = 'Memuaskan';
            break;
        case 'A':
            echo '</br>Predikat : ' . $predikat = 'Sangat Memuaskan';
            break;
        default:
            echo '</br>Predikat : ' . $predikat = 'Tidak Ada';
            break;
    }
} else {
    echo '</br>Dinyatakan : ';
    echo '</br>Grade : ';
    echo '</br>Predikat : ';
}
