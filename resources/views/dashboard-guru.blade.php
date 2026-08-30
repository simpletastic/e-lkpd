<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Guru | E-LKPD Fisika</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0b0f12;
            color: #ffffff;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }

        /* HEADER */

        .header {
            margin-bottom: 30px;
        }

        .label {
            display: inline-block;
            color: #e3262e;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #999;
            font-size: 15px;
        }

        /* TOP BAR */

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
            padding: 20px;
            background: #151a1e;
            border: 1px solid #30363a;
        }

        .info-title {
            color: #aaa;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 20px;
            font-weight: bold;
        }

        .logout {
            display: inline-block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            border: 1px solid #555;
            transition: 0.2s;
        }

        .logout:hover {
            background: #b52327;
            border-color: #b52327;
        }

        /* TABLE */

        .section {
            background: #111619;
            border: 1px solid #30363a;
            padding: 25px;
        }

        .section-title {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        th {
            text-align: left;
            padding: 14px;
            background: #1b2024;
            color: #ddd;
            font-size: 13px;
            border-bottom: 1px solid #444;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #292e32;
            color: #ccc;
            font-size: 14px;
        }

        tr:hover td {
            background: #171c20;
        }

        .pertemuan {
            color: #e3262e;
            font-weight: bold;
        }

        .btn-detail {
            display: inline-block;
            padding: 8px 14px;
            background: #b52327;
            color: white;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            transition: 0.2s;
        }

        .btn-detail:hover {
            background: #d12b30;
        }

        .empty {
            padding: 30px;
            text-align: center;
            color: #888;
        }

/* GRAFIK NILAI PER PERTEMUAN */

.chart-section {
    margin-bottom: 30px;
}

.chart-subtitle {
    color: #999;
    font-size: 13px;
    margin-top: -12px;
    margin-bottom: 24px;
}

.chart-wrapper {
    width: 100%;
    min-height: 330px;
    padding: 25px;
    background: #0d1215;
    border: 1px solid #30363a;
}

.chart {
    display: flex;
    align-items: flex-end;
    justify-content: space-around;
    gap: 30px;
    height: 260px;
    border-bottom: 1px solid #444;
    position: relative;
    padding: 0 25px;
}

.chart-grid {
    position: absolute;
    left: 25px;
    right: 25px;
    height: 1px;
    background: #252b2f;
    z-index: 0;
}

.chart-grid.grid-25 {
    bottom: 25%;
}

.chart-grid.grid-50 {
    bottom: 50%;
}

.chart-grid.grid-75 {
    bottom: 75%;
}

.chart-column {
    flex: 1;
    max-width: 150px;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    position: relative;
    z-index: 2;
}

.chart-value {
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 8px;
}

.chart-bar {
    width: min(75px, 70%);
    min-height: 2px;
    background: #b52327;
    border: 1px solid #d12b30;
    transition: 0.2s;
}

.chart-bar:hover {
    background: #d12b30;
}

.chart-label {
    margin-top: 10px;
    font-size: 13px;
    font-weight: bold;
    color: #ddd;
}

.chart-count {
    margin-top: 4px;
    font-size: 11px;
    color: #777;
}

.chart-scale {
    display: flex;
    justify-content: space-between;
    margin: 8px 25px 0;
    color: #666;
    font-size: 11px;
}

.chart-note {
    margin-top: 15px;
    color: #777;
    font-size: 12px;
}

/* GRAFIK NILAI PER KELOMPOK */

.group-chart {
    display: flex;
    align-items: flex-end;
    justify-content: space-around;
    gap: 15px;
    height: 260px;
    border-bottom: 1px solid #444;
    position: relative;
    padding: 0 15px;
    overflow-x: auto;
}

.group-chart-column {
    flex: 1;
    min-width: 85px;
    max-width: 130px;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    position: relative;
    z-index: 2;
}

.group-chart-value {
    font-size: 13px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 8px;
    white-space: nowrap;
}

.group-chart-bar {
    width: min(55px, 70%);
    min-height: 2px;
    background: #b52327;
    border: 1px solid #d12b30;
    transition: 0.2s;
}

.group-chart-bar:hover {
    background: #d12b30;
}

.group-chart-label {
    margin-top: 10px;
    font-size: 12px;
    font-weight: bold;
    color: #ddd;
    white-space: nowrap;
}

.group-chart-count {
    margin-top: 4px;
    font-size: 10px;
    color: #777;
    white-space: nowrap;
}

.group-empty {
    padding: 40px 20px;
    text-align: center;
    color: #777;
    font-size: 13px;
}

/* FILTER PERTEMUAN */

.filter {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
}

.btn-filter {
    display: inline-block;
    padding: 10px 16px;
    border: 1px solid #444;
    color: #ccc;
    text-decoration: none;
    font-size: 13px;
    font-weight: bold;
    transition: 0.2s;
}

.btn-filter:hover {
    background: #b52327;
    border-color: #b52327;
    color: white;
}

.btn-filter.active {
    background: #b52327;
    border-color: #b52327;
    color: white;
}

        /* FOOTER */

        footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            color: #666;
            font-size: 13px;
        }

        footer span {
            color: #e3262e;
        }


