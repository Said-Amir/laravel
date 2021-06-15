<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams Manager</title>
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
    
                    <li class="item-separator"></li>
                    
                    <li class="item-header myFont">Backoffice</li>
                    <li class="item-separator border-bottom bd-dark border-size-4"></li>
                    <li class="{{ $current === 'equipe' ? "active"   : "" }}">
                        <a class="active" href={{ route("equipes.index") }}>
                            <span class="icon"><span class="mif-users"></span></span>
                            <span class="caption">Equipes</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href={{ route("joueurs.index") }}>
                            <span class="icon"><span class="mif-user"></span></span>
                            <span class="caption">Joueurs</span>
                        </a>
                    </li>
                    <li class="item-separator border-bottom bd-dark border-size-4"></li>

                    <li>
                        <li class="{{ $current === 'front' ? "active"   : "" }}">
                            <a href="/">
                                <span class="icon"><span class="mif-home"></span></span>
                                <span class="caption">Front-end</span>
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