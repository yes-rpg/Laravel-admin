<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layuimini-单页版 v2 - 基于Layui的后台管理系统前端模板</title>
    <meta name="keywords" content="layuimini,layui,layui模板,layui后台,后台模板,admin,admin模板,layui mini">
    <meta name="description" content="layuimini基于layui的轻量级前端后台管理框架，最简洁、易用的后台框架模板，面向所有层次的前后端程序,只需提供一个接口就直接初始化整个框架，无需复杂操作。">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('static/admin/lib/layui-v2.5.5/css/layui.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('static/admin/lib/font-awesome-4.7.0/css/font-awesome.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('static/admin/css/layuimini.css?v=2.0.1') }}" media="all">
    <link rel="stylesheet" href="{{ asset('static/admin/css/themes/default.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('static/admin/css/public.css') }}" media="all">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style id="layuimini-bg-color">
    </style>
</head>
<body class="layui-layout-body layuimini-all">
<div class="layui-layout layui-layout-admin">

    @include('admin::layouts._header')

    @include('admin::layouts._left')
    <div class="layui-body">

        @include('admin::layouts._top')

        <div class="layuimini-content-page">
            @yield('content')
        </div>

    </div>

</div>
<script src="{{ asset('static/admin/lib/layui-v2.5.5/layui.js') }}" charset="utf-8"></script>
<script src="{{ asset('static/admin/js/lay-config.js?v=2.0.0') }}" charset="utf-8"></script>
<script>
    layui.use(['jquery', 'layer', 'miniAdmin', 'miniTongji'], function () {
        var $ = layui.jquery,
            layer = layui.layer,
            miniAdmin = layui.miniAdmin,
            miniTongji = layui.miniTongji;

        var options = {
            iniUrl: "{{ route('admin.init') }}",    // 初始化接口
            clearUrl: "{{asset('static/admin/api/clear.json')}}", // 缓存清理接口
            renderPageVersion: true,    // 初始化页面是否加版本号
            bgColorDefault: false,      // 主题默认配置
            multiModule: true,          // 是否开启多模块
            menuChildOpen: false,       // 是否默认展开菜单
            loadingTime: 0,             // 初始化加载时间
            pageAnim: true,             // 切换菜单动画
        };
        miniAdmin.render(options);

        // 百度统计代码，只统计指定域名
        miniTongji.render({
            specific: true,
            domains: [
                '99php.cn',
                'layuimini.99php.cn',
                'layuimini-onepage.99php.cn',
            ],
        });

        $('.login-out').on("click", function () {
            layer.msg('退出登录成功', function () {
                window.location = 'page/login-3.html';
            });
        });
    });
</script>
</body>
</html>
