<div id="header">

    <div id="headerMenu">
        <div class="inner">
            <a href="/">
                {{-- <img id="logo" src="{{ asset('logo.png') }}" alt="{{ config('app.name') }}"> --}}
                <div id="logo" class="brand-name">
                    <strong>R2L</strong> Shop
                </div>
            </a>
            <nav id="rightNav">
                <ul class="menu">
                    <li><a href="/" class="selected">Home</a></li>
                    <li><a href="/create-online-store/">E-commerce</a></li>
                    <li><a href="/examples/">Examples</a></li>
                    <li><a href="/pricing/">Plans</a></li>
                    <li><a href="/support/">Support</a></li>
                    <li><a href="https://www.mozello.com/blog" target="_blank">Blog</a></li>
                </ul>

                <!-- Visible only on small -->
                <div id="topButtons">
                    <a id="menuOpener"></a>
                </div>

                @auth
                    <!-- Always visible -->
                    <div id="topButtonsR" class="filter ml-3">
                        <a id="menuOpenerR"></a>
                    </div>
                @endauth

            </nav>
            <div style="clear: both"></div>
        </div>
    </div>

    <div id="mobileMenu">
        <a id="menuCloser"></a>
        <ul class="menu">
            <li><a href="/" class="selected">Home</a></li>
            <li><a href="/create-online-store/">E-commerce</a></li>
            <li><a href="/examples/">Examples</a></li>
            <li><a href="/pricing/">Plans</a></li>
            <li><a href="/support/">Support</a></li>
            <li><a href="/blog">Blog</a></li>
        </ul>
    </div>

</div>
