<!DOCTYPE html>

<head>
<meta charset="utf-8"> 
<title>{{config('app.name', 'Clipory')}}</title> 

@yield('script')

<style type="text/css"></style>

<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head> 

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>