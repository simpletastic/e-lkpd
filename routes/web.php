<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pengerjaan;


/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| E-LKPD MURID
|--------------------------------------------------------------------------
*/

Route::get('/elkpd', function () {
    return view('elkpd');
});

Route::post('/elkpd/mulai', function () {
    session([
        'nama' => request('nama'),
        'kelas' => request('kelas'),
        'kelompok' => request('kelompok'),
    ]);

    return view('instruksi', [
        'nama' => request('nama'),
        'kelas' => request('kelas'),
        'kelompok' => request('kelompok'),
    ]);
});

Route::get('/elkpd/mulai', function () {
    return view('instruksi', [
        'nama' => session('nama'),
        'kelas' => session('kelas'),
        'kelompok' => session('kelompok'),
    ]);
});

Route::get('/elkpd/logout', function () {
    session()->forget(['nama', 'kelas', 'kelompok']);

    return redirect('/elkpd');
});

Route::get('/elkpd/aktivitas', function () {
    return view('aktivitas');
});

Route::get('/elkpd/aktivitas2', function () {
    return view('aktivitas2');
});

Route::get('/elkpd/aktivitas3', function () {
    return view('aktivitas3');
});

Route::post('/elkpd/simpan', function () {

    $nama = session('nama');
    $kelas = session('kelas');
    $kelompok = session('kelompok');
    $pertemuan = request('pertemuan');

    // Cek apakah murid sudah pernah mengerjakan pertemuan ini
    $sudahAda = Pengerjaan::where('nama', $nama)
        ->where('kelas', $kelas)
        ->where('kelompok', $kelompok)
        ->where('pertemuan', $pertemuan)
        ->exists();

    // Jika sudah ada, jangan simpan lagi
    if ($sudahAda) {
        return view('simpan', [
            'duplikat' => true
        ]);
    }

    // Jika belum ada, simpan jawaban
    Pengerjaan::create([
        'nama' => $nama,
        'kelas' => $kelas,
        'kelompok' => $kelompok,
        'pertemuan' => $pertemuan,

        'jawaban1' => request('jawaban1'),
        'jawaban2' => request('jawaban2'),
        'jawaban3' => request('jawaban3'),
        'jawaban4' => request('jawaban4'),
        'jawaban5' => request('jawaban5'),
        'jawaban6' => request('jawaban6'),
        'jawaban7' => request('jawaban7'),
        'jawaban8' => request('jawaban8'),
        'jawaban9' => request('jawaban9'),
        'jawaban10' => request('jawaban10'),
        'jawaban11' => request('jawaban11'),
        'jawaban12' => request('jawaban12'),
        'jawaban13' => request('jawaban13'),
        'jawaban14' => request('jawaban14'),
        'jawaban15' => request('jawaban15'),
    ]);

    return view('simpan');
});


/*
|--------------------------------------------------------------------------
| LOGIN GURU
|--------------------------------------------------------------------------
*/

Route::get('/guru', function () {
    return view('login-guru');
});

Route::post('/guru/login', function () {

    $username = request('username');
    $password = request('password');

    if ($username === 'simpletastic' && $password === 'gajiguruhonorer') {

        session(['guru_login' => true]);

        return redirect('/guru/dashboard');
    }

    return back()->with('error', 'Username atau password salah.');
});


/*
|--------------------------------------------------------------------------
| DASHBOARD GURU
|--------------------------------------------------------------------------
*/

