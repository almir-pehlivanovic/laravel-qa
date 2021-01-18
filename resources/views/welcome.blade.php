<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Q&A</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito';
            }
            @media (min-width: 1536px){
                .max-w-2xl-c{
                    max-width: 42rem;
                }
                .justify-start-c{
                    justify-content: flex-start;
                }
                .img-pos{
                    position: absolute;
                    top: 50%; 
                    transform: translateY(-50%);
                    right: 6rem;
                }
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="bg-gray-100 dark:bg-gray-900 min-h-screen">
            <div class="sm:pt-0 mx-8 md:mx-10 lg:mx-16 xl:mx-24 ">
                <nav>
                    <div class="flex justify-between items-center border-b border-gray-400">
                        <div class="my-4">
                            <a href="{{ route('dashboard') }}">
                                <x-jet-application-mark class="block h-9 w-8" />
                            </a>
                        </div>
                        <div>
                            @if (Route::has('login'))
                                <div class="py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-900 ">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-900 ">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-100 px-8 py-2 bg-indigo-500 rounded">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </nav>
                <div>
                    <div class="mt-10 max-w-2xl-c">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-800">
                            Life is easier when you have all the answers !
                        </h1>
                        <h4 class="hidden md:block text-md sm:text-xl text-gray-600 mt-5 pr-32">Dolorem dignissimos quis ipsum ducimus perspiciatis id porro. Fugiat quia enim magnam voluptates.</h4>
                    </div>
                    <div class="mb-4 img-pos">
                        <img class="md:max-w-2xl xl:max-w-full mx-auto" src="{{ asset('img/undraw_Questions_re_1fy7.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <div class="flex-wrap justify-center justify-start-c flex items-center -ml-4 md:mt-10">
                        <a href="{{ route('register') }}" class="mt-8 mx-4 text-lg sm:text-xl text-gray-100 px-8 py-3 rounded bg-red-500 shadow-xl hover:bg-red-400 transition-all duration-200">Join now</a>
                        <a href="#" class="description mt-8 mx-4 flex items-center">
                            <span class="text-lg sm:text-xl text-gray-600 font-semibold hover:font-extrabold transition-all duration-200">Learn more</span>
                            <span>
                                <svg class="h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="mt-10 sm:mt-20">
                        <h3 class="text-xl sm:text-3xl font-semibold text-gray-800">What is the first thing you will do ?</h3>
                        <ul class="sm:ml-2">
                            <li class="mt-4 flex items-center">
                                <span class="mr-2">
                                    <svg class="text-red-400 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                </span>
                                <p class="sm:text-xl text-gray-800">Ask a question</p>
                            </li>
                            <li class="mt-4 flex items-center">
                                <span class="mr-2">
                                    <svg class="text-indigo-400 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </span>
                                <p class="sm:text-xl text-gray-800">Find a solution</p>
                            </li>
                            <li class="mt-4 pb-4 flex items-center">
                                <span class="mr-2">
                                    <svg class="w-6 h-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <p class="sm:text-xl text-gray-800">Vote best answer</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     <!-- This example requires Tailwind CSS v2.0+ -->
     <div class="custom-modal fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 ">
            <!--
            Background overlay, show/hide based on modal state.

            Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
            Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 transition-opacity " aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <!--
            Modal panel, show/hide based on modal state.

            Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
            Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg  lg:max-w-xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                    Q&A Platform
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500 mt-1">
                            This project is developed and represents the layout and plan of a web application control over the inbox. 
                            Project is developed to practice tailwind CSS and for the customers that want to implement this kind of design in their CRM, or want something similar for their system. 
                            The goal of this project is to show how it would look like an interface that manages user inboxes.  
                        </p>
                        <br>
                        <p class="text-sm text-gray-500 mt-1">
                            The application is currently not functional it's only designed and developed to show the message control interface.
                            The plan for future development is to make a fully functional application that will be used in all companies, institutions, faculties, for personal use, etc. 
                            Also, the plan is that it can be easily implemented in an already existing CRM. 
                        </p>  
                        <br>
                        <p class="text-sm text-gray-500 mt-1">
                            Tailwind CSS was used in making this project. The application is responsive for all devices. 
                            The development of a functional application would be further carried out using a Laravel framework.
                        </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="cancel-description mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
                </button>
            </div>
            </div>
        </div>
    </div>
    <style>
        .custom-modal{
            display:none;
        }
    </style>
    <script>
        const description = document.querySelector('.description');
        const modal = document.querySelector('.custom-modal');
        const cancelModal = document.querySelector('.cancel-description');

        description.addEventListener('click', () => {
            modal.style.display = 'block';
        });

        cancelModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    </script>
    </body>
</html>
