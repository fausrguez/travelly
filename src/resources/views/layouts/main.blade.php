@include('includes.top')
    <header>
        <div>
            <div>
                <a href="/" title="travelly">
                    <img src="{{asset('images/logo/plane.svg')}}" alt="travelly">
                    <h1>Travelly</h1>
                </a>
            </div>
            <div>
                <h2>Where will you go next?</h2>
                <form action="404" method="post">
                    <input type="text" name="locations" placeholder="Country...">
                    <input type="submit" value="GO">
                </form>
            </div>
            <div>
                <a title="Menu" class="menu-toggle">
                    <img src="{{asset('images/menu.svg')}}" alt="Menu">
                </a>
            </div>
        </div>
    </header>
    @include('includes.menu')
    <section>
        <div>
            <h2>Top destinations</h2>
            <p>Some of the top destinations for your next summer adventure.</p>
            <div class="auto-cols">
                <div>
                    <div class="picture" style="background-image: url('{{asset('images/places/australia.jpg')}}')">
                        <div class="price"></div>
                    </div>
                    <div class="short-info">
                        <h3>Amazing Australia</h3>
                        <p>Become inspired to travel to Australia. Discover fantastic things to do &amp; places to go.</p>
                    </div>
                </div>
                <div>
                    <div class="picture" style="background-image: url('{{asset('images/places/south-america.jpg')}}')">
                        <div class="price"></div>
                    </div>
                    <div class="short-info">
                        <h3>Ancient South America</h3>
                        <p>Become inspired to travel to South America. Discover fantastic things to do &amp; places to go.</p>
                    </div>
                </div>
                <div>
                    <div class="picture" style="background-image: url('{{asset('images/places/north-america.jpg')}}')">
                        <div class="price"></div>
                    </div>
                    <div class="short-info">
                        <h3>Modern North America</h3>
                        <p>Become inspired to travel to North America. Discover fantastic things to do &amp; places to go.</p>
                    </div>
                </div>
                <div>
                    <div class="picture" style="background-image: url('{{asset('images/places/europe.jpg')}}')">
                        <div class="price"></div>
                    </div>
                    <div class="short-info">
                        <h3>Classic Europe</h3>
                        <p>Become inspired to travel to Europe. Discover fantastic things to do &amp; places to go.</p>
                    </div>
                </div>
                <div>
                    <div class="picture" style="background-image: url('{{asset('images/places/asia.jpg')}}')">
                        <div class="price"></div>
                    </div>
                    <div class="short-info">
                        <h3>Wonderful Asia</h3>
                        <p>Become inspired to travel to Asia. Discover fantastic things to do &amp; places to go.</p>
                    </div>
                </div>
                <div>
                    <div class="picture" style="background-image: url('{{asset('images/places/africa.jpg')}}')">
                        <div class="price"></div>
                    </div>
                    <div class="short-info">
                        <h3>Magic Africa</h3>
                        <p>Become inspired to travel to Africa. Discover fantastic things to do &amp; places to go.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <h2>Before you leave</h2>
            <div class="three-cols">
                <div>
                    <h3>Visa &amp; Documents</h3>
                    <p>There are some things you should take care of before going to your next adventure. We’ll help you to
                        get required visas and documents needed.
                    </p>
                </div>
                <div>
                    <h3>Accommodation</h3>
                    <p>There are some things you should take care of before going to your next adventure. We’ll help you to
                        get required visas and documents needed.
                    </p>
                </div>
                <div>
                    <h3>Transportation</h3>
                    <p>There are some things you should take care of before going to your next adventure. We’ll help you to
                        get required visas and documents needed.
                    </p>
                </div>
            </div>
            <h3>Get hottest deals to your inbox</h3>
            <form action="404" method="post">
                <input type="text" name="locations" placeholder="Start typing..." >
                <input type="submit" value="SUBSCRIBE">
            </form>
        </div>
    </section>
    <footer>
        <div>
            <p>Copyright &copy; 2018. All Rights Reserved. Developed by
                <a href="https://www.linkedin.com/in/fausrguez/">Faustino Rodríguez Fleitas</a>. Designed by
                <a href="https://dribbble.com/shots/1497212-Travelly-Free-Travel-Website-PSD-Template">Tomas Laurinavicius</a>
            </p>
        </div>
    </footer>
@include('includes.bottom')