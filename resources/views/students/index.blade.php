<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Registry · Portal</title>

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
            --border-color: #e2e8f0;
            --border-hover: #cbd5e1;
            --bg-body: #f1f5f9;
            --card-bg: #ffffff;
            --shadow-card:
                0 20px 40px -12px rgba(15, 23, 42, 0.10),
                0 0 0 1px rgba(0, 0, 0, 0.02);
            --radius-card: 24px;
            --radius-badge: 9999px;
        }

        body {
            margin: 0;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--bg-body);
            background-image:
                radial-gradient(at 10% 0%, rgba(37, 99, 235, 0.04) 0px, transparent 40%),
                radial-gradient(at 100% 100%, rgba(124, 58, 237, 0.04) 0px, transparent 40%);
            background-attachment: fixed;
            color: var(--text-dark);
            -webkit-font-smoothing: antialiased;
            line-height: 1.5;
        }

        .page {
            min-height: 100vh;
            padding: 48px 24px 80px;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
        }

        /* HEADER */

        .top {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 24px;
            margin-bottom: 32px;
            flex-wrap: wrap;
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
            margin-bottom: 12px;
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
            font-size: clamp(30px, 4vw, 42px);
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

        /* BUTTON */

        .button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 26px;
            border-radius: 14px;
            background: var(--gradient-accent);
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 22px -8px rgba(37, 99, 235, 0.40);
            white-space: nowrap;
        }

        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px -8px rgba(37, 99, 235, 0.50);
        }

        .button:active {
            transform: translateY(0);
        }

        /* CARD */

        .card {
            background: var(--card-bg);
            border: 1px solid rgba(226, 232, 240, 0.6);
            border-radius: var(--radius-card);
            box-shadow: var(--shadow-card);
            overflow: hidden;
        }

        .card-header {
            padding: 20px 28px;
            border-bottom: 1px solid var(--border-color);
            background: #fafcff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px 16px;
        }

        .card-header-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card-header-title span {
            background: var(--primary-light);
            color: var(--primary);
            padding: 2px 12px;
            border-radius: var(--radius-badge);
            font-size: 13px;
            font-weight: 700;
        }

        /* SEARCH */

        .search-box {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #f1f5f9;
            padding: 4px 6px 4px 16px;
            border-radius: 40px;
            border: 1px solid transparent;
            transition: all 0.2s ease;
        }

        .search-box:focus-within {
            border-color: var(--primary);
            background: #ffffff;
            box-shadow: 0 0 0 4px var(--primary-glow);
        }

        .search-box input {
            border: none;
            background: transparent;
            padding: 8px 0;
            font-family: inherit;
            font-size: 14px;
            font-weight: 500;
            outline: none;
            width: 180px;
            color: var(--text-dark);
        }

        .search-box input::placeholder {
            color: #94a3b8;
            font-weight: 400;
        }

        .search-box button {
            background: var(--gradient-accent);
            border: none;
            color: #fff;
            padding: 8px 14px;
            border-radius: 40px;
            font-weight: 700;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .search-box button:hover {
            opacity: 0.9;
            transform: scale(1.02);
        }

        /* TABLE */

        .table-wrap {
            overflow-x: auto;
            padding: 0 4px 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 720px;
        }

        th {
            padding: 16px 20px;
            text-align: left;
            background: #f8fafc;
            color: var(--text-muted);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            font-weight: 700;
            border-bottom: 1px solid var(--border-color);
            cursor: pointer;
            user-select: none;
            transition: color 0.15s ease;
        }

        th:hover {
            color: var(--text-dark);
        }

        th .sort-icon {
            display: inline-block;
            margin-left: 6px;
            opacity: 0.4;
            font-size: 10px;
        }

        th:hover .sort-icon {
            opacity: 0.8;
        }

        td {
            padding: 18px 20px;
            border-bottom: 1px solid #f1f5f9;
            font-size: 14px;
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #fafcff;
        }

        /* STUDENT */

        .student-name {
            font-weight: 700;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 12px;
            background: var(--gradient-accent);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.15);
            overflow: hidden;
        }

        /* ACTUAL PROFILE IMAGE */

        .avatar-image {
            width: 36px;
            height: 36px;
            object-fit: cover;
            display: block;
            border: none;
            background: #e2e8f0;
        }

        .student-id {
            color: var(--text-muted);
            font-size: 12px;
            font-weight: 500;
            margin-top: 2px;
        }

        .email-cell {
            color: #334155;
            font-weight: 500;
        }

        .program-cell {
            color: #475569;
            font-weight: 500;
        }

        /* YEAR */

        .year-badge {
            display: inline-block;
            padding: 5px 14px;
            border-radius: 40px;
            background: #f1f5f9;
            font-size: 12px;
            font-weight: 700;
            color: #334155;
            letter-spacing: 0.2px;
        }

        .year-badge.grad {
            background: #dbeafe;
            color: #1d4ed8;
        }

        /* VIEW PROFILE */

        .view-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--primary);
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            transition: all 0.15s ease;
            padding: 6px 12px;
            border-radius: 40px;
        }

        .view-link:hover {
            background: var(--primary-light);
            color: var(--primary-hover);
        }

        .view-link svg {
            width: 16px;
            height: 16px;
            transition: transform 0.2s ease;
        }

        .view-link:hover svg {
            transform: translateX(3px);
        }

        /* EMPTY */

        .empty {
            text-align: center;
            padding: 70px 20px 60px;
        }

        .empty-icon {
            font-size: 56px;
            margin-bottom: 16px;
            opacity: 0.6;
        }

        .empty h2 {
            margin-bottom: 8px;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .empty p {
            color: var(--text-muted);
            margin-bottom: 28px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            font-size: 15px;
        }

        /* FOOTER */

        .footer-meta {
            margin-top: 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-muted);
            font-size: 13px;
            font-weight: 500;
            flex-wrap: wrap;
            gap: 12px;
        }

        .footer-meta strong {
            color: var(--text-dark);
        }

        /* RESPONSIVE */

        @media (max-width: 768px) {
            .page {
                padding: 28px 16px 60px;
            }

            .top {
                flex-direction: column;
                align-items: stretch;
                gap: 16px;
            }

            .button {
                justify-content: center;
                width: 100%;
            }

            .card-header {
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
                padding: 16px 20px;
            }

            .search-box {
                width: 100%;
            }

            .search-box input {
                width: 100%;
            }

            td,
            th {
                padding: 14px 16px;
                font-size: 13px;
            }

            .student-name {
                flex-wrap: wrap;
            }

            .avatar,
            .avatar-image {
                width: 30px;
                height: 30px;
            }

            .avatar {
                font-size: 12px;
            }

            .footer-meta {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 26px;
            }

            .badge {
                font-size: 10px;
                padding: 4px 12px 4px 8px;
            }

            .view-link {
                font-size: 12px;
                padding: 4px 8px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="container">

        <!-- HEADER -->
        <div class="top">

            <div>
                <div class="badge">
                    <span class="badge-dot"></span>
                    Student Portal
                </div>

                <h1>Registered Students</h1>

                <p class="subtitle">
                    View and manage all student records in the system.
                </p>
            </div>

            <a href="{{ route('students.create') }}" class="button">
                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                Register Student
            </a>

        </div>

        <!-- CARD -->
        <div class="card">

            <!-- CARD HEADER -->
            <div class="card-header">

                <div class="card-header-title">
                    Student List
                    <span>{{ $students->count() }}</span>
                </div>

                <!-- SEARCH -->
                <div class="search-box" id="searchBox">

                    <input
                        type="text"
                        id="tableSearch"
                        placeholder="Search by name, ID, email..."
                    >

                    <button
                        type="button"
                        id="clearSearchBtn"
                        style="background:transparent;color:#64748b;padding:4px 8px;font-size:12px;display:none;"
                    >
                        ✕
                    </button>

                    <button type="button" id="searchBtn">
                        Search
                    </button>

                </div>

            </div>

            <div class="table-wrap">

                @if ($students->count() > 0)

                    <table id="studentTable">

                        <thead>
                            <tr>

                                <th data-sort="name">
                                    Student
                                    <span class="sort-icon">⇅</span>
                                </th>

                                <th data-sort="email">
                                    Email
                                    <span class="sort-icon">⇅</span>
                                </th>

                                <th data-sort="program">
                                    Program
                                    <span class="sort-icon">⇅</span>
                                </th>

                                <th data-sort="year">
                                    Year Level
                                    <span class="sort-icon">⇅</span>
                                </th>

                                <th style="text-align:right;">
                                    Action
                                </th>

                            </tr>
                        </thead>

                        <tbody id="tableBody">

                            @foreach ($students as $student)

                                <tr
                                    data-student-id="{{ $student->student_id }}"
                                    data-name="{{ strtolower($student->first_name . ' ' . $student->last_name) }}"
                                    data-email="{{ strtolower($student->email) }}"
                                    data-program="{{ strtolower($student->program) }}"
                                    data-year="{{ strtolower($student->year_level) }}"
                                >

                                    <td>

                                        <div class="student-name">

                                            {{-- CHECK IF PROFILE PICTURE EXISTS --}}
                                            @php
                                                $hasPhoto = $student->profile_picture
                                                    && \Illuminate\Support\Facades\Storage::disk('public')->exists($student->profile_picture);

                                                $initials =
                                                    strtoupper(substr($student->first_name, 0, 1)) .
                                                    strtoupper(substr($student->last_name, 0, 1));

                                                $photoUrl = $hasPhoto
                                                    ? \Illuminate\Support\Facades\Storage::disk('public')->url($student->profile_picture)
                                                    : null;
                                            @endphp

                                            @if ($hasPhoto)

                                                <img
                                                    src="{{ $photoUrl }}"
                                                    alt="{{ $student->first_name }} {{ $student->last_name }}"
                                                    class="avatar avatar-image"
                                                    loading="lazy"
                                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                                >

                                                {{-- FALLBACK IF IMAGE FAILS TO LOAD --}}
                                                <div
                                                    class="avatar"
                                                    style="display:none;"
                                                >
                                                    {{ $initials }}
                                                </div>

                                            @else

                                                {{-- FALLBACK INITIALS --}}
                                                <div class="avatar">
                                                    {{ $initials }}
                                                </div>

                                            @endif

                                            <div>

                                                <div>
                                                    {{ $student->first_name }}
                                                    {{ $student->middle_name }}
                                                    {{ $student->last_name }}
                                                </div>

                                                <div class="student-id">
                                                    {{ $student->student_id }}
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td class="email-cell">
                                        {{ $student->email }}
                                    </td>

                                    <td class="program-cell">
                                        {{ $student->program }}
                                    </td>

                                    <td>

                                        <span class="year-badge {{ in_array($student->year_level, ['4th Year', '3rd Year']) ? 'grad' : '' }}">
                                            {{ $student->year_level }}
                                        </span>

                                    </td>

                                    <td style="text-align:right;">

                                        <a
                                            href="{{ route('students.show', $student) }}"
                                            class="view-link"
                                        >
                                            View Profile

                                            <svg
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                                />
                                            </svg>

                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                @else

                    <!-- EMPTY STATE -->

                    <div class="empty">

                        <div class="empty-icon">
                            📋
                        </div>

                        <h2>
                            No students registered yet.
                        </h2>

                        <p>
                            Start by adding the first student to the system.
                        </p>

                        <a
                            href="{{ route('students.create') }}"
                            class="button"
                        >
                            + Register First Student
                        </a>

                    </div>

                @endif

            </div>

        </div>

        <!-- FOOTER -->

        <div class="footer-meta">

            <span>
                Showing
                <strong id="visibleCount">{{ $students->count() }}</strong>
                of
                <strong>{{ $students->count() }}</strong>
                students
            </span>

            <span>
                Student Registry &bull; Secured
            </span>

        </div>

    </div>

</div>

<script>
(function () {

    const searchInput = document.getElementById('tableSearch');
    const clearBtn = document.getElementById('clearSearchBtn');
    const searchBtn = document.getElementById('searchBtn');
    const tableBody = document.getElementById('tableBody');
    const visibleCount = document.getElementById('visibleCount');

    const totalCount = {{ $students->count() }};

    if (!tableBody) {
        return;
    }

    const rows = tableBody.querySelectorAll('tr');

    function filterRows(query) {

        const q = query.toLowerCase().trim();

        let visible = 0;

        rows.forEach(row => {

            const name = row.dataset.name || '';
            const email = row.dataset.email || '';
            const program = row.dataset.program || '';
            const year = row.dataset.year || '';
            const id = row.dataset.studentId || '';

            const match =
                name.includes(q) ||
                email.includes(q) ||
                program.includes(q) ||
                year.includes(q) ||
                id.toLowerCase().includes(q);

            row.style.display = match ? '' : 'none';

            if (match) {
                visible++;
            }

        });

        visibleCount.textContent = visible;

        clearBtn.style.display =
            q.length > 0 ? 'inline-block' : 'none';
    }

    /* SEARCH */

    searchInput.addEventListener('input', function () {
        filterRows(this.value);
    });

    searchBtn.addEventListener('click', function () {
        filterRows(searchInput.value);
    });

    /* CLEAR SEARCH */

    clearBtn.addEventListener('click', function () {

        searchInput.value = '';

        filterRows('');

        searchInput.focus();

    });

    /* ESCAPE TO CLEAR */

    searchInput.addEventListener('keydown', function (e) {

        if (e.key === 'Escape') {

            this.value = '';

            filterRows('');

            this.blur();

        }

    });

    /* SORT */

    const headers = document.querySelectorAll('th[data-sort]');

    let sortDirection = {};

    headers.forEach(th => {

        th.style.cursor = 'pointer';

        th.addEventListener('click', function () {

            const key = this.dataset.sort;

            const currentDir =
                sortDirection[key] || 'asc';

            const nextDir =
                currentDir === 'asc'
                    ? 'desc'
                    : 'asc';

            sortDirection[key] = nextDir;

            /* Update arrows */

            headers.forEach(h => {

                const span =
                    h.querySelector('.sort-icon');

                if (span) {
                    span.textContent = '⇅';
                }

            });

            const span =
                this.querySelector('.sort-icon');

            if (span) {

                span.textContent =
                    nextDir === 'asc'
                        ? '↑'
                        : '↓';

            }

            sortRows(key, nextDir);

        });

    });

    function sortRows(key, dir) {

        const rowsArray =
            Array.from(rows);

        const multiplier =
            dir === 'asc' ? 1 : -1;

        rowsArray.sort((a, b) => {

            let valA;
            let valB;

            if (key === 'name') {

                valA = a.dataset.name || '';
                valB = b.dataset.name || '';

            } else if (key === 'email') {

                valA = a.dataset.email || '';
                valB = b.dataset.email || '';

            } else if (key === 'program') {

                valA = a.dataset.program || '';
                valB = b.dataset.program || '';

            } else if (key === 'year') {

                valA = a.dataset.year || '';
                valB = b.dataset.year || '';

            } else {

                return 0;

            }

            /* Numeric year sorting */

            if (key === 'year') {

                const numA =
                    parseInt(valA) || 0;

                const numB =
                    parseInt(valB) || 0;

                return (
                    numA - numB
                ) * multiplier;

            }

            return (
                valA.localeCompare(valB)
            ) * multiplier;

        });

        rowsArray.forEach(row => {
            tableBody.appendChild(row);
        });

        filterRows(searchInput.value);

    }

    visibleCount.textContent = totalCount;

})();
</script>

</body>
</html>