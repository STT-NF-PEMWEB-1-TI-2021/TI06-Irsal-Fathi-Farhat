<?php
require_once 'libfungsi.php';

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
    $kelulusan = kelulusan($lulus);
    echo '</br>Dinyatakan : ' . $kelulusan;

    $grade = grade($lulus);
    echo '</br>Grade : ' . $grade;

    $predikat = predikat($grade);
    echo '</br>Predikat : ' . $predikat;
} else {
    echo '</br>Dinyatakan : ';
    echo '</br>Grade : ';
    echo '</br>Predikat : ';
}
