<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link rel="stylesheet" href="/css/app.css">

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <title>Simple CRM</title>
  </head>
  <body class="text-gray-800 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-2xl font-font leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
            href="#"
            >Simple <span class="bg-red-500 p-2 text-2xl font-bold" > CRM </span></a
          >
          
          <button
           class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-gray-300 opacity-80 rounded-lg lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
          
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#Ameen"
                ><i
                  class="lg:text-white text-white fab fa-facebook text-3xl leading-lg " 
                ></i
                ><span class="lg:hidden inline-block ml-2">Share</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#Ameen"
                ><i
                  class="lg:text-white text-white fab fa-twitter text-3xl leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">Tweet</span></a
              >
            </li>
            
            <li class="flex items-center">
              <a href="/home"
                class="bg-red-500 text-white active:bg-red-400 text-base font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                type="button"
                style="transition: all 0.15s ease 0s;"
              >
                 Get Started
            </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 70vh;"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-50 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto" data-aos="fade-right">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-full px-4 ml-auto mr-auto text-left">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-4xl md:text-6xl leading-normal tracking-right border-b-8 border-red-500 w-2/4">
                  Work Better!
                </h1>
                <p class="mt-4 w-full md:w-7/12 text-lg text-gray-300 leading-loose  ">
                  Keep track of all your leads and clients in one place. This is 
                  the simplest <span class="bg-red-500 p-1 sm:p-2 font-bold"> CRM</span> you will find on the web.<span class="bg-red-500 p-1 sm:p-2 font-bold">Simple & Effective</span> 
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px; transform: translateZ(0px);"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-300 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-20 bg-gray-300 -mt-32">
        <div class="container mx-auto px-4">
          
          <div class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto" data-aos="fade-right">
              
              <h3 class="text-4xl text-red-500 mb-2 font-semibold leading-normal" >
                Everything in one place
              </h3>
              <p
                class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
              >
                Collaborate with your team members. Make the best out of your time by organizing all 
                your data and client information in one place. Easy to update, and easy to navigate.
              </p>
              <p
                class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
              >
                Why use complex CRM system that add a burden to your staff? This simple CRM will save 
                you a lot of time and efforts, and will make you more productive.
              </p>

              <div class="bg-red-500 mb-4 p-4 rounded-lg text-white text-xl"> Try it today! </div>
              
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto" data-aos="fade-left">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-red-600"
              >
                <img
                  alt="..."
                  src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&auto=format&fit=crop&w=2126&q=80"
                  class="w-full align-middle rounded-t-lg"
                />
                <blockquote class="relative p-8 mb-4">
                  <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block"
                    style="height: 95px; top: -94px;"
                  >
                    <polygon
                      points="-30,95 583,95 583,65"
                      class="text-red-800 fill-current"
                    ></polygon>
                  </svg>
                  <h4 class="text-xl font-bold text-white">
                    Increase conversion through collaboration
                  </h4>
                  <p class="text-md font-light mt-2 text-white">
                    Your clients and leads are the most important assets your company has. Our simple-to-use CRM 
                    will help your team organize and colaborate effectively to convert leads to sales, and to retain your clients.
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="relative py-20">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px; transform: translateZ(0px);"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4" data-aos="zoom-in-down">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <img
                alt="..."
                class="max-w-full rounded-lg shadow-lg"
                src="https://images.unsplash.com/photo-1513128034602-7814ccaddd4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80"
              />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                
                <h3 class="text-3xl mt-2 md:text-4xl text-red-500 font-semibold">Get things done the easy way</h3>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                  Adding another level of complexity to your work is not going to help. We add value by taking the load off your shoulder
                  and give you the ability and tools to focus on what matters. Simple CRM will help you do just that.
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-red-600 bg-pink-200 mr-3"
                          ><i class="fas fa-money-check-alt"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                          Free of charge, forvere.
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-red-600 bg-pink-200 mr-3"
                          ><i class="fas fa-users"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Unlimited number of users</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-red-200 mr-3"
                          ><i class="far fa-heart"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Hassle free, Guaranteed!</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-red-500">Join the movement</h2>
              <p class="text-lg leading-relaxed m-4 text-gray-600">
                Here are some of the companies and organizations that trust us. Join the movement today!
              </p>
            </div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6" data-aos="flip-down">
                <img
                  alt="..."
                  src="/img/Hulu_logo.svg"
                  class="shadow-lg rounded-lg max-w-full mx-auto w-64 h-40 p-4"
                  
                />
                
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6" data-aos="flip-down">
                <img
                  alt="..."
                  src="/img/Natgeo_logo.svg"
                  class="shadow-lg rounded-lg max-w-full mx-auto w-64 h-40 p-4"
                  
                />
                
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6" data-aos="flip-down">
                <img
                  alt="..."
                  src="img/Google_logo.svg"
                  class="shadow-lg rounded-lg max-w-full mx-auto w-64 h-40 p-4"
                 
                />
                
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6" data-aos="flip-down">
                <img
                  alt="..."
                  src="/img/American_Express_logo.svg"
                  class="shadow-lg rounded-lg max-w-full mx-auto w-64 h-40 p-4"
                  
                />
                
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
    </main>
    <footer class="relative bg-gray-200 pt-8 pb-6">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0px);"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          
          <div class="w-full lg:w-full px-4 " data-aos="fade-in">
            <h5 class="text-2xl font-semibold mt-0 mb-2 text-white bg-red-500 rounded-lg p-6 w-full">
              <a href="/home">Start today!
              </a>
              <i class="ml-8 fas fa-arrow-circle-right"></i>
            </h5>
            
          </div>
          
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
              Copyright © 2020 a work by Ameen Sanad
              
            
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init({
      delay: 100,
      duration: 900,
      once: false,
    });
  </script>
</html>
