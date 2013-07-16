<div class="container">
    <div class="header row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <h1>
                        <a class="brand" href="home">Marko Aleksic &amp; Co</a>
                    </h1>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li <?=($static == 'index') ? 'class="current-page"' : '' ?>>
                                <a href="home"><i class="icon-home"></i><br />Home</a>
                            </li>
                            <li <?=($static == 'portfolio') ? 'class="current-page"' : '' ?>>
                                <a href="portfolio"><i class="icon-camera"></i><br />Portfolio</a>
                            </li>
                            <li <?=($static == 'services') ? 'class="current-page"' : '' ?>>
                                <a href="services"><i class="icon-tasks"></i><br />Services</a>
                            </li>
                            <li <?=($static == 'about') ? 'class="current-page"' : '' ?>>
                                <a href="about"><i class="icon-user"></i><br />About</a>
                            </li>
                            <li <?=($static == 'contact') ? 'class="current-page"' : '' ?>>
                                <a href="contact"><i class="icon-envelope-alt"></i><br />Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>