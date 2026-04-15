<!-- footer.php -->
<style>
    /* ── FOOTER ── */
    .site-footer {
        margin-left: var(--sidebar-width);
        background: var(--dark-2);
        border-top: 1px solid rgba(201,168,76,0.12);
        padding: 18px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
    }

    .footer-copy {
        font-size: 12px;
        color: var(--text-muted);
        letter-spacing: 0.3px;
    }

    .footer-copy span {
        color: var(--gold);
    }

    .footer-links {
        display: flex;
        gap: 20px;
    }

    .footer-links a {
        font-size: 12px;
        color: var(--text-muted);
        text-decoration: none;
        letter-spacing: 0.5px;
        transition: color 0.2s;
    }

    .footer-links a:hover {
        color: var(--gold-light);
    }

    .footer-socials {
        display: flex;
        gap: 12px;
    }

    .footer-socials a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border: 1px solid rgba(201,168,76,0.25);
        border-radius: 50%;
        text-decoration: none;
        font-size: 13px;
        transition: all 0.2s ease;
    }

    .footer-socials a:hover {
        border-color: var(--gold);
        background: rgba(201,168,76,0.1);
        transform: translateY(-2px);
    }
</style>

<footer class="site-footer">
    <p class="footer-copy">
        &copy; <?= date('Y') ?> <span>Yayuk Makeover</span>. All rights reserved.
    </p>

    <div class="footer-links">
        <a href="#">Tentang Kami</a>
        <a href="#">Kebijakan Privasi</a>
        <a href="#">Kontak</a>
    </div>

    <div class="footer-socials">
        <a href="#" title="Instagram">📸</a>
        <a href="#" title="WhatsApp">💬</a>
        <a href="#" title="TikTok">🎵</a>
    </div>
</footer>
