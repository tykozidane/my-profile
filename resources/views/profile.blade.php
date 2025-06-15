<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ URL::to('/images/logotyko.png') }}" rel="shortcut icon">
    <script defer src="{{ asset('js/theme-toggle.js') }}"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
        <header class=" mx-10 md:mx-20 my-2">
            <img src="{{ URL::to('/images/logotyko.png') }}" width="80px" height="80px"/>
            <h5>tykozidane2015@gmail.com</h5>
        </header>
        <main class=" overflow-x-hidden overflow-y-hidden">
            <section id="hero" >
                <div class="flex flex-col-reverse md:flex-row justify-center items-center h-fit md:h-screen w-full">
                    <div class="w-full md:w-1/2 h-full  flex justify-center items-end relative">
                            <img src="{{ URL::to('/images/fotome.png') }}" width="500px" height="1000px" class=""/>
                    </div>
                    <div class="w-full md:w-1/2 h-full">
                        <div class="flex flex-col h-full justify-center items-center md:items-start text-wrap md:pl-10">
                            <div class=" font-extrabold text-3xl md:text-5xl">
                                Hi, I'm Tyko Zidane
                            </div>
                            <div class=" font-extrabold text-2xl md:text-3xl second-text pt-3">
                                Full Stack Developer
                            </div>
                            <div class="pt-5 px-5 text-gray-600"> A programmer from Indonesia that love challenges, have experience using Laravel, Codeigniter, NodeJS, ReactJS, NextJS, VueJS for framework and MySQL, PostgreSQL, mongoDB for Database
                            </div>
                            <div class="pt-5 px-2 grid grid-cols-3 gap-3">
                                <a href="" aria-label="Find us on LinkedIn"
                                    target="_blank" rel="noopener">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M44.45 0H3.55A3.5 3.5 0 0 0 0 3.46v41.07A3.5 3.5 0 0 0 3.54 48h40.9A3.51 3.51 0 0 0 48 44.54V3.46A3.5 3.5 0 0 0 44.45 0Zm-30.2 40.9H7.11V18h7.12v22.9Zm-3.57-26.03a4.13 4.13 0 1 1-.02-8.26 4.13 4.13 0 0 1 .02 8.26ZM40.9 40.9H33.8V29.77c0-2.66-.05-6.08-3.7-6.08-3.7 0-4.27 2.9-4.27 5.89V40.9h-7.1V18h6.82v3.12h.1c.94-1.8 3.26-3.7 6.72-3.7 7.21 0 8.54 4.74 8.54 10.91V40.9Z"
                                            fill="black"></path>
                                    </svg>

                                </a>
                                <a href="" aria-label="Find us on Instagram" target="_blank"
                                    rel="noopener">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24 4.32c6.41 0 7.17.03 9.7.14 2.34.1 3.6.5 4.45.83 1.11.43 1.92.95 2.75 1.79a7.38 7.38 0 0 1 1.8 2.75c.32.85.72 2.12.82 4.46.11 2.53.14 3.29.14 9.7 0 6.4-.03 7.16-.14 9.68-.1 2.35-.5 3.61-.83 4.46a7.42 7.42 0 0 1-1.79 2.75 7.38 7.38 0 0 1-2.75 1.8c-.85.32-2.12.72-4.46.82-2.53.11-3.29.14-9.69.14-6.41 0-7.17-.03-9.7-.14-2.34-.1-3.6-.5-4.45-.83a7.42 7.42 0 0 1-2.75-1.79 7.38 7.38 0 0 1-1.8-2.75 13.2 13.2 0 0 1-.82-4.46c-.11-2.53-.14-3.29-.14-9.69 0-6.41.03-7.17.14-9.7.1-2.34.5-3.6.83-4.45A7.42 7.42 0 0 1 7.1 7.08a7.38 7.38 0 0 1 2.75-1.8 13.2 13.2 0 0 1 4.46-.82c2.52-.11 3.28-.14 9.69-.14ZM24 0c-6.52 0-7.33.03-9.9.14-2.54.11-4.3.53-5.81 1.12a11.71 11.71 0 0 0-4.26 2.77 11.76 11.76 0 0 0-2.77 4.25C.66 9.8.26 11.55.14 14.1A176.6 176.6 0 0 0 0 24c0 6.52.03 7.33.14 9.9.11 2.54.53 4.3 1.12 5.81a11.71 11.71 0 0 0 2.77 4.26 11.73 11.73 0 0 0 4.25 2.76c1.53.6 3.27 1 5.82 1.12 2.56.11 3.38.14 9.9.14 6.5 0 7.32-.03 9.88-.14 2.55-.11 4.3-.52 5.82-1.12 1.58-.6 2.92-1.43 4.25-2.76a11.73 11.73 0 0 0 2.77-4.25c.59-1.53 1-3.27 1.11-5.82.11-2.56.14-3.38.14-9.9 0-6.5-.03-7.32-.14-9.88-.11-2.55-.52-4.3-1.11-5.82-.6-1.6-1.41-2.94-2.75-4.27a11.73 11.73 0 0 0-4.25-2.76C38.2.67 36.45.27 33.9.15 31.33.03 30.52 0 24 0Z"
                                            fill="black"></path>
                                        <path
                                            d="M24 11.67a12.33 12.33 0 1 0 0 24.66 12.33 12.33 0 0 0 0-24.66ZM24 32a8 8 0 1 1 0-16 8 8 0 0 1 0 16ZM39.7 11.18a2.88 2.88 0 1 1-5.76 0 2.88 2.88 0 0 1 5.75 0Z"
                                            fill="black"></path>
                                    </svg>

                                </a>
                            </div>
                            <div class="flex pt-5">
                                <div class="px-2">
                                    <button class="px-5 py-3 button-color rounded-lg hover:bg-slate-600 ">
                                        Mail me
                                    </button>
                                </div>
                                <div class="px-3 ">
                                    <button class="px-5 py-3 bg-emerald-700 hover:bg-slate-600 text-white  rounded-lg ">
                                        Whatsapp me
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                
            </section>
            <section>
            <div class="flex flex-col md:flex-row justify-center items-center bg-slate-400 py-10 md:py-2">
                        <div class="w-[360px] h-28 bg-white rounded-md flex justify-start items-center border-2 shadow-xl">
                            <div class="p-5">
                                <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="#1C274C"/>
                            </svg>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-lg font-bold">
                                    Web Company Profile
                                </div>
                                <div class="text-xs text-zinc-500 pr-2">
                                Empowering your business with innovative digital solutions.
                                </div>
                            </div>
                            
                        </div>
                        <div class="w-[360px] h-28 bg-white rounded-md flex justify-start items-center border-2 shadow-xl my-5 md:mx-5">
                            <div class="p-5">
                                <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="#029e9e"/>
                            </svg>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-lg font-bold">
                                    Web Ecommerce
                                </div>
                                <div class="text-xs text-zinc-500 pr-2">
                                Build intuitive, scalable, and secure digital platforms for your products and services.
                                </div>
                            </div>
                            
                        </div>
                        <div class="w-[360px] h-28 bg-white rounded-md flex justify-start items-center border-2 shadow-xl ">
                            <div class="p-5">
                                <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="#606262"/>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-lg font-bold">
                                    Web Games and Event
                                </div>
                                <div class="text-xs text-zinc-500 pr-2">
                                Entertainment meets innovation creating unforgettable experiences.
                                </div>
                            </div>
                            
                        </div>
                    </div>
            </section>
            <section class="mx-5 my-5" >
                <div class="flex flex-col justify-center items-center h-fit md:h-screen w-full">
                    
                    <div class="flex flex-col-reverse md:flex-row justify-center items-center">
                        <div class="flex flex-col justify-center items-center">
                            <div class="text-5xl font-extrabold max-w-[540px] font-lilitaone">
                                ALWAYS <a class="text-sky-500">LEARN</a> IN EVERY STEP OF MY JOURNY
                            </div>
                            <div class="text-sm text-gray-500 max-w-[520px] mt-5">
                            I’m passionate about turning ideas into reality through code. As a programmer, I see every project as an opportunity to innovate, solve real-world problems, and push the boundaries of what’s possible with technology.
                            </div>
                            <div class="text-sm text-gray-500 max-w-[520px] mt-5">
                            I’m excited to work together, share fresh ideas, and create something meaningful that not only works, but inspires. Let’s combine our skills, creativity, and vision to build something innovative and transformative.
                            </div>
                            <div class="flex justify-start items-center max-w-[520px] mt-10 grayscale">
                                <img src="{{ URL::to('/images/logoInfomedia.png') }}" class="mr-5 w-[150px] h-[50px] md:w-[250px] md:h-[100px]"/>
                                <img src="{{ URL::to('/images/logoNutech.png') }}" class="mr-5 w-[115px] h-[50px] md:w-[210px] md:h-[105px]"/>
                            </div>
                        </div>
                        <div class="md:ml-20">
                            <img src="{{ URL::to('/images/poster2Tyko.png') }}" width="600px" height="1000px"/>
                        </div>
                    </div>
                </div>
            </section>
            <section class="">
                <div class="flex flex-col justify-start items-center md:items-start w-full md:w-[80%] h-fit md:h-screen m-2 md:ml-32 md:pt-10">
                    <div class="text-5xl font-lilitaone w-[80%]">
                        <a class="text-emerald-400">Discover</a> some <br> of application that i have done
                    </div>
                    <div class="mt-14 flex flex-wrap justify-center sm:justify-between w-full">
                        <div class="rounded-xl w-[270px] h-[400px] border-2 shadow-lg  bg-white my-3">
                            <div class="rounded-xl w-full h-[200px] bg-slate-600">
                                <img src="{{ URL::to('/images/clonekatla2.png') }}" class="object-fill rounded-lg w-[270px] h-[200px]"/>
                            </div>
                            <div class=" text-3xl font-lilitaone w-full mt-3 ml-4 ">
                                Clone Katla
                            </div>
                            <div class="text-base w-[80%] mt-1 ml-4 text-wrap">
                                game that you have to guest the word and the word change every day
                            </div>
                            <div class="flex justify-between w-full items-center mt-3">
                                <div class="flex ml-5 grayscale">
                                  <img src="{{ URL::to('/images/vuejs.png') }}" class="object-fill rounded-lg w-[30px] h-[30px]"/>
                                </div>
                                <a href="https://clone-katla.tykozidane.com/" target="_blank"><button class="px-5 py-3 rounded-lg bg-emerald-500 mr-5 text-white">Try me</button></a>
                            </div>
                        </div>
                        <div class="rounded-xl w-[270px] h-[400px] border-2 shadow-lg  bg-white my-3">
                            <div class="rounded-xl w-full h-[200px] bg-slate-600">
                                <img src="{{ URL::to('/images/tictactoe2.png') }}" class="object-fill  w-[270px] h-[200px]"/>
                            </div>
                            <div class=" text-3xl font-lilitaone w-full mt-3 ml-4 ">
                                Tic Tac Toe
                            </div>
                            <div class="text-base w-[80%] mt-1 ml-4 text-wrap">
                                game Tic-Tac-Toe on web, have normal mode and wild mode
                            </div>
                            <div class="flex justify-between w-full items-center mt-3">
                                <div class="flex ml-5 grayscale">
                                  <img src="{{ URL::to('/images/react.png') }}" class="object-fill w-[35px] h-[40px]"/>
                                </div>
                                <a href="https://tic-tac-toe.tykozidane.com/" target="_blank"><button class="px-5 py-3 rounded-lg bg-emerald-500 mr-5 text-white">Try me</button></a>
                            </div>
                        </div>
                        <div class="rounded-xl w-[270px] h-[400px] border-2 shadow-lg animate-pulse bg-white my-3">
                            <div class="rounded-xl w-full h-[200px] bg-slate-600">
                                <img src="{{ URL::to('/images/commingsoon.png') }}" class="object-contain w-[270px] h-[200px]"/>
                            </div>
                            <div class="text-2xl font-mono w-40 h-7 bg-slate-500 rounded-xl mt-5 ml-4 ">
                            </div>
                            <div class="text-2xl font-mono w-56 h-3 bg-slate-500 rounded mt-5 ml-4 ">
                            </div>
                            <div class="text-2xl font-mono w-56 h-3 bg-slate-500 rounded mt-2 ml-4 ">
                            </div>
                            <div class="text-2xl font-mono w-40 h-3 bg-slate-500 rounded mt-2 ml-4 ">
                            </div>
                            <div class="flex justify-end items-end mt-3">
                                <a href="#" target="_blank"><button class="px-5 py-3 rounded-lg bg-slate-600 mr-5 text-white">Try me</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class=" max-h-72 w-full flex flex-col justify-center items-center relative  ">
                    <div class="absolute w-[2000px] h-screen bg-black rounded-full -z-10 -rotate-[10deg] -top-[100px] -left-[20px]"></div>
                    <div class="w-[80%] md:w-[70%] h-60 bg-teal-400 rounded-xl flex flex-col justify-center items-center">
                        <div class="text-3xl text-white font-lilitaone">Let's Talk More</div>
                        <div class="mt-8">
                            <!-- <input class="rounded-xl w-80 h-10"/> -->
                             <a href="mailto:tykozidane2015@gmail.com"><button class="px-5 py-3 button-color rounded-lg hover:bg-slate-600 "> Mail me</button></a>
                        </div>
                    </div>
                    <div class=" h-20 flex justify-center items-end pb-5"><p class="text-white text-xs">&copy; 2024 Tyko Zidane Badhawi</p></div>
                </div>
            </section>
        </main>
</body>
</html>
