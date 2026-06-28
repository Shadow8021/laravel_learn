<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  
</head>
<body>
    <nav class="bg-gray-800 text-white w-full h-16 pt-5">
        <ul class="flex justify-center items-center gap-3 ">
            <li class="hover:text-amber-200"><a href={{url('/')}}>Home</a></li>
            <li class="hover:text-amber-200"><a href={{url('/blog')}}>Blog</a></li>
            <li class="hover:text-amber-200"><a href={{url('/contact')}}>Contact</a></li>
            <li class="hover:text-amber-200"><a href={{url('/about')}}>about</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>