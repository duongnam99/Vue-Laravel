<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Vue-Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div id="app">
    {{--<my-component></my-component>--}}
    {{--<conditional-rendering></conditional-rendering>--}}
    {{--<list-rendering></list-rendering>--}}
    {{--<user-dashboard></user-dashboard>--}}
    {{--<life-cycle></life-cycle>--}}
    {{--<force-update></force-update>--}}
    {{--<class-binding></class-binding>--}}
    {{--<v-model></v-model>--}}
    {{--<click-event></click-event>--}}
    {{--<api-calling></api-calling>--}}
    <User></User>
</div>
<script src="/js/app.js"></script>
</body>
</html>