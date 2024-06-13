<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/style.css">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body class="min-h-screen">
    <div class="blog-container w-full min-h-screen">
        <header class="w-full">
            <nav class="flex mx-auto justify-between items-center h-16 bg-slate-900 text-white px-6">
                <div class="left flex gap-14 items-center">
                    <img src="/images/Ai-logo.png" alt="" class="w-14">
                    <ul class="flex gap-8 text-base font-semibold">
                        <li class="hover:text-sky-400"><a href="/">Home</a></li>
                        <li class="hover:text-sky-400"><a href="#">AI BLog</a></li>
                        <li class="hover:text-sky-400"><a href="#">Ai Tools</a></li>
                        <li class="hover:text-sky-400"><a href="#">Affillates</a></li>
                    </ul>
                </div>
                <div class="right flex gap-5">
                    <a href="https://www.linkedin.com/wwwAIblog" class="text-xl hover:text-sky-400" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.twitter.com/wwwAIblog" class="text-xl hover:text-sky-400" target="_blank"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/wwwAIblog" class="text-xl hover:text-sky-400" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/wwwAIblog" class="text-xl hover:text-sky-400" target="_blank"><i
                            class="fa-brands fa-facebook-f"></i></a>
                </div>
            </nav>
            <div class="hero text-center text-white py-14">
                <h1 class="main-title text-5xl border-b border-sky-700 max-w-max mx-auto pb-4 mb-8">AI Blog & AI News
                </h1>
                @yield('sub-title')
                @yield('read-update')
                @yield('hero-image')
                @yield('create-update')
            </div>
        </header>
        <main>
            <div class="content w-10/12 mx-auto">
                @yield('content')
            </div>
            @yield('subscribe-content')
        </main>
        <footer class="h-12 mx-auto flex items-center justify-between text-white bg-slate-950 px-9">
            <div class="left-footer">
                &copy; 2024 AIBlog.com
            </div>
            <div class="center-footer">
                <img src="/images/Ai-logo.png" alt="AiBLog Logo" class="w-10">
            </div>
            <div class="right-footer flex gap-4 items-center">
                <p class="text-sky-500">Follow Me</p>
                <div class="social flex gap-3 items-center">
                    <a href="https://www.linkedin.com/wwwAIblog" class="text-xl hover:text-sky-400 hover:pb-2"
                        target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.twitter.com/wwwAIblog" class="text-xl hover:text-sky-400 hover:pb-2"
                        target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/wwwAIblog" class="text-xl hover:text-sky-400 hover:pb-2"
                        target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/wwwAIblog" class="text-xl hover:text-sky-400 hover:pb-2"
                        target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
</body>

</html>
