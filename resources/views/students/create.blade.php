<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Registration · Portal</title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <style>
        /* ----- RESET & VARIABLES (enhanced) ----- */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --primary-light: #eef2ff;
            --primary-glow: rgba(79, 70, 229, 0.20);
            --gradient-accent: linear-gradient(145deg, #4f46e5 0%, #7c3aed 100%);
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --border-hover: #cbd5e1;
            --bg-body: #f8fafc;
            --card-bg: #ffffff;
            --danger: #ef4444;
            --danger-bg: #fef2f2;
            --danger-border: #fecaca;
            --shadow-card: 0 20px 40px -12px rgba(15, 23, 42, 0.12),
                0 0 0 1px rgba(0, 0, 0, 0.02);
            --radius-card: 28px;
            --radius-input: 14px;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background-color: var(--bg-body);
            background-image:
                radial-gradient(at 0% 10%, rgba(79, 70, 229, 0.04) 0px, transparent 50%),
                radial-gradient(at 100% 90%, rgba(124, 58, 237, 0.04) 0px, transparent 50%);
            background-attachment: fixed;
            color: var(--text-dark);
            -webkit-font-smoothing: antialiased;
            line-height: 1.5;
        }

        /* ----- NAVBAR (refined) ----- */
        .navbar {
            height: 76px;
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.7);
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            align-items: center;
        }

        .nav-inner {
            width: 100%;
            max-width: 1160px;
            margin: 0 auto;
            padding: 0 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
            color: var(--text-dark);
        }

        .brand-icon {
            width: 44px;
            height: 44px;
            border-radius: 14px;
            background: var(--gradient-accent);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 17px;
            box-shadow: 0 8px 20px -4px rgba(79, 70, 229, 0.30);
            transition: transform 0.2s ease;
        }

        .brand:hover .brand-icon {
            transform: scale(1.03);
        }

        .brand-text {
            font-size: 18px;
            font-weight: 800;
            letter-spacing: -0.4px;
            line-height: 1.2;
        }

        .brand-subtitle {
            font-size: 10px;
            color: var(--text-muted);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.6px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 4px;
            background: #f1f5f9;
            padding: 5px;
            border-radius: 40px;
        }

        .nav-link {
            padding: 8px 18px;
            border-radius: 40px;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover {
            color: var(--text-dark);
            background: rgba(255, 255, 255, 0.5);
        }

        .nav-link.active {
            background: #ffffff;
            color: var(--primary);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        }

        /* ----- PAGE & HEADER ----- */
        .page {
            padding: 48px 24px 80px;
        }

        .container {
            width: 100%;
            max-width: 980px;
            margin: 0 auto;
        }

        .page-header {
            margin-bottom: 40px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 6px 16px 6px 12px;
            border-radius: 40px;
            background: rgba(79, 70, 229, 0.07);
            color: var(--primary);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .eyebrow-dot {
            width: 8px;
            height: 8px;
            background: var(--primary);
            border-radius: 50%;
            box-shadow: 0 0 12px var(--primary-glow);
        }

        h1 {
            margin: 0;
            font-size: clamp(34px, 4.5vw, 48px);
            font-weight: 800;
            letter-spacing: -1.5px;
            line-height: 1.1;
            color: var(--text-dark);
        }

        .page-description {
            margin: 10px 0 0;
            max-width: 560px;
            color: var(--text-muted);
            font-size: 16px;
            line-height: 1.6;
            font-weight: 500;
        }

        /* ----- CARD (elevated) ----- */
        .card {
            background: var(--card-bg);
            border: 1px solid rgba(226, 232, 240, 0.6);
            border-radius: var(--radius-card);
            box-shadow: var(--shadow-card);
            overflow: hidden;
            transition: border-color 0.25s ease;
        }

        .card-header {
            padding: 28px 40px;
            border-bottom: 1px solid var(--border-color);
            background: linear-gradient(180deg, #ffffff 0%, #fafcff 100%);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px 16px;
        }

        .card-header-title {
            margin: 0;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }

        .card-header-text {
            margin: 4px 0 0;
            color: var(--text-muted);
            font-size: 13px;
            font-weight: 500;
        }

        .form-content {
            padding: 40px;
        }

        /* ----- ERRORS (better) ----- */
        .error-box {
            margin-bottom: 36px;
            padding: 18px 24px;
            border-radius: 18px;
            background: var(--danger-bg);
            border: 1px solid var(--danger-border);
            color: #991b1b;
        }

        .error-title {
            font-weight: 800;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .error-box ul {
            margin: 8px 0 0 20px;
            font-size: 13px;
            line-height: 1.7;
        }

        .field-error {
            color: var(--danger);
            font-size: 12px;
            font-weight: 700;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* ----- SECTIONS & GRID (improved spacing) ----- */
        .form-section {
            position: relative;
        }

        .section-heading {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 28px;
        }

        .section-number {
            width: 36px;
            height: 36px;
            border-radius: 12px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 800;
            flex-shrink: 0;
        }

        .section-title {
            margin: 0;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: -0.2px;
        }

        .section-description {
            margin: 3px 0 0;
            color: var(--text-muted);
            font-size: 13px;
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, var(--border-color) 30%, transparent 100%);
            margin: 40px 0;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px 28px;
        }

        .field {
            display: flex;
            flex-direction: column;
        }

        .full {
            grid-column: 1 / -1;
        }

        /* ----- INPUTS (refined) ----- */
        label {
            color: #1e293b;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .required {
            color: var(--danger);
            font-size: 15px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            color: #94a3b8;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s ease;
        }

        .input-icon svg {
            width: 19px;
            height: 19px;
        }

        input,
        select,
        textarea {
            width: 100%;
            border: 1.5px solid var(--border-color);
            border-radius: var(--radius-input);
            background: #fafcff;
            color: var(--text-dark);
            padding: 13px 16px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 500;
            outline: none;
            transition: all 0.2s ease;
            line-height: 1.4;
        }

        .has-icon input,
        .has-icon select {
            padding-left: 48px;
        }

        input::placeholder,
        textarea::placeholder {
            color: #aab4c9;
            font-weight: 400;
        }

        input:hover,
        select:hover,
        textarea:hover {
            border-color: var(--border-hover);
            background: #ffffff;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--primary);
            background: #ffffff;
            box-shadow: 0 0 0 5px var(--primary-glow);
        }

        .input-wrapper:focus-within .input-icon {
            color: var(--primary);
        }

        input.is-invalid,
        select.is-invalid,
        textarea.is-invalid {
            border-color: var(--danger) !important;
            background: #fff;
            box-shadow: 0 0 0 5px rgba(239, 68, 68, 0.12) !important;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
            line-height: 1.6;
        }

        select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2364748b' stroke-width='2'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 18px;
            padding-right: 44px;
        }

        /* ----- FILE UPLOAD (enhanced) ----- */
        .upload-area {
            display: flex;
            align-items: center;
            gap: 28px;
            padding: 28px;
            border: 2px dashed #cbd5e1;
            border-radius: 20px;
            background: #fafcff;
            transition: all 0.25s ease;
            cursor: pointer;
            position: relative;
        }

        .upload-area:hover {
            border-color: var(--primary);
            background: rgba(79, 70, 229, 0.02);
        }

        .upload-area.is-dragover {
            border-color: var(--primary);
            background: rgba(79, 70, 229, 0.06);
            transform: scale(1.01);
            box-shadow: 0 0 0 6px var(--primary-glow);
        }

        .preview-wrapper {
            width: 112px;
            height: 112px;
            border-radius: 20px;
            overflow: hidden;
            background: #ffffff;
            border: 2px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.04);
        }

        .preview-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .preview-placeholder {
            text-align: center;
            color: var(--text-muted);
        }

        .preview-placeholder svg {
            width: 36px;
            height: 36px;
            color: #94a3b8;
        }

        .preview-text {
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-top: 6px;
            display: block;
        }

        .upload-content {
            flex: 1;
        }

        .upload-title {
            margin: 0 0 4px;
            font-size: 16px;
            font-weight: 800;
            color: var(--text-dark);
        }

        .upload-description {
            margin: 0 0 14px;
            color: var(--text-muted);
            font-size: 13px;
        }

        .file-input-hidden {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 40px;
            background: #ffffff;
            border: 1px solid var(--border-color);
            font-size: 12px;
            font-weight: 700;
            color: var(--text-dark);
            transition: all 0.15s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .file-badge:hover {
            border-color: var(--primary);
            background: var(--primary-light);
        }

        /* ----- ACTIONS (modern) ----- */
        .actions {
            margin-top: 44px;
            padding-top: 32px;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            transition: color 0.2s ease;
        }

        .back-link:hover {
            color: var(--primary);
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            border: none;
            border-radius: 16px;
            padding: 16px 34px;
            font-family: inherit;
            font-size: 15px;
            font-weight: 800;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .button-primary {
            background: var(--gradient-accent);
            color: #ffffff;
            box-shadow: 0 12px 28px -8px rgba(79, 70, 229, 0.45);
        }

        .button-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 36px -8px rgba(79, 70, 229, 0.55);
        }

        .button-primary:active {
            transform: translateY(0);
            box-shadow: 0 8px 18px -6px rgba(79, 70, 229, 0.4);
        }

        .footer-text {
            text-align: center;
            margin-top: 36px;
            color: var(--text-muted);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        /* ----- RESPONSIVE (fine-tuned) ----- */
        @media (max-width: 768px) {
            .page {
                padding: 24px 16px 60px;
            }
            .form-content {
                padding: 24px 20px;
            }
            .card-header {
                padding: 20px 24px;
                flex-direction: column;
                align-items: flex-start;
            }
            .form-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }
            .upload-area {
                flex-direction: column;
                text-align: center;
                padding: 24px 18px;
            }
            .actions {
                flex-direction: column-reverse;
                align-items: stretch;
                gap: 14px;
            }
            .button {
                width: 100%;
                justify-content: center;
            }
            .back-link {
                justify-content: center;
            }
            .preview-wrapper {
                width: 90px;
                height: 90px;
            }
        }

        @media (max-width: 480px) {
            .nav-inner {
                padding: 0 16px;
            }
            .brand-text {
                font-size: 15px;
            }
            .brand-subtitle {
                font-size: 9px;
            }
            .nav-link {
                font-size: 12px;
                padding: 6px 12px;
            }
            h1 {
                font-size: 28px;
            }
            .section-heading {
                gap: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-inner">
            <a href="{{ route('students.index') }}" class="brand">
                <div class="brand-icon">SP</div>
                <div>
                    <div class="brand-text">Student Portal</div>
                    <div class="brand-subtitle">Registration System</div>
                </div>
            </a>

            <div class="nav-links">
                <a href="{{ route('students.index') }}" class="nav-link">Students</a>
                <a href="{{ route('students.create') }}" class="nav-link active">Register</a>
            </div>
        </div>
    </nav>

    <!-- PAGE -->
    <main class="page">
        <div class="container">

            <!-- HEADER -->
            <header class="page-header">
                <div class="eyebrow">
                    <span class="eyebrow-dot"></span>
                    Enrollment
                </div>
                <h1>New Student Entry</h1>
                <p class="page-description">
                    Complete the form below to enroll a student in the registry database.
                </p>
            </header>

            <!-- CARD -->
            <div class="card">
                <div class="card-header">
                    <div>
                        <h2 class="card-header-title">Registration Form</h2>
                        <p class="card-header-text">Required inputs are marked with an asterisk (<span class="required">*</span>)</p>
                    </div>
                </div>

                <div class="form-content">

                    <!-- GLOBAL ERRORS -->
                    @if ($errors->any())
                        <div class="error-box" role="alert">
                            <div class="error-title">
                                <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                Please resolve the following errors:
                            </div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf

                        <!-- SECTION 01 -->
                        <section class="form-section">
                            <div class="section-heading">
                                <div class="section-number">01</div>
                                <div>
                                    <h3 class="section-title">Personal Details</h3>
                                    <p class="section-description">Identify demographics and basic contact details.</p>
                                </div>
                            </div>

                            <div class="form-grid">

                                <div class="field">
                                    <label for="student_id">Student ID <span class="required">*</span></label>
                                    <div class="input-wrapper has-icon">
                                        <span class="input-icon">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0"/></svg>
                                        </span>
                                        <input id="student_id" type="text" name="student_id" value="{{ old('student_id') }}" class="{{ $errors->has('student_id') ? 'is-invalid' : '' }}" placeholder="2026-0001" required />
                                    </div>
                                    @error('student_id')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label for="email">Email Address <span class="required">*</span></label>
                                    <div class="input-wrapper has-icon">
                                        <span class="input-icon">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </span>
                                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="student@university.edu" required />
                                    </div>
                                    @error('email')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label for="first_name">First Name <span class="required">*</span></label>
                                    <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" class="{{ $errors->has('first_name') ? 'is-invalid' : '' }}" placeholder="Juan" required />
                                    @error('first_name')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label for="middle_name">Middle Name</label>
                                    <input id="middle_name" type="text" name="middle_name" value="{{ old('middle_name') }}" class="{{ $errors->has('middle_name') ? 'is-invalid' : '' }}" placeholder="Dela" />
                                </div>

                                <div class="field">
                                    <label for="last_name">Last Name <span class="required">*</span></label>
                                    <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" class="{{ $errors->has('last_name') ? 'is-invalid' : '' }}" placeholder="Cruz" required />
                                    @error('last_name')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label for="mobile_number">Mobile Number <span class="required">*</span></label>
                                    <div class="input-wrapper has-icon">
                                        <span class="input-icon">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                        </span>
                                        <input id="mobile_number" type="tel" name="mobile_number" value="{{ old('mobile_number') }}" class="{{ $errors->has('mobile_number') ? 'is-invalid' : '' }}" placeholder="09123456789" required />
                                    </div>
                                    @error('mobile_number')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label for="date_of_birth">Date of Birth <span class="required">*</span></label>
                                    <input id="date_of_birth" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="{{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" required />
                                    @error('date_of_birth')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label for="gender">Gender <span class="required">*</span></label>
                                    <select id="gender" name="gender" class="{{ $errors->has('gender') ? 'is-invalid' : '' }}" required>
                                        <option value="">Select option</option>
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('gender')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </section>

                        <div class="section-divider"></div>

                        <!-- SECTION 02 -->
                        <section class="form-section">
                            <div class="section-heading">
                                <div class="section-number">02</div>
                                <div>
                                    <h3 class="section-title">Academic Details</h3>
                                    <p class="section-description">Degree program and standing.</p>
                                </div>
                            </div>

                            <div class="form-grid">
                                <div class="field">
                                    <label for="program">Program / Major <span class="required">*</span></label>
                                    <input id="program" type="text" name="program" value="{{ old('program') }}" class="{{ $errors->has('program') ? 'is-invalid' : '' }}" placeholder="BS Information Technology" required />
                                    @error('program')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label for="year_level">Year Level <span class="required">*</span></label>
                                    <select id="year_level" name="year_level" class="{{ $errors->has('year_level') ? 'is-invalid' : '' }}" required>
                                        <option value="">Select level</option>
                                        <option value="1st Year" {{ old('year_level') == '1st Year' ? 'selected' : '' }}>1st Year</option>
                                        <option value="2nd Year" {{ old('year_level') == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                                        <option value="3rd Year" {{ old('year_level') == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                                        <option value="4th Year" {{ old('year_level') == '4th Year' ? 'selected' : '' }}>4th Year</option>
                                    </select>
                                    @error('year_level')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </section>

                        <div class="section-divider"></div>

                        <!-- SECTION 03 -->
                        <section class="form-section">
                            <div class="section-heading">
                                <div class="section-number">03</div>
                                <div>
                                    <h3 class="section-title">Address Information</h3>
                                    <p class="section-description">Residential and mailing location.</p>
                                </div>
                            </div>

                            <div class="form-grid">
                                <div class="field full">
                                    <label for="address">Complete Address <span class="required">*</span></label>
                                    <textarea id="address" name="address" class="{{ $errors->has('address') ? 'is-invalid' : '' }}" placeholder="House number, Street, Barangay, City, Province..." required>{{ old('address') }}</textarea>
                                    @error('address')
                                        <div class="field-error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </section>

                        <div class="section-divider"></div>

                        <!-- SECTION 04 -->
                        <section class="form-section">
                            <div class="section-heading">
                                <div class="section-number">04</div>
                                <div>
                                    <h3 class="section-title">Profile Photo</h3>
                                    <p class="section-description">Upload an identification photo (JPG / PNG, max 2MB).</p>
                                </div>
                            </div>

                            <div class="upload-area" id="uploadArea">
                                <input id="profile_picture" type="file" name="profile_picture" accept="image/jpeg,image/png" class="file-input-hidden" required />

                                <div class="preview-wrapper">
                                    <img id="profilePreview" src="" alt="Profile Preview" />
                                    <div class="preview-placeholder" id="previewPlaceholder">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                        <span class="preview-text">Preview</span>
                                    </div>
                                </div>

                                <div class="upload-content">
                                    <p class="upload-title">Drop your photo here, or browse</p>
                                    <p class="upload-description">Supports JPG or PNG up to 2MB size.</p>
                                    <div class="file-badge">
                                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg>
                                        Select Image File
                                    </div>
                                    <div id="fileSizeError" class="field-error" style="display: none; margin-top: 10px;">File size exceeds 2MB limit.</div>
                                    @error('profile_picture')
                                        <div class="field-error" style="margin-top: 10px;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </section>

                        <!-- ACTIONS -->
                        <div class="actions">
                            <a href="{{ route('students.index') }}" class="back-link">
                                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                                View Registered Students
                            </a>
                            <button type="submit" class="button button-primary">
                                Complete Registration
                                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="footer-text">
                Student Portal System &bull; Secured Form Submission
            </div>
        </div>
    </main>

    <!-- SCRIPT (enhanced) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const profileInput = document.getElementById('profile_picture');
            const profilePreview = document.getElementById('profilePreview');
            const previewPlaceholder = document.getElementById('previewPlaceholder');
            const uploadArea = document.getElementById('uploadArea');
            const fileSizeError = document.getElementById('fileSizeError');

            const MAX_SIZE = 2 * 1024 * 1024; // 2MB

            function handleFile(file) {
                fileSizeError.style.display = 'none';

                if (!file || !file.type.startsWith('image/')) {
                    resetPreview();
                    return;
                }

                if (file.size > MAX_SIZE) {
                    fileSizeError.style.display = 'flex';
                    profileInput.value = '';
                    resetPreview();
                    return;
                }

                // Revoke old blob to prevent memory leaks
                if (profilePreview.src && profilePreview.src.startsWith('blob:')) {
                    URL.revokeObjectURL(profilePreview.src);
                }

                profilePreview.src = URL.createObjectURL(file);
                profilePreview.style.display = 'block';
                previewPlaceholder.style.display = 'none';
            }

            function resetPreview() {
                profilePreview.style.display = 'none';
                previewPlaceholder.style.display = 'block';
                if (profilePreview.src && profilePreview.src.startsWith('blob:')) {
                    URL.revokeObjectURL(profilePreview.src);
                }
                profilePreview.src = '';
            }

            profileInput.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    handleFile(e.target.files[0]);
                } else {
                    resetPreview();
                }
            });

            // Drag events
            ['dragenter', 'dragover'].forEach(name => {
                uploadArea.addEventListener(name, (e) => {
                    e.preventDefault();
                    uploadArea.classList.add('is-dragover');
                });
            });

            ['dragleave', 'drop'].forEach(name => {
                uploadArea.addEventListener(name, (e) => {
                    e.preventDefault();
                    uploadArea.classList.remove('is-dragover');
                });
            });

            uploadArea.addEventListener('drop', (e) => {
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    profileInput.files = files;
                    handleFile(files[0]);
                }
            });

            // If there is an old value from server (edit mode) – but this is create, so just reset
            // Optional: clear on page load if no file
            if (!profileInput.files || profileInput.files.length === 0) {
                resetPreview();
            }
        });
    </script>
</body>
</html>