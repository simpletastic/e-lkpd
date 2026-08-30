<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Guru | E-LKPD Fisika</title>

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            background: #080b0e;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
        }

        /* =========================
           BACKGROUND OBI-WAN
        ========================= */

        .login-page {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: flex-start;

            background-image:
                linear-gradient(
                    90deg,
                    rgba(8, 11, 14, 0.98) 0%,
                    rgba(8, 11, 14, 0.93) 25%,
                    rgba(8, 11, 14, 0.55) 48%,
                    rgba(8, 11, 14, 0.10) 75%,
                    rgba(8, 11, 14, 0.15) 100%
                ),
                url('/images/obi-wan.jpg');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Efek gelap tambahan di bagian bawah */
        .login-page::after {
            content: "";
            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    0deg,
                    rgba(0, 0, 0, 0.55),
                    transparent 35%
                );

            pointer-events: none;
        }

        /* =========================
           LOGIN CARD
        ========================= */

        .login-box {
            position: relative;
            z-index: 2;

            width: 390px;
            max-width: calc(100% - 40px);

            margin-left: 8%;
            padding: 38px;

            background: rgba(15, 19, 23, 0.92);

            border: 1px solid rgba(255, 255, 255, 0.15);
            border-left: 3px solid #d9272e;

            border-radius: 10px;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.65),
                0 0 30px rgba(0, 0, 0, 0.35);

            backdrop-filter: blur(6px);
        }

        /* =========================
           BRAND
        ========================= */

        .brand {
            margin-bottom: 8px;

            color: #d9272e;

            font-size: 12px;
            font-weight: bold;

            letter-spacing: 3px;
            text-transform: uppercase;
        }

        h1 {
            margin: 0 0 8px;

            font-size: 34px;
            line-height: 1.1;

            letter-spacing: 1px;
        }

        .subtitle {
            margin-bottom: 30px;

            color: #aaa;

            font-size: 14px;
        }

        /* =========================
           ERROR
        ========================= */

        .error {
            margin-bottom: 20px;
            padding: 12px;

            background: rgba(53, 23, 25, 0.95);

            border: 1px solid #8f2529;
            border-radius: 6px;

            color: #ff8c8c;

            font-size: 14px;
        }

        /* =========================
           FORM
        ========================= */

        label {
            display: block;

            margin-bottom: 8px;

            color: #d4d4d4;

            font-size: 14px;
            font-weight: 500;
        }

        input {
            width: 100%;

            padding: 13px 14px;
            margin-bottom: 20px;

            background: rgba(32, 38, 43, 0.95);

            color: white;

            border: 1px solid #444;
            border-radius: 6px;

            outline: none;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease;
        }

        input::placeholder {
            color: #777;
        }

        input:focus {
            border-color: #d9272e;

            box-shadow:
                0 0 0 2px rgba(217, 39, 46, 0.15);
        }

        /* =========================
           BUTTON
        ========================= */

        button {
            width: 100%;

            padding: 13px;

            border: none;
            border-radius: 6px;

            background: #c9252b;

            color: white;

            font-size: 14px;
            font-weight: bold;

            letter-spacing: 0.5px;

            cursor: pointer;

            transition:
                background 0.2s ease,
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        button:hover {
            background: #e02b31;

            box-shadow:
                0 8px 25px rgba(201, 37, 43, 0.25);

            transform: translateY(-1px);
        }

        button:active {
            transform: translateY(0);
        }

        /* =========================
           FOOTER / QUOTE
        ========================= */

        .login-footer {
            margin-top: 25px;

            color: #777;

            font-size: 11px;

            text-align: center;

            letter-spacing: 0.5px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .login-page {
                justify-content: center;

                background-position: 65% center;
            }

            .login-page::before {
                content: "";
                position: absolute;
                inset: 0;

                background: rgba(5, 7, 9, 0.55);

                z-index: 1;
            }

            .login-box {
                margin-left: 0;

                width: 390px;

                background: rgba(12, 16, 19, 0.94);
            }
        }

        @media (max-width: 500px) {

            body {
                overflow-y: auto;
            }

            .login-page {
                min-height: 100vh;

                padding: 25px 0;

                background-position: 68% center;
            }

            .login-box {
                width: calc(100% - 30px);

                padding: 28px 24px;

                border-left-width: 2px;
            }

            h1 {
                font-size: 28px;
            }

            .subtitle {
                margin-bottom: 25px;
            }
        }
    </style>
</head>

<body>

    <div class="login-page">

        <div class="login-box">

            <div class="brand">
                E-LKPD FISIKA
            </div>

            <h1>
                LOGIN GURU
            </h1>

            <div class="subtitle">
                E-LKPD Fisika — Suhu dan Kalor
            </div>

            @if(session('error'))
                <div class="error">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ url('/guru/login') }}" method="POST">

                @csrf

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    required
                >

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

                <button type="submit">
                    LOGIN
                </button>

            </form>

            <div class="login-footer">
                E-LKPD Fisika · Pendidikan Fisika
            </div>

        </div>

    </div>

</body>
</html>