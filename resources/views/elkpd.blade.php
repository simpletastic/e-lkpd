<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Murid | E-LKPD Fisika</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #080b0d;
            color: #e5e5e5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            min-height: 620px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #111518;
            border: 1px solid #2d3438;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
        }

        /* =========================
           BAGIAN KIRI
        ========================== */

        .left-panel {
            position: relative;
            overflow: hidden;
            min-height: 620px;

            background:
                linear-gradient(
                    rgba(5, 9, 11, 0.55),
                    rgba(5, 9, 11, 0.85)
                ),
                url('/images/photo_2026-08-17_12-35-08.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;                
        }

        .left-panel::before {
            content: "";
            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    90deg,
                    transparent 49%,
                    rgba(255,255,255,0.05) 50%,
                    transparent 51%
                );

            background-size: 80px 80px;
            opacity: 0.3;
        }

        .left-content {
            position: relative;
            z-index: 2;
            padding: 50px;
            height: 100%;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        <style>
    .university-logo {
        position: relative;
        z-index: 2;
        margin-bottom: 20px;
    }

    .university-logo img {
        width: 55px;
        height: auto;
        display: block;
        object-fit: contain;
        }

        .title-small {
            margin-top: 70px;
            font-size: 25px;
            letter-spacing: 7px;
            color: #d5d5d5;
        }

        .title-main {
            margin-top: 5px;
            font-size: 70px;
            font-weight: 900;
            letter-spacing: 5px;
            color: #eeeeee;
            line-height: 1;
        }

        .title-main span {
            color: #b51f1f;
        }

        .subtitle {
            margin-top: 15px;
            font-size: 20px;
            letter-spacing: 7px;
            color: #c5c5c5;
        }

        .status {
            font-size: 12px;
            letter-spacing: 2px;
            color: #777;
        }

        .status span {
            color: #a92828;
        }

        /* =========================
           BAGIAN KANAN
        ========================== */

        .right-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 55px;
            background: #0e1214;
            position: relative;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
        }

        .login-title {
            text-align: center;
            margin-bottom: 10px;
        }

        .login-title h1 {
            font-size: 26px;
            letter-spacing: 4px;
            color: #ddd;
        }

        .login-title h1::before {
            content: "» ";
            color: #b51f1f;
        }

        .login-title h1::after {
            content: " «";
            color: #b51f1f;
        }

        .login-subtitle {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 35px;
        }

        /* INPUT */

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            font-size: 12px;
            letter-spacing: 1px;
            color: #999;
            margin-bottom: 8px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 16px;
            background: #191e21;
            border: 1px solid #3a4145;
            border-radius: 5px;
            color: #ddd;
            font-size: 15px;
            outline: none;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: #a92828;
            box-shadow: 0 0 10px rgba(169, 40, 40, 0.15);
        }

        .input-group select {
            cursor: pointer;
        }

        .input-group select option {
            background: #191e21;
            color: #ddd;
        }

        /* BUTTON */

        .btn-start {
            width: 100%;
            padding: 16px;
            margin-top: 10px;

            border: none;
            border-radius: 5px;

            background: #9f2424;
            color: white;

            font-size: 15px;
            font-weight: bold;
            letter-spacing: 3px;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-start:hover {
            background: #c32c2c;
            box-shadow: 0 0 15px rgba(195, 44, 44, 0.25);
        }

        .warning {
            margin-top: 25px;
            padding: 13px;

            border-left: 3px solid #a92828;

            background: #15191b;

            color: #777;
            font-size: 12px;
            line-height: 1.5;
        }

        .warning strong {
            color: #a92828;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 800px) {

            body {
                padding: 10px;
            }

            .container {
                grid-template-columns: 1fr;
            }

            .left-panel {
                min-height: 350px;
            }

            .left-content {
                padding: 35px;
            }

            .title-small {
                margin-top: 30px;
                font-size: 18px;
            }

            .title-main {
                font-size: 50px;
            }

            .subtitle {
                font-size: 15px;
                letter-spacing: 4px;
            }

            .right-panel {
                padding: 40px 25px;
            }
        }
/* ================================
   CREATOR PROFILE
================================ */

.creator-profile {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-top: 28px;
    padding-top: 18px;
    border-top: 1px solid rgba(255, 255, 255, 0.12);
}

.creator-photo {
    width: 58px;
    height: 58px;
    border-radius: 50%;
    object-fit: cover;
    object-position: center top;

    /* Membuat foto lebih menyatu dengan tema gelap */
    filter: grayscale(100%) contrast(1.05) brightness(0.85);

    border: 2px solid rgba(255, 255, 255, 0.35);
    box-shadow: 0 0 12px rgba(180, 0, 0, 0.25);
}

.creator-info {
    display: flex;
    flex-direction: column;
    gap: 3px;
}

.creator-info span {
    font-size: 9px;
    letter-spacing: 2px;
    color: rgba(255, 255, 255, 0.45);
}

.creator-info strong {
    font-size: 13px;
    font-weight: 600;
    color: #ffffff;
}

.creator-info small {
    font-size: 9px;
    color: rgba(255, 255, 255, 0.45);
}

.chatgpt-credit {
    margin-top: 12px;
    font-size: 8px;
    letter-spacing: 1px;
    color: rgba(255, 255, 255, 0.3);
}
    </style>
</head>

<body>

    <div class="container">

        <!-- =========================
             PANEL KIRI
        ========================== -->

        <div class="left-panel">

            <div class="left-content">

                <div class="university-logo">
                    <img src="{{ asset('images/logo-uin.png') }}" 
                         alt="Logo UIN Sunan Gunung Djati Bandung">
        
                </div>

                <div>
                    <div class="title-small">
                        E-LKPD
                    </div>

                    <div class="title-main">
                        FISIK<span>A</span>
                    </div>

                    <div class="subtitle">
                        SUHU DAN KALOR
                    </div>
                </div>

                <div class="status">
                    SYSTEM STATUS :
                    <span>ONLINE</span>
                </div>

<div class="creator-profile">
    <img src="{{ asset('images/Foto_Formal_Ijazah.jpg') }}" 
         alt="Alfan Raihan Agustin"
         class="creator-photo">

    <div class="creator-info">
        <span>DEVELOPED BY</span>
        <strong>Alfan Raihan Agustin</strong>
        <small>Pendidikan Fisika · UIN Sunan Gunung Djati Bandung</small>
    </div>
</div>

<div class="chatgpt-credit">
    Developed with assistance from ChatGPT
</div>

            </div>

        </div>


        <!-- =========================
             PANEL KANAN
        ========================== -->

        <div class="right-panel">

            <div class="login-box">

                <div class="login-title">
                    <h1>LOGIN MURID</h1>
                </div>

                <div class="login-subtitle">
                    Masukkan identitas untuk memulai aktivitas
                </div>


                <!-- FORM LOGIN -->

                <form action="/elkpd/mulai" method="POST">

                    @csrf

                    <div class="input-group">

                        <label for="nama">
                            NAMA LENGKAP
                        </label>

                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            placeholder="Masukkan nama lengkap"
                            required
                        >

                    </div>


                    <div class="input-group">

                        <label for="kelas">
                            KELAS
                        </label>

                        <input
                            type="text"
                            id="kelas"
                            name="kelas"
                            value="XI MIPA 1"
                            readonly
                        >   

                    </div>

                    <div class="input-group">

                    <label for="kelompok">
                        KELOMPOK
                    </label>

                    <select id="kelompok" name="kelompok" required>
                        <option value="" disabled selected>Pilih kelompok</option>
                        <option value="Kelompok 1">Kelompok 1</option>
                        <option value="Kelompok 2">Kelompok 2</option>
                        <option value="Kelompok 3">Kelompok 3</option>
                        <option value="Kelompok 4">Kelompok 4</option>
                        <option value="Kelompok 5">Kelompok 5</option>
                        <option value="Kelompok 6">Kelompok 6</option>
                    </select>

                    </div>

                    <button
                        type="submit"
                        class="btn-start"
                    >
                        MULAI AKTIVITAS
                    </button>

                </form>


                <div class="warning">
                    <strong>!</strong>
                    Pastikan nama dan kelas diisi dengan benar
                    sebelum memulai aktivitas.
                </div>

            </div>

        </div>

    </div>

</body>

</html>