<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile · Portal</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --primary-light: #dbeafe;
            --primary-glow: rgba(37, 99, 235, 0.12);
            --gradient-accent: linear-gradient(145deg, #2563eb 0%, #7c3aed 100%);
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --text-light: #94a3b8;
            --border-color: #e2e8f0;
            --bg-body: #f1f5f9;
            --card-bg: #ffffff;
            --shadow-card: 0 20px 40px -12px rgba(15, 23, 42, 0.10),
                0 0 0 1px rgba(0, 0, 0, 0.02);
            --radius-card: 24px;
            --radius-badge: 9999px;
            --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            margin: 0;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--bg-body);
            background-image:
                radial-gradient(at 0% 20%, rgba(37, 99, 235, 0.04) 0px, transparent 40%),
                radial-gradient(at 100% 80%, rgba(124, 58, 237, 0.04) 0px, transparent 40%);
            background-attachment: fixed;
            color: var(--text-dark);
            -webkit-font-smoothing: antialiased;
            line-height: 1.6;
        }

        .page {
            min-height: 100vh;
            padding: 48px 24px 80px;
        }

        .container {
            max-width: 920px;
            margin: 0 auto;
        }

        .top {
            margin-bottom: 32px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px 6px 12px;
            border-radius: var(--radius-badge);
            background: var(--primary-light);
            color: var(--primary);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            margin-bottom: 14px;
        }

        .badge-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--primary);
            box-shadow: 0 0 10px var(--primary-glow);
        }

        h1 {
            margin: 0 0 6px;
            font-size: clamp(30px, 4vw, 40px);
            font-weight: 800;
            letter-spacing: -1.2px;
            line-height: 1.1;
            color: var(--text-dark);
        }

        .subtitle {
            margin: 0;
            color: var(--text-muted);
            font-size: 16px;
            font-weight: 500;
        }

        .card {
            background: var(--card-bg);
            border: 1px solid rgba(226, 232, 240, 0.6);
            border-radius: var(--radius-card);
            box-shadow: var(--shadow-card);
            overflow: hidden;
        }

        .card-inner {
            padding: 36px 40px 32px;
        }

        .profile {
            text-align: center;
            padding: 40px 30px 36px;
            margin: -36px -40px 32px -40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            position: relative;
            overflow: hidden;
        }

        .profile::before,
        .profile::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
            pointer-events: none;
        }

        .profile::before {
            width: 300px;
            height: 300px;
            background: #ffffff;
            top: -150px;
            right: -100px;
        }

        .profile::after {
            width: 200px;
            height: 200px;
            background: #f093fb;
            bottom: -80px;
            left: -60px;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .profile-picture {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.20);
            margin-bottom: 18px;
            transition: var(--transition);
            position: relative;
            z-index: 1;
            cursor: zoom-in;
        }

        .profile-picture:hover {
            transform: scale(1.05) rotate(-2deg);
            border-color: #ffffff;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.30);
        }

        .profile-initials {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            margin: 0 auto 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 52px;
            font-weight: 800;
            color: #fff;
            background: rgba(255, 255, 255, 0.20);
            backdrop-filter: blur(8px);
            border: 5px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            position: relative;
            z-index: 1;
        }

        .profile h2 {
            margin: 6px 0 4px;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #ffffff;
            text-shadow: 0 2px 16px rgba(0, 0, 0, 0.15);
            position: relative;
            z-index: 1;
        }

        .student-id {
            color: rgba(255, 255, 255, 0.85);
            font-weight: 600;
            font-size: 15px;
            position: relative;
            z-index: 1;
        }

        .student-id span {
            background: rgba(255, 255, 255, 0.20);
            backdrop-filter: blur(4px);
            padding: 4px 18px;
            border-radius: var(--radius-badge);
            font-weight: 700;
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .success {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px 20px;
            margin-bottom: 28px;
            border-radius: 14px;
            background: #dcfce7;
            border: 1px solid #bbf7d0;
            color: #166534;
            font-weight: 600;
            font-size: 14px;
        }

        .success svg {
            flex-shrink: 0;
            width: 20px;
            height: 20px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--text-dark);
        }

        .section-title::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, var(--border-color) 30%, transparent 100%);
        }

        .details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .detail {
            background: #f8fafc;
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 18px 20px;
            transition: var(--transition);
        }

        .detail:hover {
            background: #ffffff;
            border-color: var(--primary);
            box-shadow: 0 4px 16px var(--primary-glow);
        }

        .detail strong {
            display: block;
            color: var(--text-muted);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .detail .value {
            font-weight: 600;
            color: var(--text-dark);
            font-size: 15px;
        }

        .full {
            grid-column: 1 / -1;
        }

        .actions {
            margin-top: 36px;
            padding-top: 28px;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 13px 24px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .button-primary {
            background: var(--gradient-accent);
            color: #ffffff;
            box-shadow: 0 8px 20px -6px rgba(37, 99, 235, 0.35);
        }

        .button-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px -6px rgba(37, 99, 235, 0.45);
        }

        .button-secondary {
            background: #f1f5f9;
            color: var(--text-dark);
        }

        .button-secondary:hover {
            background: #e2e8f0;
            transform: translateY(-2px);
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--gradient-accent);
            color: #fff;
            border: none;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.35);
            cursor: pointer;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
            z-index: 100;
        }

        .back-to-top.visible {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .lightbox-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.82);
            backdrop-filter: blur(6px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            z-index: 200;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease;
        }

        .lightbox-overlay.open {
            opacity: 1;
            pointer-events: auto;
        }

        .lightbox-overlay img {
            max-width: min(520px, 90vw);
            max-height: 80vh;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
        }

        .lightbox-close {
            position: absolute;
            top: 24px;
            right: 24px;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: none;
            background: rgba(255, 255, 255, 0.12);
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }

        @media (max-width: 768px) {

            .page {
                padding: 28px 16px 60px;
            }

            .card-inner {
                padding: 24px 20px;
            }

            .profile {
                padding: 32px 20px 28px;
                margin: -24px -20px 28px -20px;
            }

            .details {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .button {
                justify-content: center;
                width: 100%;
            }

            .profile-picture,
            .profile-initials {
                width: 110px;
                height: 110px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="container">

        <!-- HEADER -->
        <div class="top">

            <div class="badge">
                <span class="badge-dot"></span>
                Student Portal
            </div>

            <h1>Student Profile</h1>

            <p class="subtitle">
                Registered student information and profile details.
            </p>

        </div>


        <!-- CARD -->
        <div class="card">

            <div class="card-inner">

                <!-- SUCCESS -->
                @if (session('success'))

                    <div class="success">

                        <svg fill="none" viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="2.5">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                            />

                        </svg>

                        {{ session('success') }}

                    </div>

                @endif


                <!-- PROFILE -->
                <div class="profile">

                    @php

                        $hasPhoto = !empty($student->profile_picture);

                        $photoUrl = $hasPhoto
                            ? asset('storage/' . $student->profile_picture)
                            : null;

                        $initials =
                            strtoupper(substr($student->first_name, 0, 1)) .
                            strtoupper(substr($student->last_name, 0, 1));

                    @endphp


                    @if ($hasPhoto)

                        <img
                            id="profileImg"
                            src="{{ $photoUrl }}"
                            alt="Profile Picture"
                            class="profile-picture"
                            loading="eager"
                            onerror="this.style.display='none'; document.getElementById('fallbackAvatar').style.display='flex';"
                        >

                        <div
                            id="fallbackAvatar"
                            class="profile-initials"
                            style="display:none;"
                        >
                            {{ $initials }}
                        </div>

                    @else

                        <div class="profile-initials">
                            {{ $initials }}
                        </div>

                    @endif


                    <h2>
                        {{ $student->first_name }}

                        @if ($student->middle_name)
                            {{ $student->middle_name }}
                        @endif

                        {{ $student->last_name }}
                    </h2>


                    <div class="student-id">
                        <span>
                            ID: {{ $student->student_id }}
                        </span>
                    </div>

                </div>


                <!-- INFORMATION -->
                <h3 class="section-title">
                    Student Information
                </h3>


                <div class="details">

                    <div class="detail">
                        <strong>Email Address</strong>
                        <div class="value">
                            {{ $student->email }}
                        </div>
                    </div>


                    <div class="detail">
                        <strong>Mobile Number</strong>
                        <div class="value">
                            {{ $student->mobile_number }}
                        </div>
                    </div>


                    <div class="detail">
                        <strong>Date of Birth</strong>
                        <div class="value">
                            {{ $student->date_of_birth }}
                        </div>
                    </div>


                    <div class="detail">
                        <strong>Gender</strong>
                        <div class="value">
                            {{ $student->gender }}
                        </div>
                    </div>


                    <div class="detail">
                        <strong>Program / Major</strong>
                        <div class="value">
                            {{ $student->program }}
                        </div>
                    </div>


                    <div class="detail">
                        <strong>Year Level</strong>
                        <div class="value">
                            {{ $student->year_level }}
                        </div>
                    </div>


                    <div class="detail full">
                        <strong>Complete Address</strong>
                        <div class="value">
                            {{ $student->address }}
                        </div>
                    </div>

                </div>


                <!-- ACTIONS -->
                <div class="actions">

                    <a
                        href="{{ route('students.index') }}"
                        class="button button-secondary"
                    >
                        ← Back to List
                    </a>


                    <a
                        href="{{ route('students.create') }}"
                        class="button button-primary"
                    >
                        + Register New
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- LIGHTBOX -->
@if ($hasPhoto)

    <div
        class="lightbox-overlay"
        id="lightboxOverlay"
    >

        <button
            class="lightbox-close"
            id="lightboxClose"
        >
            ✕
        </button>

        <img
            src="{{ $photoUrl }}"
            alt="Student profile picture"
        >

    </div>

@endif


<!-- BACK TO TOP -->
<button
    class="back-to-top"
    id="backToTop"
>
    ↑
</button>


<script>

    const backBtn =
        document.getElementById('backToTop');


    window.addEventListener('scroll', function () {

        if (window.scrollY > 400) {

            backBtn.classList.add('visible');

        } else {

            backBtn.classList.remove('visible');

        }

    });


    backBtn.addEventListener('click', function () {

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    });


    /* PROFILE PHOTO LIGHTBOX */

    const profileImg =
        document.getElementById('profileImg');

    const overlay =
        document.getElementById('lightboxOverlay');

    const closeBtn =
        document.getElementById('lightboxClose');


    if (profileImg && overlay && closeBtn) {

        profileImg.addEventListener('click', function () {

            overlay.classList.add('open');

        });


        closeBtn.addEventListener('click', function () {

            overlay.classList.remove('open');

        });


        overlay.addEventListener('click', function (event) {

            if (event.target === overlay) {

                overlay.classList.remove('open');

            }

        });


        document.addEventListener('keydown', function (event) {

            if (event.key === 'Escape') {

                overlay.classList.remove('open');

            }

        });

    }

</script>

</body>
</html>