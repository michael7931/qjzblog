@extends('layouts.home')

@section('title', $head['title'])

@section('keywords', $head['keywords'])

@section('description', $head['description'])

@section('content')
    <style type="text/css">
        .fancybox-margin {
            margin-right: 0px;
        }
        .pagination {
            width: 100%;
        }
        footer{
            background-color: white;
            padding: 0;
        }
        footer a{
            color: #1999ec;
            transition: all 0.25s;
        }
        /* footer a:hover, footer a:active, footer a:focus, footer a:visited, footer a:link{
            color: white !important;
            transition: all 0.25s;
        } */
        #intro a{
            color: #1999ec;
        }
        #intro a:hover{
            text-decoration: none;
            color: #fff;background-color: #1999ec;
            transition: all 0.25s;
            cursor: pointer;
        }
        .post-item-wrapper .date-and-category .categories a{
            color: #fff !important;
        }
        .nolink span a{
            color: #151515;
        }
        h2 .more{
            color: #151515;
        }
        h2 a:hover{
            background-color: transparent !important;
        }
        
    </style>
</head>

<body id="index" class="lightnav animsition pace-done" style="animation-duration: 0.9s; opacity: 1;">
    <div class="pace  pace-inactive">
        <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <div id="sb-site" style="min-height: 584.667px;">
        <div id="navigation" class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="logo">
                        <a href="#" title="iphpt" class="animsition-link">
                            <img src="{{ asset('images/nice.png') }}" alt="logo" width="35px;">
                        </a>
                    </div>
                    <nav>
                        <ul class="nav">
                            <li>
                                <a href="#" class="animsition-link">叶落山城秋</a>
                            </li>

                            <li>
                                <a href="#" title="Github" target="_blank">
                                    <i class="icon-github"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" title="Sina-Weibo" target="_blank">
                                    <i class="icon-sina-weibo"></i>
                                </a>
                            </li>

                            <li class="nolink">
                                <span>
                                    <a href="#">给我留言</a>
                                </span>
                            </li>
                            <li class="nolink">
                                <span>Welcome!</span>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="learnmore sb-toggle-right">More</div>
                <button type="button" class="navbar-toggle menu-icon sb-toggle-right" title="More">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar before"></span>
                    <span class="icon-bar main"></span>
                    <span class="icon-bar after"></span>
                </button>
            </div>
        </div>
        <section id="hero" class="scrollme">
            <div class="container-fluid element-img" style="background: url('{{ asset('images/default-banner-dark.jpg') }}') no-repeat center center fixed;background-size: cover">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 vertical-align cover boost text-center" style="height: 585px;">
                        <div class="center-me animateme" data-when="exit" data-from="0" data-to="0.6" data-opacity="0" data-translatey="100">
                            <div>

                                <h2>
                                    <a href="#intro" class="more scrolly">
                                        命定的局限尽可永在，不屈的挑战却不可须臾或缺！
                                    </a>
                                </h2>
                                <p></p>
                                <h2></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="herofade beige-dk"></div>
            </div>
        </section>
        <div class="heightblock" style="height: 100%;"></div>

        <section id="intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-md-offset-1">
                        <!-- 循环文章列表开始 -->
                        @foreach($article as $k => $v)
                        <div class="post-item-wrapper">
                            <a href="{{ url('article', [$v->id]) }}" class="post-title">{{ $v->title }}</a>
                            <div class="post-excerpt">
                                <!-- Post Date and Categories -->
                                <div class="date-and-category">
                                    <div class="date">{{ $v->created_at }}</div>
                                    <div class="categories">
                                        <a href="{{ url('category', [$v->category_id]) }}" target="_blank">{{ $v->category_name }}</a>
                                    </div>
                                </div>
                                <!-- Post Excerpt -->
                                <div class="excerpt typo">
                                    <a href="{{ url('article', [$v->id]) }}" target="_blank"></a>
                                    <p>{{ $v->description }}
                                        <br>
                                    </p>
                                </div>
                                <!-- Post Tags -->
                                <div class="tags">
                                    @foreach($v->tag as $n)
                                    <a class="tag" href="{{ url('tag', [$n->tag_id]) }}" target="_blank">{{ $n->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- 循环文章列表结束 -->
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                      <div class="col-lg-10 col-md-10 col-md-offset-1">
                        <ul class="pagination">
                          <li class="next">
                            <a href="#">
                              <span>NEXT</span>
                              <span class="symbol-right">&gt;</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
    </div>
   <!--  <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <p class="copyright text-muted">
                Theme By
                <a target="_blank" href="#">Levblanc.</a>
                Inspired By
                <a target="_blank" href="#">Clean Blog.</a>
              </p>
              <p class="copyright text-muted">
                Powered By
                <a target="_blank" href="#">Hexo.</a>
              </p>
              <p class="copyright text-muted">
                友情链接
                <a target="_blank" href="#">飞鸿影</a>
              </p>
            </div>
          </div>
        </div>
      </footer> -->

    <!-- Resizable 'on-demand' full-height hero -->
    <script type="text/javascript">

        var resizeHero = function () {
            var hero = $(".cover,.heightblock"),
                window1 = $(window);
            hero.css({
                "height": window1.height()
            });
        };

        resizeHero();

        $(window).resize(function () {
            resizeHero();
        });
    </script>
    <script type="text/javascript">
        $('#intro').find('img').each(function () {
            var alt = this.alt;

            if (alt) {
                $(this).after('<span class="caption" style="display:none">' + alt + '</span>');
            }

            $(this).wrap('<a href="' + this.src + '" title="' + alt + '" class="fancybox" rel="gallery" />');
        });
        (function ($) {
            $('.fancybox').fancybox();
        })(jQuery);
    </script>

    <!-- Initiate flexslider plugin -->
    <script type="text/javascript">
        $(document).ready(function ($) {
            $('.flexslider').flexslider({
                animation: "fade",
                prevText: "",
                nextText: "",
                directionNav: true
            });

        });


    </script>
    <script>


        (function () {
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();


    </script>


    <div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 9px; z-index: 100; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 1; display: block;">
        <div style="position: relative; top: 0px; float: right; width: 9px; height: 60px; background-color: rgb(21, 21, 21); border: 0px solid rgb(32, 32, 32); background-clip: padding-box; border-radius: 5px;"
            class="nicescroll-cursors"></div>
    </div>
</body>

</html>

@endsection