<style>
    .mobile-nav {
        position: fixed;
        bottom: 0;
        left: 0;

        width: 100%;
        height: 64px;

        display: flex;
        justify-content: space-around;
        align-items: center;

        background: #111;
        border-top: 1px solid #333;

        z-index: 999;
        }

        .mobile-nav a {
        color: white;
        text-decoration: none;
        font-size: 14px;
        }

        @media (min-width: 768px) {
        .mobile-nav {
            display: none;
        }
    }
</style>
<nav class="mobile-nav">
  <a href="/">Home</a>
  <a href="/components">Components</a>
  <a href="/tool">Tool</a>
</nav>