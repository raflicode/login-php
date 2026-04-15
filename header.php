<!-- header.php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayuk Makeover</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --gold: #C9A84C;
            --gold-light: #E2C97E;
            --dark: #0a0a0a;
            --dark-2: #141414;
            --dark-3: #1e1e1e;
            --text: #f0ece4;
            --text-muted: #9a9080;
            --sidebar-width: 240px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--dark);
            color: var(--text);
            font-family: 'Jost', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ── TOP HEADER ── */
        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 68px;
            background: rgba(10,10,10,0.85);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(201,168,76,0.15);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px 0 calc(var(--sidebar-width) + 32px);
            z-index: 100;
            transition: padding 0.3s;
        }

        .header-brand {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 2px;
            color: var(--gold-light);
            text-decoration: none;
            text-transform: uppercase;
        }

        .header-brand span {
            color: var(--text-muted);
            font-weight: 300;
            font-style: italic;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-session {
            font-size: 13px;
            color: var(--text-muted);
            letter-spacing: 0.5px;
        }

        .header-session strong {
            color: var(--gold);
        }

        .btn-logout {
            padding: 7px 20px;
            border: 1px solid var(--gold);
            background: transparent;
            color: var(--gold);
            border-radius: 20px;
            font-family: 'Jost', sans-serif;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .btn-logout:hover {
            background: var(--gold);
            color: var(--dark);
        }

        /* ── LAYOUT WRAPPER (dipakai di halaman dalam) ── */
        .layout-wrapper {
            display: flex;
            margin-top: 68px;
            flex: 1;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            flex: 1;
            padding: 40px;
            min-height: calc(100vh - 68px - 60px);
        }
    </style>
</head>

<header class="site-header">
    <a href="halaman.php" class="header-brand">Yayuk <span>Makeover</span></a>
    <div class="header-right">
        <?php if (isset($_SESSION['email'])): ?>
            <span class="header-session">Halo, <strong><?= htmlspecialchars($_SESSION['email']) ?></strong></span>
        <?php endif; ?>
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>
</header>
