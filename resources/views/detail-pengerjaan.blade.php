<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pengerjaan | E-LKPD Fisika</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0b0f12;
            color: white;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 0;
        }

        .header {
            margin-bottom: 30px;
        }

        .label {
            color: #e3262e;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #999;
        }

        .info-box {
            background: #151a1e;
            border: 1px solid #30363a;
            padding: 25px;
            margin-bottom: 25px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-item {
            padding: 15px;
            background: #1b2024;
            border: 1px solid #30363a;
        }

        .info-label {
            color: #888;
            font-size: 12px;
            margin-bottom: 7px;
        }

        .info-value {
            font-weight: bold;
        }

        .pertemuan {
            color: #e3262e;
        }

        .answers {
            background: #111619;
            border: 1px solid #30363a;
            padding: 25px;
        }

        .section-title {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .answer {
            margin-bottom: 20px;
            padding: 18px;
            background: #151a1e;
            border-left: 3px solid #b52327;
        }

        .question-number {
            color: #e3262e;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .answer-text {
            color: #ddd;
            line-height: 1.6;
            white-space: pre-wrap;
        }

        .empty {
            color: #777;
            font-style: italic;
        }

        .back {
            display: inline-block;
            margin-bottom: 25px;
            padding: 11px 18px;
            border: 1px solid #555;
            color: white;
            text-decoration: none;
        }

        .back:hover {
            background: #b52327;
            border-color: #b52327;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 13px;
        }

        footer span {
            color: #e3262e;
        }

/* ==============================
   RUBRIK PENILAIAN
   ============================== */

.rubric {
    background: #151a1e;
    border: 1px solid #30363a;
    padding: 25px;
    margin-bottom: 25px;
}

.rubric-title {
    font-size: 20px;
    margin-bottom: 18px;
}

.rubric-subtitle {
    color: #999;
    font-size: 13px;
    margin-bottom: 18px;
}

.rubric-table {
    width: 100%;
    border-collapse: collapse;
}

.rubric-table th,
.rubric-table td {
    border: 1px solid #30363a;
    padding: 12px;
    text-align: left;
    vertical-align: top;
}

.rubric-table th {
    background: #1b2024;
    color: #fff;
}

.rubric-table td:first-child {
    width: 70px;
    text-align: center;
    color: #e3262e;
    font-weight: bold;
}

.rubric-table td {
    color: #ddd;
    line-height: 1.5;
}


/* ==============================
   PILIHAN NILAI
   ============================== */

.score-area {
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px solid #30363a;
}

.score-label {
    display: block;
    color: #aaa;
    font-size: 12px;
    margin-bottom: 10px;
    letter-spacing: 1px;
}

.score-options {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.score-option {
    position: relative;
}

.score-option input {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.score-option label {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 38px;
    border: 1px solid #555;
    background: #1b2024;
    color: #ddd;
    cursor: pointer;
    font-weight: bold;
    transition: 0.2s;
}

.score-option label:hover {
    border-color: #e3262e;
    color: #fff;
}

.score-option input:checked + label {
    background: #e3262e;
    border-color: #e3262e;
    color: #fff;
}

.save-score {
    display: block;
    width: 100%;
    margin-top: 25px;
    padding: 14px 20px;
    border: none;
    background: #e3262e;
    color: white;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
}

.save-score:hover {
    background: #b52327;
}


/* ==============================
   RESPONSIVE RUBRIK
   ============================== */

@media (max-width: 700px) {

    .rubric {
        padding: 18px;
        overflow-x: auto;
    }

    .rubric-table {
        min-width: 600px;
    }

    .score-options {
        gap: 6px;
    }

    .score-option label {
        width: 40px;
        height: 36px;
    }
}


        @media (max-width: 700px) {

            .container {
                width: 94%;
                padding: 25px 0;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 25px;
            }
        }

/* PESAN BERHASIL */

.success-message {
    background: #16251a;
    border: 1px solid #2f6b3a;
    color: #7ee787;
    padding: 14px 18px;
    margin-bottom: 25px;
    font-size: 14px;
}

    </style>
</head>

<body>

<div class="container">

    <a href="{{ url('/guru/dashboard') }}" class="back">
        ← KEMBALI KE DASHBOARD
    </a>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <div class="header">

        <div class="label">
            DETAIL PENGERJAAN
        </div>

        <h1>{{ $pengerjaan->nama }}</h1>

        <div class="subtitle">
            Hasil pengerjaan E-LKPD Fisika — Suhu dan Kalor
        </div>

    </div>


    <!-- INFORMASI MURID -->

    <div class="info-box">

        <div class="info-grid">

            <div class="info-item">

                <div class="info-label">
                    NAMA MURID
                </div>

                <div class="info-value">
                    {{ $pengerjaan->nama }}
                </div>

            </div>


            <div class="info-item">

                <div class="info-label">
                    KELAS
                </div>

                <div class="info-value">
                    {{ $pengerjaan->kelas }}
                </div>

            </div>

            <div class="info-item">
                <div class="info-label">
                    KELOMPOK
                </div>

                <div class="info-value">
                    {{ $pengerjaan->kelompok }}
                </div>

</div>

            <div class="info-item">

                <div class="info-label">
                    PERTEMUAN
                </div>

                <div class="info-value pertemuan">
                    Pertemuan
                    {{ str_pad($pengerjaan->pertemuan, 2, '0', STR_PAD_LEFT) }}
                </div>

            </div>


            <div class="info-item">

                <div class="info-label">
                    WAKTU PENGERJAAN
                </div>

                <div class="info-value">
                    {{ $pengerjaan->created_at->format('d/m/Y H:i') }}
                </div>

            </div>

        </div>

    </div>

<!-- ==============================
     RUBRIK PENILAIAN
     ============================== -->

@if($pengerjaan->pertemuan == 1)

    <!-- ==========================
         PERTEMUAN 1
         ========================== -->

    <!-- RUBRIK 1: Q1-Q4 -->
    <div class="rubric">

        <div class="rubric-title">
            Kemampuan Mengidentifikasi Informasi dan Mengemukakan Dugaan Awal
        </div>

        <div class="rubric-subtitle">
            Berdasarkan fenomena yang diberikan (Q1–Q4) — Skor 0–4
        </div>

        <table class="rubric-table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Kriteria</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>0</td>
                    <td>
                        Murid tidak memberikan jawaban atau jawaban tidak berkaitan
                        dengan fenomena yang diberikan.
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        Murid mengidentifikasi informasi atau mengemukakan dugaan
                        yang kurang berkaitan dengan fenomena dan tidak memberikan
                        alasan yang memadai.
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        Murid mengidentifikasi sebagian informasi atau mengemukakan
                        dugaan yang masih berkaitan dengan fenomena, tetapi
                        penjelasan atau alasan yang diberikan masih terbatas.
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Murid mengidentifikasi informasi yang relevan serta
                        mengemukakan dugaan awal yang sesuai dengan fenomena disertai
                        alasan yang cukup, tetapi hubungan antara informasi,
                        dugaan, dan fenomena belum sepenuhnya jelas.
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Murid mengidentifikasi informasi yang relevan serta
                        mengemukakan dugaan awal yang logis berdasarkan hasil
                        pengamatan atau pengetahuan awal dan menjelaskan
                        keterkaitannya dengan fenomena.
                    </td>
                </tr>

            </tbody>
        </table>

    </div>


    <!-- RUBRIK 2: Q5-Q11 -->
    <div class="rubric">

        <div class="rubric-title">
            Kemampuan Menjelaskan dan Menganalisis Permasalahan
        </div>

        <div class="rubric-subtitle">
            Berdasarkan konsep dan informasi yang relevan (Q5–Q11) — Skor 0–4
        </div>

        <table class="rubric-table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Kriteria</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>0</td>
                    <td>
                        Murid tidak memberikan jawaban atau jawaban tidak relevan
                        dengan pertanyaan yang diajukan.
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        Murid memberikan jawaban, tetapi konsep yang digunakan
                        tidak tepat atau alasan yang diberikan tidak sesuai dengan
                        permasalahan.
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        Murid memberikan jawaban yang mengandung sebagian konsep
                        yang benar, tetapi penjelasan atau alasan masih kurang
                        lengkap, kurang logis, atau masih terdapat miskonsepsi.
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Murid memberikan jawaban yang benar disertai alasan yang
                        logis dan didukung konsep yang sesuai, tetapi penjelasan
                        belum lengkap atau belum mengaitkan seluruh informasi yang
                        diperlukan.
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Murid memberikan jawaban yang benar, lengkap, logis,
                        menggunakan konsep yang tepat, serta mampu menghubungkan
                        informasi atau bukti yang relevan untuk mendukung jawabannya.
                    </td>
                </tr>

            </tbody>
        </table>

    </div>


    <!-- RUBRIK 3: Q12 -->
    <div class="rubric">

        <div class="rubric-title">
            Kemampuan Merefleksikan Proses Pembelajaran
        </div>

        <div class="rubric-subtitle">
            Berdasarkan pengalaman belajar (Q12) — Skor 0–4
        </div>

        <table class="rubric-table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Kriteria</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>0</td>
                    <td>
                        Murid tidak memberikan refleksi atau jawaban tidak berkaitan
                        dengan pengalaman pembelajaran.
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        Murid memberikan refleksi yang sangat singkat, tidak
                        menjelaskan bagian pembelajaran secara jelas, atau alasan
                        tidak relevan.
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        Murid menyebutkan bagian pembelajaran yang membantu, tetapi
                        alasan yang diberikan masih umum atau kurang jelas, atau
                        penjelasan belum mencapai dua kalimat yang bermakna.
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Murid menyebutkan bagian pembelajaran yang membantu
                        memahami konsep suhu dan memberikan alasan yang relevan
                        dalam minimal dua kalimat, tetapi penjelasan belum spesifik.
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Murid menyebutkan bagian pembelajaran yang paling membantu
                        memahami konsep suhu dan menjelaskan secara spesifik
                        bagaimana kegiatan tersebut membantu pemahamannya dengan
                        minimal dua kalimat yang relevan.
                    </td>
                </tr>

            </tbody>
        </table>

    </div>


@elseif($pengerjaan->pertemuan == 2)

    <!-- ==========================
         PERTEMUAN 2
         ========================== -->

    <!-- RUBRIK 1: Q1-Q7 -->
    <div class="rubric">

        <div class="rubric-title">
            Kemampuan Mengidentifikasi Informasi dan Mengemukakan Dugaan Awal
        </div>

        <div class="rubric-subtitle">
            Berdasarkan fenomena dan permasalahan yang diberikan (Q1–Q7) — Skor 0–4
        </div>

        <table class="rubric-table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Kriteria</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>0</td>
                    <td>
                        Murid tidak memberikan jawaban atau jawaban tidak berkaitan
                        dengan fenomena atau permasalahan yang diberikan.
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        Murid mengidentifikasi informasi atau mengemukakan dugaan
                        yang kurang berkaitan dengan fenomena atau permasalahan
                        dan tidak memberikan alasan yang memadai.
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        Murid mengidentifikasi sebagian informasi atau mengemukakan
                        dugaan yang masih berkaitan dengan fenomena atau
                        permasalahan, tetapi penjelasan atau alasan yang diberikan
                        masih terbatas.
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Murid mengidentifikasi informasi yang relevan serta
                        mengemukakan dugaan awal yang sesuai dengan fenomena atau
                        permasalahan disertai alasan yang cukup, tetapi hubungan
                        antara informasi, dugaan, dan permasalahan belum
                        sepenuhnya jelas.
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Murid mengidentifikasi informasi yang relevan serta
                        mengemukakan dugaan awal yang logis berdasarkan hasil
                        pengamatan atau pengetahuan awal dan menjelaskan
                        keterkaitannya dengan fenomena atau permasalahan.
                    </td>
                </tr>

            </tbody>
        </table>

    </div>


    <!-- RUBRIK 2: Q8-Q14 -->
    <div class="rubric">

        <div class="rubric-title">
            Kemampuan Menjelaskan dan Menganalisis Permasalahan
        </div>

        <div class="rubric-subtitle">
            Berdasarkan konsep dan informasi yang relevan (Q8–Q14) — Skor 0–4
        </div>

        <table class="rubric-table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Kriteria</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>0</td>
                    <td>
                        Murid tidak memberikan jawaban atau jawaban tidak relevan
                        dengan pertanyaan yang diajukan.
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        Murid memberikan jawaban, tetapi konsep yang digunakan
                        tidak tepat atau alasan yang diberikan tidak sesuai dengan
                        permasalahan.
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        Murid memberikan jawaban yang mengandung sebagian konsep
                        yang benar, tetapi penjelasan atau alasan masih kurang
                        lengkap, kurang logis, atau masih terdapat miskonsepsi.
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Murid memberikan jawaban yang benar disertai alasan yang
                        logis dan didukung konsep yang sesuai, tetapi penjelasan
                        belum lengkap atau belum mengaitkan seluruh informasi yang
                        diperlukan.
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Murid memberikan jawaban yang benar, lengkap, logis,
                        menggunakan konsep yang tepat, serta mampu menghubungkan
                        informasi atau bukti yang relevan untuk mendukung jawabannya.
                    </td>
                </tr>

            </tbody>
        </table>

    </div>


    <!-- RUBRIK 3: Q15 -->
    <div class="rubric">

        <div class="rubric-title">
            Kemampuan Merefleksikan Proses Pembelajaran
        </div>

        <div class="rubric-subtitle">
            Berdasarkan pengalaman belajar (Q15) — Skor 0–4
        </div>

        <table class="rubric-table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Kriteria</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>0</td>
                    <td>
                        Murid tidak memberikan refleksi atau jawaban tidak berkaitan
                        dengan pengalaman pembelajaran.
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        Murid memberikan refleksi yang sangat singkat, tidak
                        menjelaskan bagian pembelajaran secara jelas, atau alasan
                        tidak relevan.
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        Murid menyebutkan bagian pembelajaran yang membantu
                        memahami konsep kalor, tetapi alasan yang diberikan masih
                        umum atau kurang jelas, atau penjelasan belum mencapai
                        dua kalimat yang bermakna.
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Murid menyebutkan bagian pembelajaran yang membantu
                        memahami konsep kalor dan memberikan alasan yang relevan
                        dalam minimal dua kalimat, tetapi penjelasan belum spesifik.
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Murid menyebutkan bagian pembelajaran yang paling membantu
                        memahami konsep kalor dan menjelaskan secara spesifik
                        bagaimana kegiatan tersebut membantu pemahamannya dengan
                        minimal dua kalimat yang relevan.
                    </td>
                </tr>

            </tbody>
        </table>

    </div>


@elseif($pengerjaan->pertemuan == 3)

    <!-- ==========================
         PERTEMUAN 3
         ========================== -->

    <!-- RUBRIK 1: Q1-Q6 -->
    <div class="rubric">

        <div class="rubric-title">
            Kemampuan Mengidentifikasi Informasi dan Mengemukakan Dugaan Awal
        </div>

        <div class="rubric-subtitle">
            Berdasarkan fenomena dan permasalahan yang diberikan (Q1–Q6) — Skor 0–4
        </div>

        <table class="rubric-table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Kriteria</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>0</td>
                    <td>
                        Murid tidak memberikan jawaban atau jawaban tidak berkaitan
                        dengan fenomena atau permasalahan yang diberikan.
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        Murid mengidentifikasi informasi atau mengemukakan dugaan
                        yang kurang berkaitan dengan fenomena atau permasalahan
                        dan tidak memberikan alasan yang memadai.
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        Murid mengidentifikasi sebagian informasi atau mengemukakan
                        dugaan yang masih berkaitan dengan fenomena atau
                        permasalahan, tetapi penjelasan atau alasan yang diberikan
                        masih terbatas.
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Murid mengidentifikasi informasi yang relevan serta
                        mengemukakan dugaan awal yang sesuai dengan fenomena atau
                        permasalahan disertai alasan yang cukup, tetapi hubungan
                        antara informasi, dugaan, dan permasalahan belum
                        sepenuhnya jelas.
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Murid mengidentifikasi informasi yang relevan serta
                        mengemukakan dugaan awal yang logis berdasarkan hasil
                        pengamatan atau pengetahuan awal dan menjelaskan
                        keterkaitannya dengan fenomena atau permasalahan.
                    </td>
                </tr>

            </tbody>
        </table>

    </div>


    <!-- RUBRIK 2: Q7-Q13 -->
    <div class="rubric">

        <div class="rubric-title">
            Kemampuan Menjelaskan dan Menganalisis Permasalahan
        </div>

        <div class="rubric-subtitle">
            Berdasarkan konsep dan informasi yang relevan (Q7–Q13) — Skor 0–4
        </div>

        <table class="rubric-table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Kriteria</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>0</td>
                    <td>
                        Murid tidak memberikan jawaban atau jawaban tidak relevan
                        dengan pertanyaan yang diajukan.
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        Murid memberikan jawaban, tetapi konsep yang digunakan
                        tidak tepat atau alasan yang diberikan tidak sesuai dengan
                        permasalahan.
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        Murid memberikan jawaban yang mengandung sebagian konsep
                        yang benar, tetapi penjelasan atau alasan masih kurang
                        lengkap, kurang logis, atau masih terdapat miskonsepsi.
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Murid memberikan jawaban yang benar disertai alasan yang
                        logis dan didukung konsep yang sesuai, tetapi penjelasan
                        belum lengkap atau belum mengaitkan seluruh informasi yang
                        diperlukan.
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Murid memberikan jawaban yang benar, lengkap, logis,
                        menggunakan konsep yang tepat, serta mampu menghubungkan
                        informasi atau bukti yang relevan untuk mendukung jawabannya.
                    </td>
                </tr>

            </tbody>
        </table>

    </div>


    <!-- RUBRIK 3: Q14 -->
    <div class="rubric">

        <div class="rubric-title">
            Kemampuan Merefleksikan Proses Pembelajaran
        </div>

        <div class="rubric-subtitle">
            Berdasarkan pengalaman belajar (Q14) — Skor 0–4
        </div>

        <table class="rubric-table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Kriteria</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>0</td>
                    <td>
                        Murid tidak memberikan refleksi atau jawaban tidak berkaitan
                        dengan pengalaman pembelajaran.
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        Murid memberikan refleksi yang sangat singkat, tidak
                        menjelaskan bagian pembelajaran secara jelas, atau alasan
                        tidak relevan.
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        Murid menyebutkan bagian pembelajaran yang membantu
                        memahami konsep suhu, kalor, dan pemuaian, tetapi alasan
                        yang diberikan masih umum atau kurang jelas, atau
                        penjelasan belum mencapai dua kalimat yang bermakna.
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Murid menyebutkan bagian pembelajaran yang membantu
                        memahami konsep suhu, kalor, dan pemuaian serta memberikan
                        alasan yang relevan dalam minimal dua kalimat, tetapi
                        penjelasan belum spesifik.
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Murid menyebutkan bagian pembelajaran yang paling membantu
                        memahami konsep suhu, kalor, dan pemuaian serta menjelaskan
                        secara spesifik bagaimana kegiatan tersebut membantu
                        pemahamannya dengan minimal dua kalimat yang relevan.
                    </td>
                </tr>

            </tbody>
        </table>

    </div>

@endif

    <!-- JAWABAN -->

<form action="{{ url('/guru/pengerjaan/' . $pengerjaan->id . '/nilai') }}" method="POST">

    @csrf

    <div class="answers">
        <div class="section-title">
            Jawaban Murid
        </div>

@php
    $jumlahPertanyaan = match ((int) $pengerjaan->pertemuan) {
        1 => 12,
        2 => 15,
        3 => 14,
        default => 0,
    };
@endphp

@for($i = 1; $i <= $jumlahPertanyaan; $i++)

            <div class="answer">

                <div class="question-number">
                    JAWABAN {{ $i }}
                </div>

                <div class="answer-text">

                    @if($pengerjaan->{'jawaban' . $i})
                        {{ $pengerjaan->{'jawaban' . $i} }}
                    @else
                        <span class="empty">
                            Tidak ada jawaban.
                        </span>
                    @endif

                </div>

        <div class="score-area">

            <span class="score-label">
                NILAI JAWABAN
            </span>

            <div class="score-options">

                @for($score = 0; $score <= 4; $score++)

                    <div class="score-option">

                        <input
                            type="radio"
                            id="nilai{{ $i }}_{{ $score }}"
                            name="nilai{{ $i }}"
                            value="{{ $score }}"
                            {{ $pengerjaan->{'nilai' . $i} == $score ? 'checked' : '' }}
                        >

                        <label for="nilai{{ $i }}_{{ $score }}">
                            {{ $score }}
                        </label>

                    </div>

                @endfor

            </div>

        </div>

    </div>

@endfor

        <button type="submit" class="save-score">
            SIMPAN PENILAIAN
        </button>

    </div>

</form>

    <footer>
        E-LKPD Fisika — <span>Suhu dan Kalor</span>
    </footer>

</div>

</body>
</html>