<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aktivitas 2 | E-LKPD Fisika</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background:
                linear-gradient(rgba(7, 10, 13, 0.88), rgba(7, 10, 13, 0.94)),
                url("{{ asset('images/photo_2026-08-17_12-35-08.jpg') }}")
                center center / cover fixed no-repeat;
            color: #e5e7eb;
            line-height: 1.6;
            min-height: 100vh;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 92%;
            max-width: 1100px;
            margin: 35px auto;
        }

        /* =========================
           TOP BAR
        ========================= */

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-mark {
            width: 10px;
            height: 34px;
            background: #d62828;
            border-radius: 2px;
        }

        .brand-text {
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            color: #b8bec7;
            text-transform: uppercase;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.05);
            color: #d5d9df;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            transition: 0.2s;
        }

        .back-button:hover {
            background: rgba(214, 40, 40, 0.15);
            border-color: rgba(214, 40, 40, 0.5);
            color: #ffffff;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            position: relative;
            overflow: hidden;
            padding: 32px 35px;
            margin-bottom: 18px;

            background:
                linear-gradient(
                    135deg,
                    rgba(18, 23, 28, 0.96),
                    rgba(10, 13, 16, 0.92)
                );

            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 8px;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.35);
        }

        .header::after {
            content: "";
            position: absolute;
            right: -80px;
            top: -100px;
            width: 250px;
            height: 250px;
            border: 1px solid rgba(214, 40, 40, 0.12);
            border-radius: 50%;
        }

        .header-label {
            display: inline-block;
            padding: 5px 10px;
            margin-bottom: 12px;

            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #aeb4bc;

            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .header h1 {
            margin: 0;
            color: #f3f4f6;
            font-size: 32px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .header h1 span {
            color: #d62828;
        }

        .header p {
            margin: 5px 0 0;
            color: #9ca3af;
            font-size: 14px;
        }

        /* =========================
           CARD
        ========================= */

        .card {
            background: rgba(14, 18, 22, 0.94);
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 8px;
            padding: 28px;
            margin-bottom: 18px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.28);
        }

        .card-title {
            display: flex;
            align-items: center;
            gap: 10px;

            margin: 0 0 20px;

            color: #f1f3f5;
            font-size: 18px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .card-title::before {
            content: "»";
            color: #d62828;
            font-size: 23px;
            font-weight: bold;
        }

        /* =========================
           IDENTITY
        ========================= */

        .identity {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .identity-item {
            padding: 15px 18px;

            background: rgba(255, 255, 255, 0.035);
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 6px;
        }

        .identity-label {
            display: block;
            margin-bottom: 4px;

            color: #8d949d;
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .identity-value {
            color: #f1f3f5;
            font-size: 15px;
            font-weight: bold;
        }

        /* =========================
           FENOMENA
        ========================= */

        .phenomenon {
            padding: 20px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255, 255, 255, 0.045),
                    rgba(255, 255, 255, 0.02)
                );

            border-left: 3px solid #d62828;
            border-radius: 4px;

            color: #c8cdd3;
            font-size: 14px;
        }

        .phenomenon-image {
            width: 100%;
            max-width: 850px;
            display: block;
            margin: 20px auto;
            border-radius: 6px;
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .video-note {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-top: 15px;
            padding: 13px 15px;

            background: rgba(214, 40, 40, 0.08);
            border: 1px solid rgba(214, 40, 40, 0.20);
            border-radius: 5px;

            color: #bfc5cc;
            font-size: 13px;
        }

        .video-icon {
            color: #d62828;
            font-size: 18px;
            font-weight: bold;
        }

        /* =========================
           INSTRUKSI
        ========================= */

        .instruction {
            margin-bottom: 25px;
            padding: 14px 16px;

            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.025);
            border-radius: 5px;

            color: #aeb4bc;
            font-size: 13px;
        }

        .instruction strong {
            color: #e5e7eb;
        }

        /* =========================
           QUESTION
        ========================= */

        .question {
            padding: 20px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .question:first-of-type {
            border-top: none;
            padding-top: 0;
        }

        .question-number {
            margin-bottom: 8px;

            color: #d62828;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .question-text {
            margin: 0 0 12px;

            color: #e5e7eb;
            font-size: 15px;
            font-weight: 500;
        }

        textarea {
            width: 100%;
            min-height: 115px;

            padding: 14px 16px;

            background: rgba(255, 255, 255, 0.045);
            color: #f1f3f5;

            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 5px;

            resize: vertical;

            font-family: inherit;
            font-size: 14px;

            outline: none;
            transition: 0.2s;
        }

        textarea::placeholder {
            color: #6f7780;
        }

        textarea:focus {
            border-color: rgba(214, 40, 40, 0.65);

            box-shadow:
                0 0 0 3px rgba(214, 40, 40, 0.08);
        }

        /* =========================
           BUTTON
        ========================= */

        .button-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;

            margin-top: 25px;
            padding-top: 20px;

            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .save-button {
            border: none;
            padding: 13px 25px;

            background: #c62828;
            color: white;

            border-radius: 5px;

            font-size: 13px;
            font-weight: bold;
            letter-spacing: 1px;

            cursor: pointer;
            transition: 0.2s;
        }

        .save-button:hover {
            background: #a91f1f;
            transform: translateY(-1px);
        }

        .save-note {
            color: #737b85;
            font-size: 12px;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            padding: 20px 0 35px;

            text-align: center;

            color: #626a73;
            font-size: 11px;
            letter-spacing: 1px;
        }

        .footer span {
            color: #aeb4bc;
        }

        /* =========================
           RESPONSIVE HP
        ========================= */

        @media (max-width: 700px) {

            .container {
                width: 94%;
                margin: 18px auto;
            }

            .top-bar {
                align-items: flex-start;
            }

            .brand-text {
                font-size: 10px;
            }

            .header {
                padding: 25px 22px;
            }

            .header h1 {
                font-size: 25px;
            }

            .card {
                padding: 21px;
            }

            .identity {
                grid-template-columns: 1fr;
            }

            .button-area {
                flex-direction: column;
                align-items: stretch;
            }

            .save-button {
                width: 100%;
            }

            .save-note {
                text-align: center;
                order: 2;
            }
        }
/* ================================
   ACTIVITY SECTION
================================ */

.activity-section {
    margin-top: 28px;

    background: rgba(16, 20, 24, 0.94);
    border: 1px solid rgba(255, 255, 255, 0.12);

    padding: 28px 30px;

    box-shadow:
        0 12px 35px rgba(0, 0, 0, 0.25),
        inset 0 0 30px rgba(255, 255, 255, 0.01);
}

.section-header {
    display: flex;
    align-items: center;
    gap: 14px;

    margin-bottom: 24px;

    padding-bottom: 15px;

    border-bottom: 1px solid rgba(255, 255, 255, 0.10);
}

.section-number {
    width: 38px;
    height: 38px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #c92f2f;
    color: white;

    font-size: 13px;
    font-weight: bold;
    letter-spacing: 1px;

    flex-shrink: 0;
}

.section-title {
    color: #f2f2f2;

    font-size: 15px;
    font-weight: bold;

    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.section-description {
    margin-bottom: 20px;

    color: #999;

    font-size: 13px;
    line-height: 1.7;
}

.activity-item {
    margin-bottom: 22px;
}

.activity-item:last-child {
    margin-bottom: 0;
}

.non-question-activity {
    padding: 14px 16px;

    background: rgba(255, 255, 255, 0.025);
    border-left: 3px solid rgba(201, 47, 47, 0.65);

    color: #aaa;

    font-size: 13px;
    line-height: 1.7;
}

.non-question-activity strong {
    color: #ddd;
}

.context-card {
    margin: 24px 0;

    padding: 20px 22px;

    background: rgba(201, 47, 47, 0.07);

    border: 1px solid rgba(201, 47, 47, 0.25);
    border-left: 4px solid #c92f2f;

    border-radius: 2px;
}

.context-title {
    margin-bottom: 10px;

    color: #e8e8e8;

    font-size: 12px;
    font-weight: bold;

    letter-spacing: 1.3px;
    text-transform: uppercase;
}

.context-text {
    color: #bdbdbd;

    font-size: 13px;
    line-height: 1.8;
}

@media (max-width: 600px) {

    .activity-section {
        padding: 22px 18px;
    }

    .section-header {
        gap: 10px;
    }

    .section-number {
        width: 34px;
        height: 34px;

        font-size: 11px;
    }

    .section-title {
        font-size: 12px;
        letter-spacing: 1px;
    }

}

/* ================================
   SUMBER BELAJAR
================================ */

.learning-resources {
    margin-top: 24px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.resource-card {
    padding: 20px;
    background: rgba(255, 255, 255, 0.025);
    border: 1px solid rgba(255, 255, 255, 0.10);
    border-left: 3px solid #c92f2f;
}

.resource-label {
    display: inline-block;
    margin-bottom: 7px;

    color: #d62828;
    font-size: 11px;
    font-weight: bold;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.resource-title {
    margin: 0 0 5px;

    color: #e8e8e8;
    font-size: 16px;
    font-weight: bold;
}

.resource-source {
    margin: 0 0 15px;

    color: #888;
    font-size: 12px;
}

.resource-button {
    display: inline-block;
    padding: 9px 14px;

    background: #c62828;
    color: #fff;

    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 0.5px;

    border-radius: 4px;
}

.resource-button:hover {
    background: #a91f1f;
}

.resource-frame {
    width: 100%;
    height: 500px;

    margin-top: 15px;

    border: 1px solid rgba(255, 255, 255, 0.10);
    background: #fff;

    overflow: hidden;
}

.resource-frame iframe {
    width: 100%;
    height: 100%;
    border: none;
}

@media (max-width: 600px) {

    .resource-frame {
        height: 450px;
    }

}

    </style>
</head>

<body>

<div class="container">

    <!-- TOP BAR -->
    <div class="top-bar">

        <div class="brand">
            <div class="brand-mark"></div>

            <div class="brand-text">
                E-LKPD Fisika
            </div>
        </div>

        <a href="{{ url('/elkpd/mulai') }}" class="back-button">
            ← Kembali
        </a>

    </div>


    <!-- HEADER -->
    <div class="header">

        <div class="header-label">
            Aktivitas Pembelajaran
        </div>

        <h1>
            Aktivitas <span>2</span>
        </h1>

        <p>
            Kalor dan Perpindahan Kalor
        </p>

    </div>


    <!-- IDENTITAS -->
    <div class="card">

        <h2 class="card-title">
            Identitas Murid
        </h2>

        <div class="identity">

            <div class="identity-item">
                <span class="identity-label">
                    Nama Murid
                </span>

                <span class="identity-value">
                    {{ session('nama') }}
                </span>
            </div>

            <div class="identity-item">
                <span class="identity-label">
                    Kelas
                </span>

                <span class="identity-value">
                    {{ session('kelas') }}
                </span>
            </div>

        </div>

    </div>


    <!-- FENOMENA -->
    <div class="card">

        <h2 class="card-title">
            Fenomena
        </h2>

<div class="phenomenon">

    Perhatikan gambar berikut yang menunjukkan es batu
    pada dua kondisi lingkungan yang berbeda.

    <img
        src="{{ asset('images/es-batu-kalor.png') }}"
        alt="Es batu pada dua kondisi lingkungan yang berbeda"
        class="phenomenon-image"
    >

</div>

        


    </div>


    <!-- PERTANYAAN -->
    <div class="card">

        <h2 class="card-title">
            Ayo Mengamati
        </h2>

        <div class="instruction">
            <strong>Petunjuk:</strong>
            Perhatikan gambar yang disajikan guru, kemudian jawablah
            pertanyaan berdasarkan hasil pengamatan, pengalaman
            sehari-hari, dan pemahaman awal kalian.
        </div>


        <form action="/elkpd/simpan" method="POST">
        <input type="hidden" name="pertemuan" value="2">

    @csrf

    <!-- =========================================
         01. ORIENTASI
    ========================================== -->

    <div class="activity-section">

        <div class="section-header">
            <div class="section-number">01</div>

            <div class="section-title">
                Orientasi
            </div>
        </div>

        <div class="activity-item">

            <div class="question-number">
                Q1
            </div>

            <div class="question-text">
                Apa saja informasi yang kalian dapatkan dari gambar tersebut?
            </div>

            <textarea
                name="jawaban1"
                placeholder="Tuliskan jawaban kalian..."
                required
            ></textarea>

        </div>

        <div class="non-question-activity">
        <strong>Aktivitas:</strong>
        Murid mendiskusikan hasil pengamatan secara singkat bersama teman
        di sebelahnya untuk menyamakan pemahaman terhadap informasi yang
        diperoleh dari gambar.
    </div>

</div>

    </div>


<!-- =========================================
     02. APERSEPSI
========================================== -->

<div class="activity-section">

    <div class="section-header">
        <div class="section-number">02</div>

        <div class="section-title">
            Apersepsi
        </div>
    </div>

    <div class="non-question-activity">
        <strong>Aktivitas:</strong>
        Guru menghubungkan fenomena pada gambar dengan pengalaman sehari-hari
        dan konsep suhu yang telah dipelajari pada pertemuan sebelumnya.
    </div>

    <div class="activity-item" style="margin-top: 22px;">

        <div class="question-number">
            Q2
        </div>

        <div class="question-text">
            Mengapa minuman panas yang dibiarkan di tempat terbuka lama-kelamaan
            menjadi lebih dingin? Menurut kalian, ke mana panas dari minuman
            tersebut berpindah?
        </div>

        <textarea
            name="jawaban2"
            placeholder="Tuliskan jawaban kalian..."
            required
        ></textarea>

    </div>

    <div class="activity-item">

        <div class="question-number">
            Q3
        </div>

        <div class="question-text">
            Berdasarkan pengalaman dan pembelajaran sebelumnya, apa dugaan
            kalian mengenai hubungan antara perbedaan suhu dengan perpindahan kalor?
        </div>

        <textarea
            name="jawaban3"
            placeholder="Tuliskan dugaan awal kalian..."
            required
        ></textarea>

    </div>

</div>


<!-- =========================================
     03. MOTIVASI
========================================== -->

<div class="activity-section">

    <div class="section-header">
        <div class="section-number">03</div>

        <div class="section-title">
            Motivasi
        </div>
    </div>

    <div class="non-question-activity">
        <strong>Aktivitas:</strong>
        Murid mengamati fenomena penggunaan termos atau wadah yang dapat
        mempertahankan suhu minuman.
    </div>

    <div class="activity-item" style="margin-top: 22px;">

        <div class="question-number">
            Q4
        </div>

        <div class="question-text">
            Menurut kalian, mengapa termos dapat menjaga minuman tetap panas
            atau dingin dalam waktu yang lebih lama? Jelaskan dugaan kalian.
        </div>

        <textarea
            name="jawaban4"
            placeholder="Tuliskan dugaan kalian..."
            required
        ></textarea>

    </div>

</div>


<!-- =========================================
     04. PEMBERIAN ACUAN
========================================== -->

<div class="activity-section">

    <div class="section-header">
        <div class="section-number">04</div>

        <div class="section-title">
            Pemberian Acuan
        </div>
    </div>

    <div class="activity-item">

        <div class="question-number">
            Q5
        </div>

        <div class="question-text">
            Menurut kalian, tujuan pembelajaran mana yang paling penting
            untuk dicapai agar kalian dapat menjelaskan fenomena kalor
            dalam kehidupan sehari-hari? Jelaskan alasan kalian.
        </div>

        <textarea
            name="jawaban5"
            placeholder="Tuliskan jawaban kalian..."
            required
        ></textarea>

    </div>

    <div class="non-question-activity">
        <strong>Aktivitas:</strong>
        Murid membentuk kelompok belajar setelah diinstruksikan oleh guru.
    </div>

</div>


<!-- =========================================
     05. ORIENTASI MURID PADA MASALAH
========================================== -->

<div class="activity-section">

    <div class="section-header">
        <div class="section-number">05</div>

        <div class="section-title">
            Orientasi Murid pada Masalah
        </div>
    </div>

    <div class="context-card">

        <div class="context-title">
            Permasalahan Kontekstual
        </div>

        <div class="context-text">
            Perhatikan permasalahan mengenai minuman panas yang mengalami
            perubahan suhu pada wadah yang berbeda.
        </div>

    </div>

    <div class="activity-item">

        <div class="question-number">
            Q6
        </div>

        <div class="question-text">
            Dari permasalahan yang disajikan, hal apa yang menurut kalian
            paling perlu dijelaskan atau diselesaikan? Jelaskan alasan kalian.
        </div>

        <textarea
            name="jawaban6"
            placeholder="Tuliskan jawaban kalian..."
            required
        ></textarea>

    </div>

    <div class="non-question-activity">
        <strong>Aktivitas:</strong>
        Murid mengidentifikasi informasi yang diketahui dan informasi yang
        masih diperlukan untuk memahami permasalahan.
    </div>

    <div class="activity-item">

        <div class="question-number">
            Q7
        </div>

        <div class="question-text">
            Menurut kalian, apa yang menyebabkan minuman pada kedua wadah
            mengalami perubahan suhu yang berbeda? Jelaskan alasan kalian.
        </div>

        <textarea
            name="jawaban7"
            placeholder="Tuliskan dugaan awal kalian..."
            required
        ></textarea>

    </div>

</div>

<!-- =========================================
     06. MENGORGANISASIKAN MURID UNTUK BELAJAR
========================================== -->

<div class="activity-section">

    <div class="section-header">
        <div class="section-number">06</div>

        <div class="section-title">
            Mengorganisasikan Murid untuk Belajar
        </div>
    </div>

    <div class="non-question-activity">

        <strong>Aktivitas kelompok:</strong>

        <ul style="margin-top: 8px; padding-left: 20px;">

            <li>
                Murid menyusun pembagian tugas setiap anggota kelompok
                berdasarkan permasalahan yang akan diselesaikan.
            </li>

            <li>
                Murid menentukan informasi dan sumber belajar yang diperlukan
                untuk menyelesaikan permasalahan melalui E-LKPD.
            </li>

        </ul>

    </div>

</div>

<!-- =========================================
     07. MEMBIMBING PENYELIDIKAN
========================================== -->

<div class="activity-section">

    <div class="section-header">
        <div class="section-number">07</div>

        <div class="section-title">
            Membimbing Penyelidikan Individu/Kelompok
        </div>
    </div>

    <div class="non-question-activity">

        <strong>Aktivitas penyelidikan:</strong>

        Murid mencari dan mengumpulkan informasi dari berbagai sumber belajar
        yang relevan mengenai kalor, perpindahan kalor, dan perubahan suhu
        dengan bimbingan guru.

    </div>

<!-- SUMBER BELAJAR -->

<div class="learning-resources">

    <!-- Sumber Belajar 1 -->
    <div class="resource-card">

        <span class="resource-label">
            Sumber Belajar 01
        </span>

        <h3 class="resource-title">
            Fundamentals of Physics
        </h3>

        <p class="resource-source">
            Halliday, Resnick, Walker
        </p>

        <a href="{{ asset('pdf/halliday-kalor.pdf') }}"
           target="_blank"
           rel="noopener noreferrer"
           class="resource-button">
            BUKA SUMBER ↗
        </a>

        <div class="resource-frame">
            <iframe
                src="{{ asset('pdf/halliday-kalor.pdf') }}"
                title="Fundamentals of Physics: Heat and Heat Transfer"
                loading="lazy">
            </iframe>
        </div>

    </div>


    <!-- Sumber Belajar 2 -->
    <div class="resource-card">

        <span class="resource-label">
            Sumber Belajar 02
        </span>

        <h3 class="resource-title">
            Physics: Principles with Applications
        </h3>

        <p class="resource-source">
            Douglas C. Giancoli
        </p>

        <a href="{{ asset('pdf/giancoli-kalor.pdf') }}"
           target="_blank"
           rel="noopener noreferrer"
           class="resource-button">
            BUKA SUMBER ↗
        </a>

        <div class="resource-frame">
            <iframe
                src="{{ asset('pdf/giancoli-kalor.pdf') }}"
                title="Physics: Principles with Applications - Heat Transfer"
                loading="lazy">
            </iframe>
        </div>

    </div>


    <!-- Sumber Belajar 3 -->
    <div class="resource-card">

        <span class="resource-label">
            Sumber Belajar 03
        </span>

        <h3 class="resource-title">
            Heat and Heat Transfer Methods
        </h3>

        <p class="resource-source">
            OpenStax — College Physics 2e
        </p>

        <a href="https://openstax.org/books/college-physics-2e/pages/14-introduction-to-heat-and-heat-transfer-methods"
           target="_blank"
           rel="noopener noreferrer"
           class="resource-button">
            BUKA OPENSTAX ↗
        </a>

        <div class="resource-frame">
            <iframe
                src="https://openstax.org/books/college-physics-2e/pages/14-introduction-to-heat-and-heat-transfer-methods"
                title="OpenStax College Physics 2e - Heat and Heat Transfer Methods"
                loading="lazy">
            </iframe>
        </div>

    </div>

</div>

    <!-- Q8 -->
    <div class="activity-item" style="margin-top: 22px;">

        <div class="question-number">Q8</div>

        <div class="question-text">
            Berdasarkan informasi yang kalian temukan, bagaimana hubungan
            antara perbedaan suhu dengan arah perpindahan kalor? Jelaskan
            berdasarkan konsep yang kalian peroleh.
        </div>

        <textarea
            name="jawaban8"
            placeholder="Tuliskan hasil penyelidikan kalian..."
            required
        ></textarea>

    </div>

    <!-- Q9 -->
    <div class="activity-item">

        <div class="question-number">Q9</div>

        <div class="question-text">
            Mengapa pemberian kalor dapat menyebabkan perubahan suhu pada
            suatu benda? Jelaskan berdasarkan hasil penyelidikan kalian.
        </div>

        <textarea
            name="jawaban9"
            placeholder="Tuliskan hasil penyelidikan kalian..."
            required
        ></textarea>

    </div>

    <!-- Q10 -->
    <div class="activity-item">

        <div class="question-number">Q10</div>

        <div class="question-text">
            Mengapa pemberian kalor dapat menyebabkan suatu zat mengalami
            perubahan wujud? Jelaskan berdasarkan konsep yang kalian pelajari.
        </div>

        <textarea
            name="jawaban10"
            placeholder="Tuliskan hasil penyelidikan kalian..."
            required
        ></textarea>

    </div>

    <!-- Q11 -->
    <div class="activity-item">

        <div class="question-number">Q11</div>

        <div class="question-text">
            Berdasarkan hasil penyelidikan, bagaimana konsep kalor dapat
            menjelaskan perbedaan perubahan suhu pada minuman dalam
            permasalahan awal?
        </div>

        <textarea
            name="jawaban11"
            placeholder="Tuliskan hasil analisis kalian..."
            required
        ></textarea>

    </div>

    <!-- Q12 -->
    <div class="activity-item">

        <div class="question-number">Q12</div>

        <div class="question-text">
            Solusi apa yang paling tepat untuk mengurangi perubahan suhu
            pada minuman tersebut? Jelaskan alasan kalian berdasarkan
            konsep kalor.
        </div>

        <textarea
            name="jawaban12"
            placeholder="Tuliskan solusi dan alasan kalian..."
            required
        ></textarea>

    </div>

    <div class="non-question-activity">

        <strong>Aktivitas kelompok:</strong>

        Murid mendiskusikan dan memilih solusi terbaik bersama kelompok.

    </div>

</div>


<!-- =========================================
     08. MENGEMBANGKAN DAN MENYAJIKAN HASIL KARYA
========================================== -->

<div class="activity-section">

    <div class="section-header">
        <div class="section-number">08</div>

        <div class="section-title">
            Mengembangkan dan Menyajikan Hasil Karya
        </div>
    </div>

    <div class="non-question-activity">

        <strong>Aktivitas presentasi:</strong>

        <ul style="margin-top: 8px; padding-left: 20px;">

            <li>
                Murid menyusun hasil penyelidikan dan solusi terhadap
                permasalahan pada E-LKPD berdasarkan hasil diskusi kelompok.
            </li>

            <li>
                Murid mempresentasikan hasil penyelidikan dan solusi yang
                telah disusun di depan kelas.
            </li>

            <li>
                Murid memberikan tanggapan, pertanyaan, atau saran terhadap
                hasil presentasi kelompok lain berdasarkan hasil pengamatan
                dan konsep kalor yang telah dipelajari.
            </li>

        </ul>

    </div>

</div>

<!-- =========================================
     09. MENGANALISIS DAN MENGEVALUASI
========================================== -->

<div class="activity-section">

    <div class="section-header">
        <div class="section-number">09</div>

        <div class="section-title">
            Menganalisis dan Mengevaluasi Proses Pemecahan Masalah
        </div>
    </div>

    <div class="non-question-activity">

        <strong>Aktivitas analisis dan evaluasi:</strong>

        <ul style="margin-top: 8px; padding-left: 20px;">

            <li>
                Murid menganalisis hasil presentasi kelompok lain berdasarkan
                konsep kalor dan perubahan wujud yang telah dipelajari.
            </li>

            <li>
                Murid mengevaluasi solusi yang telah dipilih oleh kelompoknya
                berdasarkan hasil diskusi kelas.
            </li>

            <li>
                Murid memperbaiki atau menyempurnakan solusi berdasarkan
                hasil evaluasi.
            </li>

        </ul>

    </div>

    <div class="activity-item" style="margin-top: 22px;">

        <div class="question-number">
            Q13
        </div>

        <div class="question-text">
            Apa yang perlu diperbaiki atau ditambahkan pada solusi kelompok
            kalian agar lebih sesuai dengan konsep kalor?
        </div>

        <textarea
            name="jawaban13"
            placeholder="Tuliskan hasil evaluasi kalian..."
            required
        ></textarea>

    </div>

    <div class="activity-item">

        <div class="question-number">
            Q14
        </div>

        <div class="question-text">
            Apa hubungan antara suhu, kalor, dan perubahan wujud zat
            berdasarkan hasil pembelajaran hari ini?
        </div>

        <textarea
            name="jawaban14"
            placeholder="Tuliskan kesimpulan kalian..."
            required
        ></textarea>

    </div>

</div>

<!-- =========================================
     10. PENUTUP
========================================== -->

<div class="activity-section">

    <div class="section-header">
        <div class="section-number">10</div>

        <div class="section-title">
            Penutup
        </div>
    </div>

    <div class="non-question-activity">

        <ul style="margin-top: 8px; padding-left: 20px;">

            <li>
                Murid menyampaikan kesimpulan pembelajaran bersama guru
                berdasarkan hasil penyelidikan, presentasi, dan diskusi kelas.
            </li>

            <li>
                Murid menghubungkan konsep kalor dengan kehidupan sehari-hari.
            </li>

            <li>
                Guru memberikan gambaran materi pertemuan berikutnya
                mengenai pemuaian.
            </li>

        </ul>

    </div>

    <div class="activity-item" style="margin-top: 22px;">

        <div class="question-number">
            Q15
        </div>

        <div class="question-text">
            Bagian pembelajaran hari ini yang paling membantu kalian memahami
            konsep kalor adalah bagian apa? Jelaskan alasan kalian.
        </div>

        <textarea
            name="jawaban15"
            placeholder="Tuliskan refleksi kalian..."
            required
        ></textarea>

    </div>

</div>

    <!-- TOMBOL SIMPAN -->

    <button type="submit" class="save-button">
        Simpan Jawaban
    </button>

</form>


    <!-- FOOTER -->
    <div class="footer">
        E-LKPD Fisika · <span>Suhu dan Kalor</span>
    </div>

</div>

</body>

</html>