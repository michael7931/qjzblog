@extends('layouts.home')

@section('title', $data->title)

@section('keywords', $data->keywords)

@section('description', $data->description)

@section('css')
    <link rel="stylesheet" href="{{ asset('statics/prism/prism.min.css') }}" />
    <style>
        .js-content p{
            margin-bottom: 20px;
        }
        .live{
            background-color: #1999ec;
        }
        /*文章头部声明样式开始*/
        .yuch{
            margin-top: 20px;
        }
        .smtou{
            font-size: 14px;
            margin-bottom: 4px;
        }
        .smtou .smtitle{
            float: left;
            font-weight: bolder;
            padding-left: 10px;
            border-left: solid 5px #f00;
        }
        .smtou .smcon{
            margin-left: 70px;
        }
        /*文章头部声明样式结束*/
        /*上下篇样式开始*/
        .article-prev-next{
            margin: 0 !important;
            padding: 0 !important;
        } 
        .article-prev{
            float: left;
        }
        .article-next{
            float: right;
        }
        /*上下篇样式结束*/
        /*评论区样式开始*/

        /*评论区样式结束*/
    </style>
@endsection

@section('content')

<body>
    <!-- Page Header -->
    <div id="navigation" class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <!-- Nav logo -->
                <div class="logo">
                    <a href="#" title="iphpt" class="animsition-link">
                        <img src="{{ asset('images/nice.png') }}" alt="logo" width="35px;">
                    </a>
                </div>
                <!-- // Nav logo -->
                <!-- Info-bar -->
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
                <!--// Info-bar -->
            </div>
            <!-- // .container -->
            <div class="learnmore sb-toggle-right">More</div>
            <button type="button" class="navbar-toggle menu-icon sb-toggle-right" title="More">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar before"></span>
                <span class="icon-bar main"></span>
                <span class="icon-bar after"></span>
            </button>
        </div>
        <!-- // .navbar-inner -->
    </div>
    <header class="site-header header-background" style="background-image: url('{{ asset('images/default-banner-dark.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-title with-background-image">
                        <p class="title">{{ $data->title }}</p>
                        <p class="subtitle"></p>
                    </div>
                    <div class="site-menu with-background-image">
                        <ul>
                            <li>
                                <a href="/" onclick="recordId('/',0)">首页</a>
                            </li>
                            @foreach($category as $v)
                           <li>
                               <a class="@if($v->id == $category_id) live @endif" href="{{ url('category/'.$v->id) }}" onclick="return recordId('cid', '{{ $v->id }}')">{{ $v->name }}</a>
                           </li>
                           @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container typo">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-info text-muted">
                        <span class="author info">By {{ $data->author }}</span>
                        <span class="date-time info">On
                            <span class="date">{{ $data->created_at }}</span>
                            <!-- <span class="time">10:42:32</span> -->
                        </span>
                        <span class="categories info">Under
                            <a href="{{ url('category', [$data->category_id]) }}">{{ $data->category_name }}</a>
                        </span>
                    </div>
                    <div class="post-tags text-muted">
                        Tags:
                        <?php $tag_i = 0; ?>
                        @foreach($data->tag as $v)
                        <?php $tag_i++; ?>
                        <?php $tag_i=$tag_i==5?1:$tag_i; ?>
                        <li class="b-tname">
                            <a class="tstyle-{{ $tag_i }}" href="{{ url('tag', [$v->id]) }}">{{ $v->name }}</a>
                        </li>
                        @endforeach
                     <!--    @foreach($data->tag as $v)
                            <a class="tag" href="{{ url('tag', [$v->tag_id]) }}">#{{ $v->name }}</a>
                        @endforeach -->
                    </div>
                    <div class="yuch">
                        <div class="smtou">
                            <span class="smtitle">版权声明：</span>
                            <div class="smcon">本文为博主原创文章，转载请声明原文链接...谢谢诶</div>
                        </div>
                        <div class="smtou">
                            <span class="smtitle">版权声明：</span>
                            <div class="smcon">本文为博主原创文章，转载请声明原文链接...谢谢诶</div>
                        </div>
                        <div class="smtou">
                            <span class="smtitle">版权声明：</span>
                            <div class="smcon">本文为博主原创文章，转载请声明原文链接...谢谢诶</div>
                        </div>
                        <div class="smtou">
                            <span class="smtitle">版权声明：</span>
                            <div class="smcon">本文为博主原创文章，转载请声明原文链接...谢谢诶</div>
                        </div>
                    </div>
                    <div class="post-content">{!! $data->html !!}</div>
                    <eq name="article['current']['is_original']" value="1">
                        <p class="b-h-20"></p>
                        <p class="b-copyright">
                            {!! htmlspecialchars_decode($config['COPYRIGHT_WORD']) !!}
                        </p>
                    </eq>
                    <ul class="article-prev-next">
                        <li class="article-prev">
                            上一篇：
                            @if(is_null($prev))
                                <span>没有了</span>
                            @else
                                <a href="{{ url('article', [$prev->id]) }}">{{ $prev->title }}</a>
                            @endif
                        </li>
                        <li class="article-next">
                            下一篇：
                            @if(is_null($next))
                                <span>没有了</span>
                            @else
                                <a href="{{ url('article', [$next->id]) }}">{{ $next->title }}</a>
                            @endif
                        </li>
                    </ul>
                    <!-- 引入通用评论开始 -->
                    <script>
                        var userEmail='{{ session('user.email') }}';
                        tuzkiNumber=1;
                    </script>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="需要登陆后才能发表评论" cols="50" style="overflow: hidden;overflow-wrap: break-word;;resize: horizontal;height: 181px;"></textarea>
                        
                    </div>
                    <!-- 引入通用评论结束 -->
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
    </article>
    <script src="statics/highlight.js"></script>
    <script src="statics/scripts.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            var codeBlocks = Array.prototype.slice.call(document.getElementsByTagName('pre'))
            codeBlocks.forEach(function (block, index) {
                hljs.highlightBlock(block);
            });
        });
    </script>

</body>

</html>
   
@endsection

@section('js')
    <script src="{{ asset('statics/prism/prism.min.js') }}"></script>
    <script>
        // 添加行数
        $('pre').addClass('line-numbers');
        // 新页面跳转
        $('.js-content a').attr('target', '_blank')

        // 定义评论url
        ajaxCommentUrl = "{{ url('comment') }}";
        checkLogin = "{{ url('checkLogin') }}";
        titleName = '{{ $config['WEB_NAME'] }}';
    </script>
    <script src="{{ asset('statics/layer-2.4/layer.js') }}"></script>
    <script src="{{ asset('js/home/comment.js') }}"></script>
@endsection