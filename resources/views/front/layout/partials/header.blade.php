<header>
    @if($agent->isDesktop())
    <div class="header-main">
        <div class="desktop-two-columns"> 
            <div class="column">
                <div class="header-main-logo">
                    <div class="header-hamburguer mobile-only ">
                        <div class="hamburger " id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- <ul id="hamburger-menu mobile-only">
                            <li>Home</li>
                            <li>Home</li>
                            <li>Home</li>
                            <li>home</li>
                          </ul> -->
                        
                    </div>
                    <div class="header-main-logo-title">
                        <h1>Cookin'soul</h1>    
                    </div>        
                </div>
            </div>    
            <div class="column desktop-only">
                <div class="header-main-menu ">
                    <div class="header-main-menu-element ">
                        <button>RECETAS</button>
                    </div>
                    <div class="header-main-menu-element">
                        <button>CURSOS</button>
                    </div>
                    <div class="header-main-menu-element-active">
                        <button>CONTÁCTANOS</button>
                    </div>   
                </div>
            </div>   
        </div>
    </div>
    @endif

    @if($agent->isMobile())
        
        <div class="header-main">
            <div class="mobile-two-columns">

                <div class="column">
                    <div class="header-main-title">
                        <h2>Cookin'soul</h2>
                    </div>        
                </div>
                <div class="column">
                    
                    <nav class="header-hamburger-mobile">

                        <div class="header-menu-button" id="renderHamburger">
            
                            <svg  viewBox="0 0 32 22.5">
                                <g class="header-menu-button-toggle" >

                                    <path class="bar" d="M20.945,8.75c0,0.69-0.5,1.25-1.117,1.25H3.141c-0.617,0-1.118-0.56-1.118-1.25l0,0
                                        c0-0.69,0.5-1.25,1.118-1.25h16.688C20.445,7.5,20.945,8.06,20.945,8.75L20.945,8.75z">
                                    </path>
                                    <path class="bar" d="M20.923,15c0,0.689-0.501,1.25-1.118,1.25H3.118C2.5,16.25,2,15.689,2,15l0,0c0-0.689,0.5-1.25,1.118-1.25 h16.687C20.422,13.75,20.923,14.311,20.923,15L20.923,15z">
                                    </path>
                                    <path class="bar" d="M20.969,21.25c0,0.689-0.5,1.25-1.117,1.25H3.164c-0.617,0-1.118-0.561-1.118-1.25l0,0
                                        c0-0.689,0.5-1.25,1.118-1.25h16.688C20.469,20,20.969,20.561,20.969,21.25L20.969,21.25z">
                                    </path>
                                    <rect fill="none"></rect>
                                </g>
                            </svg> 
                        </div>    
                    </nav>        
                </div>
                
            </div>
        </div>
        
    @endif

</header>