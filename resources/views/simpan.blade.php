<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jawaban Tersimpan | E-LKPD Fisika</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background:
                linear-gradient(rgba(8, 11, 14, 0.88), rgba(8, 11, 14, 0.94)),
                url("{{ asset('images/photo_2026-08-17_12-35-08.jpg') }}") center/cover no-repeat;
            color: #f2f2f2;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 30px;
        }

        .success-container {
            width: 100%;
            max-width: 650px;
            text-align: center;
        }

        .system-label {
            display: inline-block;
            padding: 7px 14px;
            margin-bottom: 25px;

            border: 1px solid rgba(255, 255, 255, 0.25);
            background: rgba(255, 255, 255, 0.04);

            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;

            color: #aaa;
        }

        .success-card {
            padding: 50px 45px;

            background: rgba(16, 20, 24, 0.94);
            border: 1px solid rgba(255, 255, 255, 0.16);

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.55),
                inset 0 0 40px rgba(255, 255, 255, 0.015);
        }

        .success-icon {
            width: 72px;
            height: 72px;

            margin: 0 auto 25px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 2px solid #d93636;
            border-radius: 50%;

            color: #ff4b4b;
            font-size: 32px;
            font-weight: bold;

            box-shadow: 0 0 25px rgba(217, 54, 54, 0.18);
        }

        .success-title {
            font-size: 28px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .success-title span {
            color: #e53939;
        }

        .success-subtitle {
            color: #aaa;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .status-box {
            padding: 18px 20px;
            margin-bottom: 30px;

            text-align: left;

            background: rgba(255, 255, 255, 0.035);
            border-left: 3px solid #d93636;
        }

        .status-label {
            display: block;

            color: #888;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;

            margin-bottom: 7px;
        }

        .status-text {
            color: #ddd;
            font-size: 14px;
        }

        .status-text span {
            color: #52d273;
        }

        .btn {
            display: inline-block;

            padding: 13px 28px;

            background: #c92f2f;
            color: white;

            text-decoration: none;
            text-transform: uppercase;

            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1.5px;

            border: none;

            transition: 0.2s ease;
        }

        .btn:hover {
            background: #e13b3b;
            transform: translateY(-1px);
        }

        .footer {
            margin-top: 25px;

            color: #666;
            font-size: 10px;
            letter-spacing: 1px;
        }

        @media (max-width: 600px) {

            body {
                padding: 20px;
            }

            .success-card {
                padding: 40px 25px;
            }

            .success-title {
                font-size: 23px;
            }

            .success-subtitle {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <div class="success-container">

        <div class="system-label">
            E-LKPD FISIKA • SUHU DAN KALOR
        </div>

        <div class="success-card">

@if(isset($duplikat) && $duplikat)

    <div class="success-icon">
        !
    </div>

    <h1 class="success-title">
        Jawaban <span>Sudah Dikirim</span>
    </h1>

    <p class="success-subtitle">
        Jawaban untuk pertemuan ini telah kamu kirim sebelumnya.
        Sistem tidak menyimpan pengiriman ulang.
    </p>

    <div class="status-box">

        <span class="status-label">
            System Status
        </span>

        <div class="status-text">
            Pengerjaan sudah tersimpan
            <span>● ONLINE</span>
        </div>

    </div>

@else

    <div class="success-icon">
        ✓
    </div>

    <h1 class="success-title">
        Jawaban <span>Tersimpan</span>
    </h1>

    <p class="success-subtitle">
        Jawaban kamu telah berhasil disimpan ke dalam sistem.
        Kamu dapat melanjutkan aktivitas pembelajaran sesuai arahan guru.
    </p>

    <div class="status-box">

        <span class="status-label">
            System Status
        </span>

        <div class="status-text">
            Penyimpanan jawaban berhasil
            <span>● ONLINE</span>
        </div>

    </div>

@endif

            <a href="/elkpd" class="btn">
                Kembali ke Login
            </a>

            <div class="footer">
                E-LKPD Fisika • Pendidikan Fisika
            </div>

        </div>

    </div>

</body>
</html>