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
        .module-cmt-list .cmt-list-type{
            line-height: 30px;
            height: 30px;
            position: relative;
            margin-top: 50px;
            overflow: hidden;
        }
        .module-cmt-list .cmt-list-type .type-lists li.active {
            background-image: url(https://changyan.itc.cn/mdevp/extensions/cy-skin/028/skin-black/images/cmtlist-bg-active.png);
        }
        .module-cmt-list .cmt-list-type .type-lists .active {
            background: url(https://changyan.itc.cn/mdevp/extensions/cmt-list/061/images/cmtlist-bg-active.png) no-repeat;
            background-image: url("https://changyan.itc.cn/mdevp/extensions/cmt-list/061/images/cmtlist-bg-active.png");
            position: relative;
            bottom: -1px;
        }
        .module-cmt-list .cmt-list-type .type-lists .type-list {
            float: left;
            width: 66px;
            height: 29px;
            text-align: center;
            font-size: 16px;
            background: url(https://changyan.itc.cn/mdevp/extensions/cmt-list/061/images/cmtlist-bg.png) no-repeat;
            background-position: top left;
            font-family: "Microsoft Yahei";
            line-height: 30px;
        }
        .module-cmt-list .cmt-list-type .cmt-list-border {
            position: relative;
            bottom: 1px;
            left: 66px;
            height: 1px;
            top: 10px;  
            background-color: #313131;
        }  
        .module-cmt-list .cmt-list-type .cmt-list-number {
            position: absolute;
            right: 0;
            bottom: 0;
        }
        .module-cmt-list .cmt-list-type .cmt-list-number .comment-number {
            font-size: 14px;
            font-family: "Microsoft YaHei";
        }
        .module-cmt-list .cmt-list-type .cmt-list-number .comment-number .cy-number {
            font-size: 20px;
            margin: 0 5px;
            font-family: Impact;
        }
        .module-cmt-list .block-title-gw {
            padding: 18px 0 0;
        }
        .module-cmt-list .block-title-gw ul li {
            float: left;
            line-height: 18px;
            padding: 0 0 10px;
        }
        .module-cmt-list .block-title-gw ul li .title-name-gw {
            font-size: 16px;
            font-family: "Microsoft YaHei";
        }
        .module-cmt-list .block-title-gw ul li .title-name-gw div.title-name-gw-tag {
            background-image: url(https://changyan.itc.cn/mdevp/extensions/cy-skin/028/skin-black/images/title-tag.png);
        }
        .module-cmt-list .block-title-gw ul li .title-name-gw .title-name-gw-tag {
            float: left;
            width: 5px;
            height: 18px;
            margin-right: 13px;
            background: url(https://changyan.itc.cn/mdevp/extensions/cmt-list/061/images/title-tag.png) no-repeat;
            background-image: url("https://changyan.itc.cn/mdevp/extensions/cmt-list/061/images/title-tag.png");
        }
        .module-cmt-list .block-cont-gw {
            padding: 13px 0 11px;
            border-bottom: 1px dashed #e5e5e5;
        }
        .module-cmt-list .block-cont-gw .cont-head-gw {
            float: left;
            position: relative;
            width: 42px;
            z-index: 1;
        }
         .module-cmt-list .block-cont-gw .cont-head-gw .head-img-gw {
            padding: 7px 0 0;
            width: 42px;
            height: 42px;
            overflow: hidden;
        }
        .module-cmt-list .block-cont-gw .cont-head-gw .head-img-gw img {
            width: 42px;
            height: 42px;
            border-radius: 42px;
        }
        .module-cmt-list .block-cont-gw .msg-wrap-gw {
            position: relative;
            padding: 0 0 0 62px;
        }
        .module-cmt-list .block-cont-gw .wrap-user-gw {
            height: 24px;
            line-height: 16px;
            padding: 1px 0 0;
        }
        .global-clear-spacing {
            letter-spacing: -6px;
        }
        .module-cmt-list .wrap-user-gw .user-time-gw {
            float: right;
            padding: 5px 0 0;
            font-family: Arial;
            color: silver;
        }
        .global-clear-spacing * {
            letter-spacing: normal;
        }
        .module-cmt-list .wrap-user-gw .user-name-gw {
            display: inline-block;
            padding: 5px 7px 0 0;
            cursor: default;
        }
        .module-cmt-list .wrap-issue-gw {
            padding: 12px 0 0;
        }
        .module-cmt-list .wrap-action-gw {
            line-height: 16px;
            float: right;
            font-size: 14px
        }
         .module-cmt-list .action-click-gw {
            position: relative;
            top: -10px;
        }
        .module-cmt-list .action-click-gw a:hover{
            background: transparent;
            color: black !important;
        }
        .module-cmt-list .wrap-action-gw .action-click-gw .gap-gw {
            width: 1px;
            height: 11px;
            display: inline-block;
            overflow: hidden;
            margin: 0 9px -1px 9px;
        }
        .wrap-action-gw .action-click-gw .click-report-gw {
            display: none;
        }
        .module-cmt-list .wrap-action-gw .action-click-gw span a {
            color: #999;
            cursor: pointer;
        }
        .module-cmt-list .wrap-action-gw .action-click-gw .click-ding-gw {
            text-decoration: none;
        }
        .module-cmt-list .wrap-action-gw .action-click-gw .icon-gw {
            display: inline-block;
            width: 16px;
            height: 15px;
            overflow: hidden;
            vertical-align: -4px;
            /*vertical-align: 0;*/
        }
        .module-cmt-list .action-click-gw .icon-ding-bg {
            background-image: url(https://changyan.itc.cn/mdevp/extensions/cmt-list/061/images/ding.png);
            background-position: 0 0;
        }
        .module-cmt-list .action-click-gw a:hover i.icon-ding-bg {
            background-image: url(https://changyan.itc.cn/mdevp/extensions/cy-skin/028/skin-black/images/ding-active.png);
            background-repeat: no-repeat;
            background-position: center;
        }
        .module-cmt-list .wrap-action-gw .action-click-gw .icon-name-bg {
            padding: 0 0 0 4px;
            font-family: Arial;
        }
        .module-cmt-list .action-click-gw .icon-cai-bg {
            background-image: url(https://changyan.itc.cn/mdevp/extensions/cmt-list/061/images/cai.png);
            background-position: 0 0;
        }
        .module-cmt-list .action-click-gw a:hover i.icon-cai-bg {
            background-image: url(https://changyan.itc.cn/mdevp/extensions/cy-skin/028/skin-black/images/cai-active.png);
            background-repeat: no-repeat;
            background-position: center;
        }
        /*评论区样式结束*/
    </style>
@endsection

@section('content')

<body>
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
                        <textarea class="form-control" rows="5" placeholder="需要登陆后才能发表评论" cols="50" style="overflow: hidden;overflow-wrap: break-word;;resize: horizontal;height: 181px;" disabled="disabled"></textarea>
                        <!-- 评论列表 -->
                        <div class="module-cmt-list section-list-w">
                            <div class="cmt-list-type">
                                <ul class="clear-g type-lists" style="margin-left: 0;">
                                    <li class="type-list active">评论</li>
                                </ul>
                                <div class="cmt-list-border"></div>
                                <div class="cmt-list-number">
                                    <span class="comment-number">
                                        <span class="cy-number">332</span>条评论
                                    </span>
                                </div>
                            </div>
                            <!-- 最新评论 -->
                            <div class="list-block-gw list-newest-w">
                                <div class="block-title-gw">
                                    <ul class="clear-g" style="margin-left: 0;">
                                        <li>
                                            <div class="title-name-gw title-name-bg">
                                                <div class="title-name-gw-tag"></div>
                                                最新评论
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="cy-cmt-list">
                                <div class="clear-g block-cont-gw">
                                    <div class="cont-head-gw">
                                        <div class="head-img-gw">
                                            <img src="http://photo.pic.sohu.com/images/oldblog/person/11111.gif" alt="" height="42" width="42">
                                        </div>
                                    </div>
                                    <div class="cont-msg-gw">
                                        <div class="msg-wrap-gw">
                                            <div class="wrap-user-gw global-clear-spacing">
                                                <span class="user-time-gw">2018年2月9日 14:41</span>
                                                <span class="user-name-gw">刘兵伟</span>
                                                <!-- <span class="user-address-gw">[<i>浙江省</i>网友]</span> -->
                                            </div>
                                            <div class="wrap-issue-gw">
                                                <p class="issue-wrap-gw">
                                                    <span class="wrap-word-gw">为什么输查询语句的时候不会自动补全萨芬艰苦撒旦共花这他看见啊分噶kg恢复阶段电视剧看管好房价的状况良好捐款来自德国和费德勒讲故事酒店客房看看好了
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 图片展示 -->
                                    <div class="clear-g wrap-action-gw">
                                        <div class="action-click-gw global-clear-spacing">
                                            <i class="gap-gw"></i>
                                            <span class="click-reply-gw">
                                                <a href="javascript:void(0)">回复</a>
                                            </span>
                                            <i class="gap-gw"></i>
                                            <span class="click-ding-gw">
                                                <a href="javascript:void(0)"><i class="icon-gw icon-ding-bg"></i></a>
                                                <em class="icon-name-bg"></em>
                                            </span>
                                            <i class="gap-gw"></i>
                                            <span class="click-cai-gw">    
                                                <a href="javascript:void(0)"><i class="icon-gw icon-cai-bg"></i></a>
                                                <em class="icon-name-bg"></em>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div id="cy-cmt-list">
                                <div data-id="1537215473" data-user-id="1072125760" data-platform-id="3" class="clear-g block-cont-gw">
                                    <div class="cont-head-gw">
                                        <div class="head-img-gw">
                                            <img src="http://photo.pic.sohu.com/images/oldblog/person/11111.gif" alt="" height="42" width="42">
                                        </div>
                                    </div>
                                    <div class="cont-msg-gw">
                                        <div class="msg-wrap-gw">
                                            <div class="wrap-user-gw global-clear-spacing">
                                                <span class="user-time-gw">2018年2月9日 14:41</span>
                                                <span class="user-name-gw">刘兵伟</span>
                                                <!-- <span class="user-address-gw">[<i>浙江省</i>网友]</span> -->
                                            </div>
                                            <div class="wrap-issue-gw">
                                                <p class="issue-wrap-gw" style="margin-bottom: 0px;">
                                                    <span class="wrap-word-gw">为什么输查询语句的时候不会自动补全代码</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 图片展示 -->
                                    <div class="clear-g wrap-action-gw">
                                        <div class="action-click-gw global-clear-spacing">
                                            <i class="gap-gw"></i>
                                            <span class="click-reply-gw">
                                                <a href="javascript:void(0)">回复</a>
                                            </span>
                                            <i class="gap-gw"></i>
                                            <span class="click-ding-gw">
                                                <a href="javascript:void(0)"><i class="icon-gw icon-ding-bg"></i></a>
                                                <em class="icon-name-bg"></em>
                                            </span>
                                            <i class="gap-gw"></i>
                                            <span class="click-cai-gw">    
                                                <a href="javascript:void(0)"><i class="icon-gw icon-cai-bg"></i></a>
                                                <em class="icon-name-bg"></em>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div id="cy-cmt-list">
                                <div  class="clear-g block-cont-gw">
                                    <div class="cont-head-gw">
                                        <div class="head-img-gw">
                                            <img src="http://photo.pic.sohu.com/images/oldblog/person/11111.gif" alt="" height="42" width="42">
                                        </div>
                                    </div>
                                    <div class="cont-msg-gw">
                                        <div class="msg-wrap-gw">
                                            <div class="wrap-user-gw global-clear-spacing">
                                                <span class="user-time-gw">2018年2月9日 14:41</span>
                                                <span class="user-name-gw">刘兵伟</span>
                                                <!-- <span class="user-address-gw">[<i>浙江省</i>网友]</span> -->
                                            </div>
                                            <div class="wrap-issue-gw">
                                                <p class="issue-wrap-gw" style="margin-bottom: 0px;">
                                                    <span class="wrap-word-gw">为什么输查询语句的时候不会自动补全代码</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 图片展示 -->
                                    <div class="clear-g wrap-action-gw">
                                        <div class="action-click-gw global-clear-spacing">
                                            <i class="gap-gw"></i>
                                            <span class="click-reply-gw">
                                                <a href="javascript:void(0)">回复</a>
                                            </span>
                                            <i class="gap-gw"></i>
                                            <span class="click-ding-gw">
                                                <a href="javascript:void(0)"><i class="icon-gw icon-ding-bg"></i></a>
                                                <em class="icon-name-bg"></em>
                                            </span>
                                            <i class="gap-gw"></i>
                                            <span class="click-cai-gw">    
                                                <a href="javascript:void(0)"><i class="icon-gw icon-cai-bg"></i></a>
                                                <em class="icon-name-bg"></em>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 引入通用评论结束 -->
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