Route::get('/guru/dashboard', function () {

    if (!session('guru_login')) {
        return redirect('/guru');
    }

    $query = Pengerjaan::orderBy('created_at', 'desc');

    if (request('pertemuan')) {
        $query->where('pertemuan', request('pertemuan'));
    }

$pengerjaans = $query->get();

// Statistik rata-rata nilai murid per pertemuan.
// Nilai dinormalisasi ke skala 0–100 karena jumlah soal tiap pertemuan berbeda.
$jumlahPertanyaanPerPertemuan = [
    1 => 12,
    2 => 15,
    3 => 14,
];

$statistikPertemuan = collect();

foreach ($jumlahPertanyaanPerPertemuan as $nomorPertemuan => $jumlahPertanyaan) {
    $dataPertemuan = Pengerjaan::where('pertemuan', $nomorPertemuan)->get();

    $nilaiMurid = $dataPertemuan->map(function ($pengerjaan) use ($jumlahPertanyaan) {
        $totalSkor = 0;

        for ($i = 1; $i <= $jumlahPertanyaan; $i++) {
            $totalSkor += (int) $pengerjaan->{'nilai' . $i};
        }

        $skorMaksimum = $jumlahPertanyaan * 4;

        return $skorMaksimum > 0
            ? ($totalSkor / $skorMaksimum) * 100
            : 0;
    });

    $statistikPertemuan->push([
        'pertemuan' => $nomorPertemuan,
        'jumlah_murid' => $dataPertemuan->count(),
        'rata_rata' => $nilaiMurid->count() > 0
            ? round($nilaiMurid->avg(), 2)
            : 0,
    ]);
}

// Statistik rata-rata nilai per kelompok.
// Jika guru memilih pertemuan tertentu, statistik hanya dihitung
// untuk pertemuan tersebut.
$statistikKelompok = collect();

$pertemuanKelompok = request('pertemuan');

$queryKelompok = Pengerjaan::query()
    ->whereNotNull('kelompok')
    ->where('kelompok', '!=', '');

if ($pertemuanKelompok) {
    $queryKelompok->where('pertemuan', $pertemuanKelompok);
}

$dataKelompok = $queryKelompok->get();

foreach ($dataKelompok->groupBy('kelompok') as $namaKelompok => $anggotaKelompok) {

    $nilaiKelompok = $anggotaKelompok->map(function ($pengerjaan) use ($jumlahPertanyaanPerPertemuan) {

        $jumlahPertanyaan = $jumlahPertanyaanPerPertemuan[(int) $pengerjaan->pertemuan] ?? 0;

        if ($jumlahPertanyaan === 0) {
            return 0;
        }

        $totalSkor = 0;

        for ($i = 1; $i <= $jumlahPertanyaan; $i++) {
            $totalSkor += (int) $pengerjaan->{'nilai' . $i};
        }

        $skorMaksimum = $jumlahPertanyaan * 4;

        return $skorMaksimum > 0
            ? ($totalSkor / $skorMaksimum) * 100
            : 0;
    });

    $statistikKelompok->push([
        'kelompok' => $namaKelompok,
        'jumlah_murid' => $anggotaKelompok->count(),
        'rata_rata' => $nilaiKelompok->count() > 0
            ? round($nilaiKelompok->avg(), 2)
            : 0,
    ]);
}

return view('dashboard-guru', [
    'pengerjaans' => $pengerjaans,
    'statistikPertemuan' => $statistikPertemuan,
    'statistikKelompok' => $statistikKelompok
]);

});


/*
|--------------------------------------------------------------------------
| DETAIL PENGERJAAN MURID
|--------------------------------------------------------------------------
*/

Route::get('/guru/pengerjaan/{id}', function ($id) {

    if (!session('guru_login')) {
        return redirect('/guru');
    }

    $pengerjaan = Pengerjaan::findOrFail($id);

    return view('detail-pengerjaan', [
        'pengerjaan' => $pengerjaan
    ]);
});

Route::post('/guru/pengerjaan/{id}/nilai', function ($id) {

    if (!session('guru_login')) {
        return redirect('/guru');
    }

    $pengerjaan = Pengerjaan::findOrFail($id);

    for ($i = 1; $i <= 15; $i++) {

        $nilai = request('nilai' . $i);
        
        if ($nilai !== null && in_array((int) $nilai, [0, 1, 2, 3, 4])) {
            $pengerjaan->{'nilai' . $i} = (int) $nilai;
        }
    }

    $pengerjaan->save();

    return redirect('/guru/pengerjaan/' . $id)
        ->with('success', 'Penilaian berhasil disimpan.');

});

/*
|--------------------------------------------------------------------------
| LOGOUT GURU
|--------------------------------------------------------------------------
*/

Route::get('/guru/logout', function () {

    session()->forget('guru_login');

    return redirect('/guru');
});


/*
|--------------------------------------------------------------------------
| TEST SESSION
|--------------------------------------------------------------------------
*/

Route::get('/tes-session', function () {
    session(['tes' => 'berhasil']);

    return session('tes');
});