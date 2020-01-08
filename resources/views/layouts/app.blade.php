
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Vex Doct - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <!-- Load styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  
  
</head>
<body class="language-php">

<button onclick="scrolltop()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></button>
    <div class="sidebar_layout" id="docsScreen">

        <div class="page_contain">
            <div class="contain">
                <aside class="sidebar">
                    <a href="/" class="logo">
                    <img class="mark" src="/img/logo.png" alt="VexDoc">
                    <span class="type">Documentation</span>
                    </a>
                    <nav>  
                    <div class="navigation_contain">
                            <div class="docs_sidebar">
                                <ul>
                                    @foreach($menu as $m)
                                    @if ($m->sub =='')
                                    <li class="{{ Request::segment(1) == $m->name ? 'active' : '' }}" ><a href="/{{ $m->name.'/'.app()->getLocale() }}">
                                    @if( app()->getLocale() == 'en')
                                    {{ $m->name}}
                                    @else
                                    {{ $m->name_id}}
                                @endif
                            </a>
                            </li>

                            @endif
                            @endforeach
                            </ul>
                            <div>
                    <div>
                    </nav>
                    <div class="trigger_contain">
                        <a href="#" class="nav_trigger" aria-label="Menu">
                            <div class="bar"></div>
                        </a>
                    </div>
                </aside>
                <section class="body_content">
                
                <header class="docs_actions">
                        <div class="version_drop">
                            <div class="input_group">
                                <label>Language</label>
                                 @foreach($language as $l )
                                   <a class="default-a {{ app()->getLocale() == $l->desc ? 'active' : '' }}" href="/lang/{{ $l->desc}}"><img class="img-language " src="/img/{{ $l->flag}}"></a>
                                 @endforeach
                                <!-- </div> -->
                            </div>
                        </div>
                    </header>

                    <section class="docs_body">
                        <section class="docs_main">
                            <h3>{{ @$sub_menu->name  }}</h3>
                                <ul>
                            
                            @foreach($content as $sb)
                            @if(app()->getLocale() == 'en' )
                                <li><a href="#{{ $sb->name }}">{{ $sb->name }}</a></li>
                            @else
                            <li><a href="#{{ $sb->name_id }}">{{ $sb->name_id }}</a></li>
                            @endif
                            @endforeach
                            </ul>
                        
                            @yield('content')
                        
                        </section>
                </section>
            </div>
        </div>

    </div>

    
                       


<footer>
    <div class="footer_contain" style="padding-top: 0;">
        <div class="contain">
            <section class="partner_block">
                <div class="content">
                    <h2>All Product Vexanium</h2>
                    <p> Partners are elite shops providing top-notch  development and consulting. Each of our partners can help you craft a beautiful, well-architected project.</p>
                </div>
            <a href="https://club.vexanium.com/" class="btn" target="_blank"><span>Our Partners</span></a>
            </section>
        </div>
        <div class="footer_bg">
            <div class="contain">
                <div class="footer_content">
                </div>
                <div class="footer_content">
                    <div class="footer_nav">
                       
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Wallet Download</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="http://vexanium.com/files/vex_wallet_win.zip" target="_blank">Windows Wallet</a></li>
                                    <li><a href="http://vexanium.com/vex_wallet_mac.zip" target="_blank">Mac OS Wallet</a></li>
                                    <li><a href="http://www.vexwallet.com/" target="_blank">Vex Wallet Faucet</a></li>
                                    <li><a href="https://www.pgyer.com/awake" target="_blank">Vexanium Awake Wallet (iOS / Android)</a></li>
                                    <li><a href="https://play.google.com/store/apps/details?id=com.vexanium.vexmobile" target="_blank">Vex Wallet Android (Google Play)</a></li>
                                    <li><a href="https://vexgift.s3-ap-southeast-1.amazonaws.com/dl/vexwallet.apk" target="_blank">Android Vex Wallet (APK)</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="nav_col">
                            <span class="footer_nav_trigger">Local communities :</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="http://vexanium.com/" target="_blank">Our Vision</a></li>
                                    <li><a href="http://blog.vexanium.com/" target="_blank">Blog</a></li>
                                    <li><a href="http://vexanium.com/#contact" target="_blank">Contact US</a></li>
                                   
                                </ul>
                            </div>
                        </div> -->
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Find Out More</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="http://www.vexanium.com/" target="_blank">vexanium.com</a></li>   
                                    <li><a href="https://www.youtube.com/channel/UC39E4RaDoa45RZ4h6TEatwg" target="_blank">youtube.com</a></li>   
                                    <li><a href="https://i.youku.com/vexanium" target="_blank">i.youku.com/</a></li>   
                                    <li><a href="https://blog.vexanium.com/" target="_blank">blog.vexanium.com</a></li>   
                                    <li><a href="https://t.me/vexaniuminfo" target="_blank">telegram</a></li>   
                                    <li><a href="http://www.facebook.com/vexanium" target="_blank">facebook.com</a></li>   
                                    <li><a href="http://www.twitter.com/vexanium" target="_blank">twitter.com/</a></li>   
                                    <li><a href="http://www.instagram.com/vexanium" target="_blank">instagram.com</a></li>   
                                    <li><a href="https://bitcointalk.org/index.php?topic=3282122.0" target="_blank">bitcointalk.org</a></li>   
                                    <li><a href="https://www.reddit.com/r/Vexanium/" target="_blank">reddit.com</a></li>   
                                    <li><a href="https://github.com/vexanium" target="_blank">github.com</a></li>  
                                    <li><a href="https://discord.gg/bg3DYDG" target="_blank">discord.gg</a></li>  
                                    <li><a href="https://www.weibo.com/u/7218464683?is_hot=1" target="_blank">www.weibo.com</a></li>  
                                    <li><a href="https://mp.weixin.qq.com/s/3lgv-_lJzHxNzgKOec2Njw" target="_blank">mp.weixin.qq.com/</a></li>  


                                    <!-- <li><a href="http://dev.vexanium.com/faq">FAQ</a></li> -->
                    </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Local communities </span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <!-- <li><a href="https://club.vexanium.com/">Club</a></li> -->
                                    <!-- <li><a href="https://club.vexanium.com/">Club</a></li> -->
                                    <li><a href="https://t.me/vexaniumcom" target="_blank">Vexanium official | English</a></li>
                                    <li><a href="https://t.me/vexaniumid" target="_blank">Vexanium Indonesia ( bahasa)</a></li>
                                    <li><a href="https://t.me/vexaniumvn" target="_blank">Vexanium Vietnam</a></li>
                                    <li><a href="https://t.me/vexaniumph" target="_blank">Vexanium Philippines</a></li>
                                    <li><a href="https://t.me/vexaniumcn" target="_blank">Vexanium CN 官方中文群</a></li>
                                    <li><a href="https://t.me/vexaniumkr" target="_blank">Vexanium Korea</a></li>

                                    
                                
                               
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_info">
                    
                    
                    </div>
                </div>
            </div>
        </div>
     
    </div>
</footer>
<script src="/js/jquery.min.js"></script>
<script src="/js/app.js"></script>
<script>

var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function scrolltop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>