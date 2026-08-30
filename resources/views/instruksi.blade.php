<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Petunjuk Pengerjaan | E-LKPD Fisika</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #080b0d;
            color: #dcdcdc;
            min-height: 100vh;
            padding: 30px;
        }

        /* =========================
           CONTAINER UTAMA
        ========================== */

        .container {
            width: 100%;
            max-width: 1100px;
            margin: auto;

            background: #101416;

            border: 1px solid #2d3438;

            box-shadow:
                0 0 35px rgba(0, 0, 0, 0.75);
        }


        /* =========================
           HEADER
        ========================== */

        .header {
            position: relative;

            padding: 35px 45px;

            background:
                linear-gradient(
                    90deg,
                    #101416,
                    #171c1f
                );

            border-bottom: 1px solid #343b3f;
        }

        .header-label {
            display: inline-block;

            padding: 6px 12px;

            margin-bottom: 15px;

            background: #191e21;

            border: 1px solid #343b3f;

            color: #888;

            font-size: 11px;

            letter-spacing: 2px;

            text-transform: uppercase;
        }

        .header h1 {
            font-size: 32px;

            letter-spacing: 5px;

            color: #e5e5e5;

            font-weight: 700;
        }

        .header h1::before {
            content: "» ";

            color: #a92828;
        }

        .header p {
            margin-top: 10px;

            color: #777;

            font-size: 14px;

            letter-spacing: 1px;
        }


        /* =========================
           IDENTITAS
        ========================== */

        .identity {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 20px;

            padding: 25px 45px;

            border-bottom: 1px solid #292f32;
        }

        .identity-box {
            padding: 16px 20px;

            background: #151a1c;

            border: 1px solid #30373a;
        }

        .identity-label {
            font-size: 11px;

            color: #777;

            letter-spacing: 2px;

            margin-bottom: 7px;
        }

        .identity-value {
            font-size: 16px;

            color: #ddd;

            font-weight: bold;
        }


        /* =========================
           PETUNJUK
        ========================== */

        .content {
            padding: 35px 45px;
        }

        .section-title {
            font-size: 18px;

            letter-spacing: 3px;

            color: #ddd;

            margin-bottom: 22px;

            text-transform: uppercase;
        }

        .section-title::before {
            content: "◆ ";

            color: #a92828;
        }


        /* =========================
           INSTRUCTION CARD
        ========================== */

        .instruction-list {
            display: flex;

            flex-direction: column;

            gap: 12px;
        }

        .instruction {
            display: flex;

            align-items: stretch;

            background: #151a1c;

            border: 1px solid #2e3538;

            transition: 0.2s;
        }

        .instruction:hover {
            border-color: #6b2b2b;

            background: #181d1f;
        }

        .number {
            width: 65px;

            display: flex;

            align-items: center;

            justify-content: center;

            flex-shrink: 0;

            background: #191e21;

            border-right: 1px solid #30373a;

            color: #a92828;

            font-size: 20px;

            font-weight: bold;
        }

        .instruction-text {
            padding: 17px 20px;
        }

        .instruction-text h3 {
            font-size: 15px;

            color: #d9d9d9;

            margin-bottom: 5px;

            letter-spacing: 0.5px;
        }

        .instruction-text p {
            font-size: 12px;

            line-height: 1.6;

            color: #777;
        }


        /* =========================
           WARNING / NOTE
        ========================== */

        .note {
            margin-top: 25px;

            padding: 17px 20px;

            background: #151a1c;

            border-left: 3px solid #a92828;

            color: #888;

            font-size: 12px;

            line-height: 1.6;
        }

        .note strong {
            color: #c02a2a;
        }


        /* =========================
           BUTTON
        ========================== */

        .action {
            margin-top: 30px;

            text-align: right;
        }

        .btn-start {
            display: inline-block;

            padding: 14px 28px;

            background: #9f2424;

            border: none;

            color: white;

            text-decoration: none;

            font-size: 13px;

            font-weight: bold;

            letter-spacing: 2px;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-start:hover {
            background: #c32c2c;

            box-shadow:
                0 0 15px rgba(195, 44, 44, 0.25);
        }

        .btn-back {
    display: inline-block;

    padding: 14px 22px;

    margin-right: 10px;

    background: transparent;

    border: 1px solid #3a4145;

    color: #888;

    text-decoration: none;

    font-size: 13px;

    font-weight: bold;

    letter-spacing: 1px;

    transition: 0.2s;
}

.btn-back:hover {
    color: #ddd;

    border-color: #777;

    background: #151a1c;
}

.action {
    display: flex;
    justify-content: flex-end;
    align-items: center;

    gap: 10px;

    margin-top: 30px;
}
/* =========================
   KARTU PERTEMUAN
========================= */

.meeting-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 30px;
}

