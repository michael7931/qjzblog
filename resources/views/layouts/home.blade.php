<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')@if(request()->path() !== '/') - {{ $config['WEB_TITLE'] }} @endif</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="author" content="qujiazhen,{{ htmlspecialchars_decode($config['ADMIN_EMAIL']) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/bootstrap-3.3.5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/bootstrap-3.3.5/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/css/bjy.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/all1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/xcode.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/jquery.css') }}" media="screen" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/animate/animate.min.css') }}">
    <script src="{{ asset('js/home/jquery.js') }}"></script>
    <script src="{{ asset('js/home/plugins.js') }}"></script>
    <script src="{{ asset('js/home/jquery_003.js') }}"></script>
    <!-- <script src="{{ asset('js/home/scripts.js') }}"></script> -->
    <script src="{{ asset('js/home/jquery_002.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/home/backtop.js') }}"></script> -->
    @yield('css')
</head>
<style type="text/css">
    .b-login-img a:hover{
        background-color: transparent !important;
    }
    /**/
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
        .navbar .nav > li > a {
            font-size: 16px;
            font-weight: 600;
            border:0;
        }
        .navbar .nav >li > a:hover{
            color: #1999ec !important;
        }
        .navbar .nav .active >a{
            color: #1999ec !important;
        }
        .b-head_img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            line-height: 60px;
        }
        .navbar-inner{
            background-color: #111 !important;
        }
        .b-search-text{
            background-color: transparent;
            border:1px solid grey;
        }
        .b-search-submit{
            background-color: transparent;
            border:1px solid grey;
            color: black;
            font-weight: 600;
            background-color: #1999ec;
        }
        .b-nickname{
            font-weight: 600;
            font-size: 18px;
            color: #111;
        }
        .b-log a{
            font-weight: 600;
            padding: 5px 10px;
            color: #1999ec;
        }
        .b-log a:hover{
            color: white;
            border-radius: 5px;
        }
        .talkWithMe{
            position: absolute;
            width: 200px;
            display: none;
            background: #fff;
            right: -85px;
            z-index: 99;
            padding: 0 10px;
            padding-bottom: 0px;
            border: 1px solid #ccc;
            padding-bottom: 15px;
        }
        #talkWithMe{
            width: 32px;
            height: auto;
        }
        .talkWithMe p{
            font-size: 20px;
            text-align: center;
        }
        .talkWithMe img{
            display: block;
            margin:0 auto;
        }
        .talkWithMe #code{
            width: 160px;
            height: auto;
        }
        .talkWithMe #up{
            width: 20px;
            height: auto;
            position: relative;
            top: -16px;
        }
       /* .navbar .nav > li{
            width: 108px;
            margin-top: 20px;
        }*/
        .navbar .nav > li:hover{
            background-color: #1999ec;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .navbar .nav > li:hover a{
            color: white !important;
        }
        .subnav{
            position: absolute;
            top: 60px;
            left: 0;
            white-space:nowrap; 
            background-color: #1999ec;
            color: white !important;
            font-size: 12px;
            padding: 5px 2px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .subnav a{
            display: block;
            padding: 2px 0;
            /*border-bottom: 1px solid white;*/
        }
      /*  .subnav a:hover{
            color: pink !important;
        }*/
</style>
<body>
    <body id="index" class="lightnav animsition pace-done" style="animation-duration: 0.9s; opacity: 1;">
    <div id="sb-site" style="min-height: 584.667px;">
        <div id="navigation" class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="logo">
                        <!-- 登陸 -->
                        <ul style="display: inline-block;line-height: 60px;margin-left: 20px;">
                            @if(empty(session('user.name')))
                            <li>
                                <span class="b-log"><a href="javascript:void(0);" onclick="login()">登录</a></span>
                            </li>
                            @else
                            <li>
                                <span><img class="b-head_img" src="{{ session('user.avatar') }}" alt="{{ session('user.name') }}" title="{{ session('user.name') }}"  /></span>
                                <span class="b-nickname">{{ session('user.name') }}</span>
                                <span class="b-log"><a href="{{ url('auth/oauth/logout') }}">退出</a></span>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <nav style="width: 100%;">
                        <ul class="nav" style="float: left;width: auto;">
                            <li style="position: relative;">
                                <a href="/" onclick="recordId('/',0)">Home</a>
                                <div class="subnav">
                                    <a href="">测试下拉ahhahhahhahahhah</a>
                                    <a href="">测试下拉</a>
                                    <a href="">测试下拉</a>
                                    <a href="">测试下拉</a>
                                </div>
                            </li>
                            @foreach($category as $v)
                            <li style="position: relative;">
                               <a href="{{ url('category/'.$v->id) }}" onclick="return recordId('cid', '{{ $v->id }}')">{{ $v->name }}</a>
                               <div class="subnav">
                                    <a href="">测试下拉ahhahhahhahahhah</a>
                                    <a href="">测试下拉</a>
                                    <a href="">测试下拉</a>
                                    <a href="">测试下拉</a>
                                </div>
                            </li>
                           @endforeach
                        </ul>
                        <!-- 搜索功能以及登陸 -->
                        <div style="float: right;position: relative;right: 30px; ">
                            <div style="display: inline-block;line-height: 60px;margin-right: 10px;">
                                <form class="form-inline"  role="form" action="{{ url('search') }}" method="get">
                                    <input class="b-search-text" type="text" name="wd">
                                    <input class="b-search-submit" type="submit" value="&nbsp;搜索&nbsp;">
                                </form>
                            </div>
                             <!-- 进群讨论 -->
                            <div style="display: inline-block;line-height: 60px;">
                                <img src="{{ asset('images/concat.png') }}" id="talkWithMe">
                                <div class="talkWithMe">
                                    <img src=" {{asset('images/up.png')}} " id="up">
                                    <p>扫一扫,进群交流</p>
                                    <img src="{{ asset('images/QQ.jpg') }}" id="code">
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- <div class="learnmore sb-toggle-left">More</div> -->
                <button type="button" class="navbar-toggle menu-icon sb-toggle-left" title="More">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar before"></span>
                    <span class="icon-bar main"></span>
                    <span class="icon-bar after"></span>
                </button>
            </div>
        </div>
    @yield('content')
    <!-- 左侧sidebar部分开始 -->
    <div class="sb-slidebar sb-left sb-style-overlay sb-momentum-scrolling">
        <img src="http://qiniu.biteabc.com/me_top_bg.jpg" style="width: 100%;height: auto;">
        <div class="sb-close" aria-label="Close Menu" aria-hidden="true">
            <img src="{{ asset('images/close.png') }}" alt="Close">
        </div>
        <!-- Lists in Slidebars -->
        <ul class="sb-menu">
            <li>
                <a href="/" class="animsition-link" title="Home">Home</a>
            </li>
            <!-- Dropdown Menu -->
            <li>
                <a class="sb-toggle-submenu">tags
                    <span class="sb-caret"></span>
                </a>
                <ul class="sb-submenu">
                    <?php $tag_i = 0; ?>
                    @foreach($tag as $v)
                        <?php $tag_i++; ?>
                        <?php $tag_i=$tag_i==5?1:$tag_i; ?>
                        <li>
                            <a class="tstyle-{{ $tag_i }}" href="{{ url('tag', [$v->id]) }}" onclick="return recordId('tid','{{ $v->id }}')" target="_blank">{{ $v->name }} ({{ $v->articles_count }})</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a class="sb-toggle-submenu">Categories
                    <span class="sb-caret"></span>
                </a>
                <ul class="sb-submenu">
                    @foreach($category as $v)
                    <li>
                        <a href="{{ url('category/'.$v->id) }}" onclick="return recordId('cid', '{{ $v->id }}')" target="_blank">{{ $v->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a class="sb-toggle-submenu">Links
                    <span class="sb-caret"></span>
                </a>
                <ul class="sb-submenu">
                    @foreach($friendshipLink as $v)
                    <a class="b-link-a" href="{{ $v->url }}" target="_blank"><span class="fa fa-link b-black"></span> {{ $v->name }}</a>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
    <!-- 左侧sidebar部分结束 -->
    <!-- 通用底部文件开始 -->
    <footer id="b-foot" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <ul>
            <li class="text-center">
                Copyright © 2016-2018 <a href="http://www.qujiazhen.com/">qujiazhen.com</a>  All Right Reserived @if(!empty($config['WEB_ICP_NUMBER'])) ICP证：{{ $config['WEB_ICP_NUMBER'] }} @endif
            </li>
            <li class="text-center">
                <a rel="nofollow" href="https://github.com/michael7931/qjzblog.git" target="_blank">免费开源博客</a>
                @if(!empty($config['ADMIN_EMAIL']))
                    联系邮箱：{!! $config['ADMIN_EMAIL'] !!}
                @endif
            </li>
        </ul>
        <div class="b-h-20"></div>
        <a class="go-top fa fa-angle-up animated jello" href="javascript:;" onclick="goTop()"></a>
    </footer>
    <!-- 通用底部文件结束 -->
    <!-- 登录模态框开始 -->
    <div class="modal fade" id="b-modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title b-ta-center" id="myModalLabel">无需注册，用以下帐号即可直接登录</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
                    <ul class="row">
                        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                            <a href="{{ url('auth/oauth/redirectToProvider/qq') }}"><img src="{{ asset('images/home/qq-login.png') }}" alt="QQ登录" title="QQ登录" style="height: auto;margin-top: -50px;"></a>
                        </li>
                        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                            <a href="{{ url('auth/oauth/redirectToProvider/weibo') }}"><img src="{{ asset('images/home/sina-login.png') }}" alt="微博登录" title="微博登录" style="height: auto;margin-top: -50px;"></a>
                        </li>
                        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                            <a href="{{ url('auth/oauth/redirectToProvider/github') }}"><img src="{{ asset('images/home/github-login.jpg') }}" alt="github登录" title="github登录" style="height: auto;margin-top: -50px;"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 登录模态框结束 -->
    <script>
        logoutUrl="{:U('Home/User/logout')}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function(){
            $('.subnav').hide()
        })
        $('.nav').children('li').mouseover(function(ev){
            $(ev.target).parent('li').children('.subnav').show()
            $(ev.target).parent('li').siblings().children('.subnav').hide()
            $(ev.target).children('.subnav').show()
            $(ev.target).siblings().children('.subnav').hide()
        }).mouseleave(function(){
            $('.subnav').hide()
        })
    </script>
    <script src="{{ asset('statics/bootstrap-3.3.5/js/bootstrap.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('statics/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('statics/js/respond.min.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('statics/pace/pace.min.js') }}"></script>
    <script src="{{ asset('js/home/index.js') }}"></script>
    <script src="{{ asset('js/home/script2.js') }}"></script>
    <!-- 百度页面自动提交开始 -->
    {{--<script>--}}
        {{--(function(){--}}
            {{--var bp = document.createElement('script');--}}
            {{--var curProtocol = window.location.protocol.split(':')[0];--}}
            {{--if (curProtocol === 'https') {--}}
                {{--bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';--}}
            {{--}--}}
            {{--else {--}}
                {{--bp.src = 'http://push.zhanzhang.baidu.com/push.js';--}}
            {{--}--}}
            {{--var s = document.getElementsByTagName("script")[0];--}}
            {{--s.parentNode.insertBefore(bp, s);--}}
        {{--})();--}}
    {{--</script>--}}
    <!-- 百度页面自动提交结束 -->

    <!-- 百度统计开始 -->
    {!! htmlspecialchars_decode($config['WEB_STATISTICS']) !!}
    <!-- 百度统计结束 -->
    @yield('js')
    </body>
</html>
