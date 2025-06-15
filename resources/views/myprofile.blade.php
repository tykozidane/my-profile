<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyko Zidane</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="w-screen h-lvh relative">
        <div class="sidebar">
            <div class="cont-list">
                <div class="list active"><a href="#hero"><i class="fa-solid fa-user fa-xl colorinwhite"></a></i></div>
                <div class="list"><a href="#slider "><i class="fa-solid fa-graduation-cap fa-xl colorinwhite"></a></i></div>
                <div class="list"><a ><i class="fa-solid fa-diagram-project fa-xl colorinwhite"></a></i></div>
                <div class="list"><a ><i class="fa-solid fa-address-book fa-xl colorinwhite"></a></i></div>
                <div class="indicator"></div>
            </div>
        </div>
        
        <div class="nav-title">
                <img src="{{ URL::to('/images/logotyko.png') }}" width="100px" height="100px"/>
        </div>
        <section id="hero" >
            <div class="hero-section">
                <div class="hero-text">
                    <h1>Tyko Zidane Badhawi</h1>
                    <a>Web Developer</a>

                </div>
                <div class="hero-image">
                    <div class="image-box">
                        <img src="{{ URL::to('/images/DSC08473.JPG') }}" />
                    </div>
                </div>
            </div>
        </section>
        <section id="slider">
            <div class=" bg-slate-400 w-full h-40 flex justify-center items-center">
                <div class="image-slider h-full w-full">
                    <img src="{{ URL::to('/images/cilogo.png') }}"  alt="Image 1">
                    <img src="{{ URL::to('/images/css3.png') }}"  alt="Image 2">
                    <img src="{{ URL::to('/images/html5.png') }}"  alt="Image 3">
                    <img src="{{ URL::to('/images/nodejs.png') }}"  alt="Image 4">
                    <img src="{{ URL::to('/images/react.png') }}"  alt="Image 5">
                    <img src="{{ URL::to('/images/tailwind.png') }}"  alt="Image 6">
                    <img src="{{ URL::to('/images/vuejs.png') }}"  alt="Image 7">

                    <img src="{{ URL::to('/images/cilogo.png') }}"  alt="Image 1">
                    <img src="{{ URL::to('/images/css3.png') }}"  alt="Image 2">
                    <img src="{{ URL::to('/images/html5.png') }}"  alt="Image 3">
                    <img src="{{ URL::to('/images/nodejs.png') }}"  alt="Image 4">
                    <img src="{{ URL::to('/images/react.png') }}"  alt="Image 5">
                    <img src="{{ URL::to('/images/tailwind.png') }}"  alt="Image 6">
                    <img src="{{ URL::to('/images/vuejs.png') }}"  alt="Image 7">
                </div>
                
            </div>
        </section>
        <section id="education">
            <div class=" min-h-screen">

            </div>
        </section>
    </div>
    <script>
        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item) => item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item)=> item.addEventListener('click', activeLink))
    </script>
</body>
</html>