/* DASHBOARD BANNER */

.dashboard-banner {
    width: 100%;
    height: 280px;
    overflow: hidden;
    background: #111;
}

.dashboard-banner img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    object-position: center;
}

        /* RESPONSIVE */

        @media (max-width: 700px) {

            .container {
                width: 94%;
                padding: 25px 0;
            }

            h1 {
                font-size: 26px;
            }

            .top-bar {
                flex-direction: column;
                align-items: flex-start;
            }

            .logout {
                width: 100%;
                text-align: center;
            }

            .section {
                padding: 18px;
            }
        }
    </style>
</head>

<body>

<div class="dashboard-banner">
    <img src="{{ asset('images/zhuge-liang.jpg') }}" alt="Zhuge Liang">
</div>

 <div class="container">

    <!-- HEADER -->

    <div class="header">

        <div class="label">
            E-LKPD FISIKA
        </div>

        <h1>Dashboard Guru</h1>

        <div class="subtitle">
            Pemantauan hasil pengerjaan E-LKPD Suhu dan Kalor
        </div>

    </div>


    <!-- INFORMASI -->

    <div class="top-bar">

        <div>
            <div class="info-title">
                TOTAL PENGERJAAN
            </div>

            <div class="info-value">
                {{ $pengerjaans->count() }}
            </div>
        </div>


        <div>
            <div class="info-title">
                STATUS SISTEM
            </div>

            <div class="info-value">
                ONLINE
            </div>
        </div>


        <a href="{{ url('/guru/logout') }}" class="logout">
            LOGOUT
        </a>

    </div>

<!-- GRAFIK NILAI PER PERTEMUAN -->
<div class="section chart-section">

    <div class="section-title">
        Rata-rata Nilai Murid per Pertemuan
    </div>

    <div class="chart-subtitle">
        Perbandingan rata-rata nilai seluruh murid pada Pertemuan 01, 02, dan 03.
    </div>

    <div class="chart-wrapper">

        <div class="chart">

            <div class="chart-grid grid-25"></div>
            <div class="chart-grid grid-50"></div>
            <div class="chart-grid grid-75"></div>

            @foreach($statistikPertemuan as $statistik)

                <div class="chart-column">

                    <div class="chart-value">
                        {{ number_format($statistik['rata_rata'], 2) }}
                    </div>

                    <div
                        class="chart-bar"
                        style="height: {{ max(2, min(100, $statistik['rata_rata'])) }}%;"
                        title="Pertemuan {{ str_pad($statistik['pertemuan'], 2, '0', STR_PAD_LEFT) }}: {{ number_format($statistik['rata_rata'], 2) }}"
                    ></div>

                    <div class="chart-label">
                        Pertemuan {{ str_pad($statistik['pertemuan'], 2, '0', STR_PAD_LEFT) }}
                    </div>

                    <div class="chart-count">
                        {{ $statistik['jumlah_murid'] }} murid
                    </div>

                </div>

            @endforeach

        </div>

        <div class="chart-scale">
            <span>0</span>
            <span>25</span>
            <span>50</span>
            <span>75</span>
            <span>100</span>
        </div>

        <div class="chart-note">
            Nilai dihitung pada skala 0–100 berdasarkan skor rubrik tiap pertemuan.
        </div>

    </div>

</div>

<!-- GRAFIK NILAI PER KELOMPOK -->

