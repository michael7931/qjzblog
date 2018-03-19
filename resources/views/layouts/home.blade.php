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
    <script src="{{ asset('js/home/scripts.js') }}"></script>
    <script src="{{ asset('js/home/jquery_002.js') }}"></script>
    @yield('css')
</head>
<body>
    @yield('content')
    <!-- 左侧sidebar部分开始 -->
    <div class="sb-slidebar sb-right sb-style-overlay sb-momentum-scrolling" style="margin-right: -252.533px;">
        <div class="sb-close" aria-label="Close Menu" aria-hidden="true">
            <img src="{{ asset('images/close.png') }}" alt="Close">
        </div>
        <!-- Lists in Slidebars -->
        <ul class="sb-menu">
            <li>
                <a href="#" class="animsition-link" title="Home">Home</a>
            </li>
            <!-- Dropdown Menu -->
            <li>
                <a class="sb-toggle-submenu">tags
                    <span class="sb-caret"></span>
                </a>
                <ul class="sb-submenu">
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            关于
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            Laravel
                            <small>(28)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            PHP
                            <small>(32)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            框架
                            <small>(7)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            Linux
                            <small>(18)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            Nodejs
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            缓存
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            redis
                            <small>(4)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            composer
                            <small>(4)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            ubuntu
                            <small>(7)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            Git
                            <small>(6)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            MySQL
                            <small>(14)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            Vagrant
                            <small>(3)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            twig
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            前端
                            <small>(7)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            CURL
                            <small>(3)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            LNMP
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            nginx
                            <small>(2)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            mongodb
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            ThinkPHP
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            JavaScript
                            <small>(2)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            插件
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            https
                            <small>(2)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            websocket
                            <small>(2)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            HTTP
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            swoole
                            <small>(2)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            状态码
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            PDO
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            队列
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            phphub
                            <small>(2)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            React
                            <small>(2)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            GO
                            <small>(4)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            微信小程序
                            <small>(2)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            Vue
                            <small>(6)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            iView
                            <small>(4)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            ElementUI
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            Docker
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            微信
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            wechat
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            微信开发
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            微信公众号
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            beego
                            <small>(1)</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK" class="animsition-link">
                            postgresql
                            <small>(1)</small>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a class="sb-toggle-submenu">Categories
                    <span class="sb-caret"></span>
                </a>

                <ul class="sb-submenu">
                    <li>
                        <a href="#" class="animsition-link">测试分类</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">前端</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-Twig</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-JavaScript</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-React</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-Vue</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|--iView</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">PHP</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-基础知识</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-PHP框架</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|--Laravel</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|--ThinkPHP</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-PHP扩展</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|--CURL</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|--swoole</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">IDE</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">Linux</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-ubuntu</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-nginx</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">缓存</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-Redis</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">composer</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">Git</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-Github</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">数据库</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-MySQL</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">Vagrant</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">协议</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-https</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">社区</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">GO</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-GO基础知识</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">&nbsp;&nbsp;&nbsp;&nbsp;|-beego</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">微信小程序</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">Docker</a>
                    </li>
                    <li>
                        <a href="#" class="animsition-link">wechat</a>
                    </li>

                </ul>

            </li>


            <li>
                <a class="sb-toggle-submenu">Links
                    <span class="sb-caret"></span>
                </a>
                <ul class="sb-submenu">
                    <li>
                        <a href="#" target="_blank" class="link">叶落山城</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link"> kieran</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link">小强在线</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link">phphub社区</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link">程序人生</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link">Web开发者</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link">Xcat Liu's Blog</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link">前端网-web前端技术分享平台</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link">Cpphp</a>
                    </li>

                </ul>
            </li>

        </ul>
        <!-- Lists in Slidebars -->
        <ul class="sb-menu secondary">
            <li>
                <a href="#" class="animsition-link" title="归档">归档</a>
            </li>

            <li>
                <a href="#" class="animsition-link" title="about">About</a>
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
                        <a href="{{ url('auth/oauth/redirectToProvider/qq') }}"><img src="{{ asset('images/home/qq-login.png') }}" alt="QQ登录" title="QQ登录"></a>
                    </li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/weibo') }}"><img src="{{ asset('images/home/sina-login.png') }}" alt="微博登录" title="微博登录"></a>
                    </li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/github') }}"><img src="{{ asset('images/home/github-login.jpg') }}" alt="github登录" title="github登录"></a>
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
</script>
<script src="{{ asset('statics/bootstrap-3.3.5/js/bootstrap.min.js') }}"></script>
<!--[if lt IE 9]>
<script src="{{ asset('statics/js/html5shiv.min.js') }}"></script>
<script src="{{ asset('statics/js/respond.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('statics/pace/pace.min.js') }}"></script>
<script src="{{ asset('js/home/index.js') }}"></script>
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
