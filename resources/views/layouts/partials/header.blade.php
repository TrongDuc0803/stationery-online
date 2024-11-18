<header>
    <div class="container-fluid d-flex justify-content-between align-items-center py-3">
        <!-- Logo ở bên trái -->
        <div class="logo">
            <a href="/">
                <img src="https://scooboo.in/cdn/shop/files/WEBSITE_LOGO_9f4708da-74b2-49cc-a951-0aa1e12ca77b.png?v=1664031675&width=190"
                    alt="Logo" class="img-fluid">
            </a>
        </div>
        <nav class="menu">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Stationery</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Best Sellers</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Clearance Sale</a></li>
            </ul>
        </nav>
        <!-- Thanh tìm kiếm ở giữa -->
        <div class="search-container d-flex align-items-center flex-grow-1">
            <input class="form-control" type="text" placeholder="Search for...">
            <button class="search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="20px" width="20px" viewBox="0 0 490.4 490.4">
                    <path
                        d="M484.1,454.796l-110.5-110.6c29.8-36.3,47.6-82.8,47.6-133.4c0-116.3-94.3-210.6-210.6-210.6S0,94.496,0,210.796 s94.3,210.6,210.6,210.6c50.8,0,97.4-18,133.8-48l110.5,110.5c12.9,11.8,25,4.2,29.2,0C492.5,475.596,492.5,463.096,484.1,454.796z M41.1,210.796c0-93.6,75.9-169.5,169.5-169.5s169.6,75.9,169.6,169.5s-75.9,169.5-169.5,169.5S41.1,304.396,41.1,210.796z" />
                </svg>
            </button>
        </div>

        <!-- Các biểu tượng SVG ở bên phải -->
        <div class="icons d-flex align-items-center">
            <a href="{{ route('account') }}" class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 101 101" id="user" width="30px" height="30px">
                    <path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"></path>
                </svg>
            </a>
            <a href="{{ route('cart') }}">
                <svg width="21" height="21" viewBox="0 0 21 19" fill="currentColor" aria-hidden="true" focusable="false" role="presentation" class="icon">
                    <path d="M10 6.25V.5h1.5v5.75H21l-3.818 12H3.818L0 6.25h10Zm-7.949 1.5 2.864 9h11.17l2.864-9H2.05h.001Z"></path>
                </svg>
            </a>
        </div>
    </div>
</header>