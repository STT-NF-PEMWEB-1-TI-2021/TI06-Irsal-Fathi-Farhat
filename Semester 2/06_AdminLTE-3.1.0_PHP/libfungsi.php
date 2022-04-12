<?php
function kelulusan($_nilai)
{
    if ($_nilai > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

function grade($_nilai)
{
    if ($_nilai >= 0 && $_nilai <= 35) {
        return 'E';
    } elseif ($_nilai >= 36 && $_nilai <= 55) {
        return 'D';
    } elseif ($_nilai >= 56 && $_nilai <= 69) {
        return 'C';
    } elseif ($_nilai >= 70 && $_nilai <= 84) {
        return 'B';
    } elseif ($_nilai >= 85 && $_nilai <= 100) {
        return 'A';
    } else {
        return 'I';
    }
}

function predikat($_grade)
{
    switch ($_grade) {
        case 'E':
            return 'Sangat Kurang';
            break;
        case 'D':
            return 'Kurang';
            break;
        case 'C':
            return 'Cukup';
            break;
        case 'B':
            return 'Memuaskan';
            break;
        case 'A':
            return 'Sangat Memuaskan';
            break;
        default:
            return 'Tidak Ada';
            break;
    }
}
