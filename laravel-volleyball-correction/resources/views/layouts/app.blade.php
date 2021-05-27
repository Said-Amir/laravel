<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volley</title>
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
</head>
<body>
    <div class="container-fluid bg-gray h-vh-100">
        <div id="navigationView" data-role="navview" data-compact="fs" data-expanded="lg">
            <div class="navview-pane">
                <button class="pull-button">
                    <span class="mif-menu"></span>
                </button>
    
                <ul class="navview-menu">
                    <li>
                        <a href="/">
                            <span class="icon"><span class="mif-home"></span></span>
                            <span class="caption">Home</span>
                        </a>
                    </li>
    
                    <li class="item-separator"></li>
    
                    <li class="item-header">Main pages</li>
    
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-apps"></span></span>
                            <span class="caption">Apps</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <span class="icon"><span class="mif-gamepad"></span></span>
                            <span class="caption">Games</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <span class="icon"><span class="mif-music"></span></span>
                            <span class="caption">Music</span>
                        </a>
                        <ul class="navview-menu" data-role="dropdown">
                            <li>
                                <a href="#">
                                    <span class="icon"><span class="mif-gamepad"></span></span>
                                    <span class="caption">Games</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><span class="mif-film"></span></span>
                                    <span class="caption">Movies</span>
                                </a>
                            </li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-folder"></span></span>
                            <span class="caption">Documents</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-cog"></span></span>
                            <span class="caption">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-cogs"></span></span>
                            <span class="caption">Settings</span>
                        </a>
                    </li>
                </ul>
    
            </div>
    
            <div class="navview-content pl-4-md pr-4-md">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    
    </div>
    
    <script src={{ asset("js/app.js") }}></script>
</body>
</html>