.meeting-card {
    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 22px 25px;

    background: #151a1c;
    border: 1px solid #2e3538;

    transition: 0.2s;
}

.meeting-card:hover {
    border-color: #6b2b2b;
    background: #181d1f;
}

.meeting-info {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.meeting-number {
    font-size: 11px;
    letter-spacing: 2px;
    color: #a92828;
    font-weight: bold;
}

.meeting-title {
    font-size: 17px;
    color: #ddd;
    font-weight: bold;
}

.meeting-description {
    font-size: 12px;
    color: #777;
}

.meeting-card form {
    margin-left: 20px;
}


        /* =========================
           FOOTER
        ========================== */

        .footer {
            padding: 18px 45px;

            border-top: 1px solid #292f32;

            text-align: center;

            color: #555;

            font-size: 11px;

            letter-spacing: 1px;
        }

        .footer span {
            color: #8f2525;
        }


        /* =========================
           RESPONSIVE
        ========================== */

        
        @media (max-width: 700px) {

            body {
                padding: 10px;
            }

            .header {
                padding: 30px 25px;
            }

            .header h1 {
                font-size: 24px;
            }

            .identity {
                grid-template-columns: 1fr;

                padding: 20px 25px;
            }

            .content {
                padding: 25px;
            }

            .instruction-text h3 {
                font-size: 14px;
            }

            /* Tombol DI HP */

            .action {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .btn-back,
            .btn-start {
                width: 100%;
                text-align: center;
                margin-right: 0;
            }

            .footer {
                padding: 18px 25px;
            }
            /* Kartu pertemuan DI HP */

            .meeting-card {
                flex-direction: column;
                align-items: stretch;
                gap: 18px;
    }

    .meeting-card form {
        margin-left: 0;
    }

    .meeting-card .btn-start {
        width: 100%;
        text-align: center;
    }

    .footer {
        padding: 18px 25px;
    }
        }


    </style>
</head>


<body>

    <div class="container">


        <!-- =========================
             HEADER
        ========================== -->

        <div class="header">

            <div class="header-label">
                E-LKPD Fisika
            </div>

            <h1>
                PETUNJUK PENGERJAAN
            </h1>

            <p>
                Baca dan pahami setiap petunjuk sebelum memulai aktivitas.
            </p>

        </div>


        <!-- =========================
             IDENTITAS MURID
        ========================== -->

        <div class="identity">

            <div class="identity-box">

                <div class="identity-label">
                    NAMA MURID
                </div>

                <div class="identity-value">
                    {{ $nama }}
                </div>

            </div>


            <div class="identity-box">

                <div class="identity-label">
                    KELAS
                </div>

                <div class="identity-value">
                    {{ $kelas }}
                </div>

            </div>

        </div>


        <!-- =========================
             PETUNJUK
        ========================== -->

        <div class="content">

            <div class="section-title">
                Petunjuk
            </div>


            <div class="instruction-list">


                <div class="instruction">

                    <div class="number">
                        01
                    </div>

                    <div class="instruction-text">

                        <h3>
                            Baca setiap instruksi dengan teliti
                        </h3>

                        <p>
                            Pahami tujuan kegiatan, informasi, dan pertanyaan
                            yang diberikan sebelum menjawab.
                        </p>

                    </div>

                </div>


                <div class="instruction">

                    <div class="number">
                        02
                    </div>

                    <div class="instruction-text">

                        <h3>
                            Ikuti setiap aktivitas secara berurutan
                        </h3>

                        <p>
                            Kerjakan aktivitas sesuai tahapan pembelajaran
                            yang tersedia pada E-LKPD.
                        </p>

                    </div>

                </div>


                <div class="instruction">

                    <div class="number">
                        03
                    </div>

                    <div class="instruction-text">

                        <h3>
                            Diskusikan bersama kelompok
                        </h3>

                        <p>
                            Sampaikan pendapat, dengarkan anggota kelompok,
                            dan bangun pemahaman bersama.
                        </p>

                    </div>

                </div>


                <div class="instruction">

                    <div class="number">
                        04
                    </div>

                    <div class="instruction-text">

                        <h3>
                            Jawab berdasarkan pemahaman
                        </h3>

                        <p>
                            Tuliskan jawaban sesuai hasil pengamatan,
                            penyelidikan, diskusi, dan pemahaman kalian.
                        </p>

                    </div>

                </div>


                <div class="instruction">

                    <div class="number">
                        05
                    </div>

                    <div class="instruction-text">

                        <h3>
                            Simpan jawaban dengan benar
                        </h3>

                        <p>
                            Pastikan jawaban telah tersimpan sebelum
                            melanjutkan ke aktivitas berikutnya.
                        </p>

                    </div>

                </div>


                <div class="instruction">

                    <div class="number">
                        06
                    </div>

                    <div class="instruction-text">

                        <h3>
                            Jaga kejujuran dan kerja sama
                        </h3>

                        <p>
                            Hargai pendapat teman, hindari menyalin jawaban,
                            dan bertanggung jawab terhadap hasil pekerjaan.
                        </p>

                    </div>

                </div>


            </div>


            <!-- NOTE -->

            <div class="note">

                <strong>PERHATIAN:</strong>
                Pastikan setiap jawaban yang diberikan merupakan hasil
                pemikiran dan diskusi kelompok kalian sendiri.

            </div>
            
<div class="action">

    <a href="/elkpd" class="btn-back">
        ← KEMBALI KE LOGIN
    </a>

</div>

<!-- =========================
     PILIH PERTEMUAN
========================= -->

<div class="meeting-list">

    <!-- PERTEMUAN 01 -->
    <div class="meeting-card">

        <div class="meeting-info">

            <div class="meeting-number">
                PERTEMUAN 01
            </div>

            <div class="meeting-title">
                Suhu dan Alat Ukur Suhu
            </div>

            <div class="meeting-description">
                Aktivitas pembelajaran mengenai suhu dan alat ukur suhu.
            </div>

        </div>

        <form action="/elkpd/aktivitas" method="GET">

            <button
                type="submit"
                class="btn-start"
            >
                MULAI AKTIVITAS →
            </button>

        </form>

    </div>


    <!-- PERTEMUAN 02 -->
    <div class="meeting-card">

        <div class="meeting-info">

            <div class="meeting-number">
                PERTEMUAN 02
            </div>

            <div class="meeting-title">
                Kalor dan Perpindahan Kalor
            </div>

            <div class="meeting-description">
                Aktivitas pembelajaran mengenai kalor dan perpindahan kalor.
            </div>

        </div>

        <form action="/elkpd/aktivitas2" method="GET">

            <button
                type="submit"
                class="btn-start"
            >
                MULAI AKTIVITAS →
            </button>

        </form>

    </div>


    <!-- PERTEMUAN 03 -->
    <div class="meeting-card">

        <div class="meeting-info">

            <div class="meeting-number">
                PERTEMUAN 03
            </div>

            <div class="meeting-title">
                Pemuaian
            </div>

            <div class="meeting-description">
                Aktivitas pembelajaran mengenai pemuaian dan penerapannya.
            </div>

        </div>

        <form action="/elkpd/aktivitas3" method="GET">

            <button
                type="submit"
                class="btn-start"
            >
                MULAI AKTIVITAS →
            </button>

        </form>

    </div>

</div>


        <!-- =========================
             FOOTER
        ========================== -->

        <div class="footer">

            E-LKPD Fisika —
            <span>Suhu dan Kalor</span>

        </div>

    </div>

</body>

</html>