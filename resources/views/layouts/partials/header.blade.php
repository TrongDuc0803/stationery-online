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
                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" version="1.1" width="25px" height="25px" viewBox="0 0 902.86 902.86">
                    <g>
                        <path
                            d="M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z" />
                        <path
                            d="M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744 c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742 C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744 c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897z M619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742 S619.162,694.432,619.162,716.897z" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
</header>