<div class="section chart-section">

    <div class="section-title">
        Rata-rata Nilai per Kelompok
    </div>

    @if(request('pertemuan'))

        <div class="chart-subtitle">
            Perbandingan rata-rata nilai kelompok pada
            Pertemuan {{ str_pad(request('pertemuan'), 2, '0', STR_PAD_LEFT) }}.
        </div>

        <div class="chart-wrapper">

            @if($statistikKelompok->count() > 0)

                <div class="group-chart">

                    @foreach($statistikKelompok as $statistik)

                        <div class="group-chart-column">

                            <div class="group-chart-value">
                                {{ number_format($statistik['rata_rata'], 2) }}
                            </div>

                            <div
                                class="group-chart-bar"
                                style="height: {{ max(2, min(100, $statistik['rata_rata'])) }}%;"
                                title="{{ $statistik['kelompok'] }}: {{ number_format($statistik['rata_rata'], 2) }}"
                            ></div>

                            <div class="group-chart-label">
                                {{ $statistik['kelompok'] }}
                            </div>

                            <div class="group-chart-count">
                                {{ $statistik['jumlah_murid'] }} murid
                            </div>

                        </div>

                    @endforeach

                </div>

                <div class="chart-scale">
                    <span>0</span>
                    <span>25</span>
                    <span>50</span>
                    <span>75</span>
                    <span>100</span>
                </div>

                <div class="chart-note">
                    Nilai kelompok dihitung berdasarkan rata-rata nilai murid dalam kelompok
                    pada pertemuan yang dipilih.
                </div>

            @else

                <div class="group-empty">
                    Belum ada data kelompok pada pertemuan ini.
                </div>

            @endif

        </div>

    @else

        <div class="chart-wrapper">
            <div class="group-empty">
                Pilih salah satu pertemuan untuk melihat rata-rata nilai setiap kelompok.
            </div>
        </div>

    @endif

</div>

    <!-- DATA PENGERJAAN -->
<div class="section">

    <div class="section-title">
        Data Pengerjaan Murid
    </div>

    <div class="filter">

        <a
            href="{{ url('/guru/dashboard') }}"
            class="btn-filter {{ !request('pertemuan') ? 'active' : '' }}"
        >
            SEMUA
        </a>

        <a
            href="{{ url('/guru/dashboard?pertemuan=1') }}"
            class="btn-filter {{ request('pertemuan') == 1 ? 'active' : '' }}"
        >
            PERTEMUAN 01
        </a>

        <a
            href="{{ url('/guru/dashboard?pertemuan=2') }}"
            class="btn-filter {{ request('pertemuan') == 2 ? 'active' : '' }}"
        >
            PERTEMUAN 02
        </a>

        <a
            href="{{ url('/guru/dashboard?pertemuan=3') }}"
            class="btn-filter {{ request('pertemuan') == 3 ? 'active' : '' }}"
        >
            PERTEMUAN 03
        </a>

    </div>

        @if($pengerjaans->count() > 0)

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>
                            <th>No.</th>
                            <th>Nama Murid</th>
                            <th>Kelas</th>
                            <th>Kelompok</th>
                            <th>Pertemuan</th>
                            <th>Waktu</th>
                            <th>Nilai</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>


                    <tbody>

                        @foreach($pengerjaans as $index => $pengerjaan)

                            <tr>

                                <td>
                                    {{ $index + 1 }}
                                </td>

                                <td>
                                    {{ $pengerjaan->nama }}
                                </td>

                                <td>
                                    {{ $pengerjaan->kelas }}
                                </td>

                                <td>
                                    {{ $pengerjaan->kelompok }}
                                </td>

                                <td class="pertemuan">
                                    Pertemuan {{ str_pad($pengerjaan->pertemuan, 2, '0', STR_PAD_LEFT) }}
                                </td>

                                <td>
                                    {{ $pengerjaan->created_at->format('d/m/Y H:i') }}
                                </td>

                                <td>
                                    @php
                                        $jumlahPertanyaan = match ((int) $pengerjaan->pertemuan) {
                                            1 => 12,
                                            2 => 15,
                                            3 => 14,
                                            default => 0,
                                        };

                                        $totalSkor = 0;

                                        for ($i = 1; $i <= $jumlahPertanyaan; $i++) {
                                            $totalSkor += (int) $pengerjaan->{'nilai' . $i};
                                        }

                                        $skorMaksimum = $jumlahPertanyaan * 4;

                                        $nilaiAkhir = $skorMaksimum > 0
                                            ? ($totalSkor / $skorMaksimum) * 100
                                            : 0;
                                        @endphp

                                        {{ number_format($nilaiAkhir, 2) }}
                                    </td>

                                <td>

                                    <a
                                        href="{{ url('/guru/pengerjaan/' . $pengerjaan->id) }}"
                                        class="btn-detail"
                                    >
                                        LIHAT DETAIL
                                    </a>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <div class="empty">
                Belum ada data pengerjaan murid.
            </div>

        @endif

    </div>

    <!-- FOOTER -->

    <footer>
        E-LKPD Fisika — <span>Suhu dan Kalor</span>
    </footer>

</div>

</body>
</html>