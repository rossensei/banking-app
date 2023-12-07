<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>MintCrest Bank</title>

  @vite('resources/css/app.css')
</head>
<body>
    <div class="flex min-h-screen bg-center bg-cover bg-no-repeat bg-[url('https://arizent.brightspotcdn.com/dims4/default/22e17b7/2147483647/strip/true/crop/4800x3200+0+0/resize/825x550!/format/webp/quality/90/?url=https%3A%2F%2Fsource-media-brightspot.s3.us-east-1.amazonaws.com%2Fb9%2Fca%2F44136d664f80ae4025cf359cb72e%2Fperson-on-phone.jpeg')] bg-gray-700 bg-blend-multiply">
        <section class="z-10 mx-auto lg:max-w-[1024px]">
            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Empowering Your Financial Journey, One Tap at a Time.</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                    Welcome to MintCrest Bank — where convenience meets innovation. Seamlessly manage finances, transfer securely, and explore endless possibilities. Join us for effortless banking and financial empowerment.
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="{{ url('/register') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Get started
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg sm:ms-4 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Learn more
                    </a>
                </div>
            </div>
        </section>

    </div>
</body>
</html>
