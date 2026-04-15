<!-- sidebar.php -->
<style>
    /* ── SIDEBAR ── */
    .sidebar {
        position: fixed;
        top: 68px;
        left: 0;
        width: var(--sidebar-width);
        height: calc(100vh - 68px);
        background: var(--dark-2);
        border-right: 1px solid rgba(201,168,76,0.10);
        display: flex;
        flex-direction: column;
        padding: 32px 0 24px;
        z-index: 90;
        overflow-y: auto;
    }

    .sidebar-label {
        font-size: 10px;
        font-weight: 500;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: var(--text-muted);
        padding: 0 24px 10px;
    }

    .sidebar-divider {
        height: 1px;
        background: rgba(201,168,76,0.10);
        margin: 12px 24px 18px;
    }

    .sidebar-nav {
        list-style: none;
        flex: 1;
    }

    .sidebar-nav li a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 11px 24px;
        text-decoration: none;
        color: var(--text-muted);
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 0.3px;
        border-left: 3px solid transparent;
        transition: all 0.2s ease;
        position: relative;
    }

    .sidebar-nav li a:hover {
        color: var(--gold-light);
        background: rgba(201,168,76,0.05);
        border-left-color: var(--gold);
    }

    .sidebar-nav li a.active {
        color: var(--gold);
        background: rgba(201,168,76,0.08);
        border-left-color: var(--gold);
        font-weight: 500;
    }

    .sidebar-nav li a .nav-icon {
        font-size: 16px;
        width: 20px;
        text-align: center;
        flex-shrink: 0;
    }

    .sidebar-nav li a .nav-badge {
        margin-left: auto;
        background: var(--gold);
        color: var(--dark);
        font-size: 10px;
        font-weight: 600;
        padding: 2px 7px;
        border-radius: 10px;
    }

    .sidebar-footer {
        padding: 16px 24px 0;
        border-top: 1px solid rgba(201,168,76,0.10);
    }

    .sidebar-brand-mini {
        font-family: 'Cormorant Garamond', serif;
        font-size: 13px;
        color: rgba(201,168,76,0.35);
        letter-spacing: 1.5px;
        text-align: center;
    }
</style>

<aside class="sidebar">
    <p class="sidebar-label">Menu Utama</p>

    <ul class="sidebar-nav">
        <li>
            <a href="halaman.php" class="<?= basename($_SERVER['PHP_SELF']) == 'halaman.php' ? 'active' : '' ?>">
                <span class="nav-icon">🏠</span> Home
            </a>
        </li>
        <li>
            <a href="portofolio.php" class="<?= basename($_SERVER['PHP_SELF']) == 'portofolio.php' ? 'active' : '' ?>">
                <span class="nav-icon">🖼️</span> Portofolio
            </a>
        </li>
        <li>
            <a href="service.php" class="<?= basename($_SERVER['PHP_SELF']) == 'service.php' ? 'active' : '' ?>">
                <span class="nav-icon">💄</span> Service
                <span class="nav-badge">New</span>
            </a>
        </li>
        <li>
            <a href="gallery.php" class="<?= basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : '' ?>">
                <span class="nav-icon">📸</span> Gallery
            </a>
        </li>
    </ul>

    <div class="sidebar-divider"></div>

    <ul class="sidebar-nav">
        <li>
            <a href="booking.php" class="<?= basename($_SERVER['PHP_SELF']) == 'booking.php' ? 'active' : '' ?>">
                <span class="nav-icon">📅</span> Book Now
            </a>
        </li>
        <li>
            <a href="profil.php" class="<?= basename($_SERVER['PHP_SELF']) == 'profil.php' ? 'active' : '' ?>">
                <span class="nav-icon">👤</span> Profil Saya
            </a>
        </li>
    </ul>

    <div class="sidebar-footer">
        <p class="sidebar-brand-mini">✦ YAYUK MAKEOVER ✦</p>
    </div>
</aside>
