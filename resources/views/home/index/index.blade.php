@extends('layouts.home')

@section('title', $head['title'])

@section('keywords', $head['keywords'])

@section('description', $head['description'])

@section('content')
    <style type="text/css">
        
        
    </style>
</head>
    <section id="hero" class="scrollme">
        <div class="container-fluid element-img" style="background: url('{{ asset('images/default-banner-dark.jpg') }}') no-repeat center center fixed;background-size: cover">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 vertical-align cover boost text-center" style="height: 585px;">
                    <div class="center-me animateme" data-when="exit" data-from="0" data-to="0.6" data-opacity="0" data-translatey="100">
                        <div>
                            <h2>
                                <a href="#intro" class="more scrolly">命定的局限尽可永在，不屈的挑战却不可须臾或缺！</a>
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
   <!--  <div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 9px; z-index: 100; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 1; display: block;">
        <div style="position: relative; top: 0px; float: right; width: 9px; height: 60px; background-color: rgb(21, 21, 21); border: 0px solid rgb(32, 32, 32); background-clip: padding-box; border-radius: 5px;"
            class="nicescroll-cursors"></div>
    </div> -->
</body>

</html>

@endsection