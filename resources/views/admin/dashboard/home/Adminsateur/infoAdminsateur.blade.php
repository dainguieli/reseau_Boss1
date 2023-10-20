@extends('admin.layouts.base')

@section('content')

<div class="p-1 xl:ml-80">

  <aside
    class="fixed top-0 right-0 z-50 h-screen w-96 bg-white px-2.5 shadow-lg transition-transform duration-300 translate-x-96">
    <div class="flex items-start justify-between px-6 pt-8 pb-6">
      <div>
        <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900">
          Dashboard Configurator</h5>
        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">See our
          dashboard options.</p>
      </div><button
        class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
        type="button"><span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
            aria-hidden="true" class="h-5 w-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg></span></button>
    </div>
    <div class="py-4 px-6">
      <div class="mb-12">
        <h6
          class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
          Sidenav Colors</h6>
        <div class="mt-3 flex items-center gap-2"><span
            class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-blue-400 to-blue-600 border-black"></span><span
            class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-blue-gray-800 to-blue-gray-900 border-transparent"></span><span
            class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-green-400 to-green-600 border-transparent"></span><span
            class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-orange-400 to-orange-600 border-transparent"></span><span
            class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-red-400 to-red-600 border-transparent"></span><span
            class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-pink-400 to-pink-600 border-transparent"></span>
        </div>
      </div>
      <div class="mb-12">
        <h6
          class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
          Sidenav Types</h6>
        <p class="block antialiased font-sans text-sm font-light leading-normal text-gray-700">Choose between 3
          different sidenav types.</p>
        <div class="mt-3 flex items-center gap-2"><button
            class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85]"
            type="button">Dark</button><button
            class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-blue-500 text-blue-500 hover:opacity-75 focus:ring focus:ring-blue-200 active:opacity-[0.85]"
            type="button">Transparent</button><button
            class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-blue-500 text-blue-500 hover:opacity-75 focus:ring focus:ring-blue-200 active:opacity-[0.85]"
            type="button">White</button></div>
      </div>
      <div class="mb-12">
        <hr>
        <div class="flex items-center justify-between py-5">
          <h6
            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
            Navbar Fixed</h6>
          <div class="inline-flex items-center">
            <div class="relative inline-block w-8 h-4 cursor-pointer rounded-full"><input id="navbar-fixed"
                type="checkbox"
                class="peer appearance-none w-8 h-4 absolute bg-blue-gray-100 rounded-full cursor-pointer transition-colors duration-300 checked:bg-blue-500 peer-checked:border-blue-500 peer-checked:before:bg-blue-500"
                value="false"><label for="navbar-fixed"
                class="bg-white w-5 h-5 border border-blue-gray-100 rounded-full shadow-md absolute top-2/4 -left-1 -translate-y-2/4 peer-checked:translate-x-full transition-all duration-300 cursor-pointer before:content[''] before:block before:bg-blue-gray-500 before:w-10 before:h-10 before:rounded-full before:absolute before:top-2/4 before:left-2/4 before:-translate-y-2/4 before:-translate-x-2/4 before:transition-opacity before:opacity-0 hover:before:opacity-10 peer-checked:border-blue-500 peer-checked:before:bg-blue-500">
                <div class="inline-block top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 p-5 rounded-full"></div>
              </label></div>
          </div>
        </div>
        <hr>
        <div class="my-8 flex flex-col gap-4"><a
            href="https://www.creative-tim.com/product/material-tailwind-dashboard-react?rel=mtdr"
            target="_black"><button
              class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] block w-full"
              type="button">Free Download</button></a><a
            href="https://www.material-tailwind.com/docs/react/installation?rel=mtdr" target="_black"><button
              class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-blue-gray-500 text-blue-gray-500 hover:opacity-75 focus:ring focus:ring-blue-gray-200 active:opacity-[0.85] block w-full"
              type="button">View Documentation</button></a><a
            href="https://www.material-tailwind.com/blocks/react?rel=mtdr" target="_black"><button
              class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-blue-gray-500 text-blue-gray-500 hover:opacity-75 focus:ring focus:ring-blue-gray-200 active:opacity-[0.85] block w-full"
              type="button">Material Tailwind PRO</button></a></div><a
          class="mx-auto flex items-center justify-center gap-2"
          href="https://github.com/creativetimofficial/material-tailwind-dashboard-react" target="_blank"
          rel="noreferrer">
          <div
            class="relative inline-block align-baseline font-sans text-xs font-bold uppercase center leading-none whitespace-nowrap py-2 rounded-lg select-none text-white bg-blue-gray-900 px-4"
            style="opacity: 1;">
            <div class="w-5 h-5 absolute top-2/4 left-1 -translate-y-2/4"><svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20" fill="currentColor" class="mt-px ml-1.5 h-4 w-4">
                <path fill-rule="evenodd"
                  d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                  clip-rule="evenodd"></path>
              </svg></div>
            <div class="ml-4  mt-px">192 - Stars</div>
          </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
              d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z">
            </path>
          </svg>
        </a>
      </div>
      <div class="text-center">
        <h6
          class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
          Thank you for sharing ❤️</h6>
        <div class="mt-4 flex justify-center gap-2"><button
            class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-blue-gray-600 to-blue-gray-400 text-white shadow-md shadow-blue-gray-500/20 hover:shadow-lg hover:shadow-blue-gray-500/40 active:opacity-[0.85] flex items-center gap-2"
            type="button"><i class="fa-brands fa-twitter text-white"></i>Tweet</button><button
            class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-blue-gray-600 to-blue-gray-400 text-white shadow-md shadow-blue-gray-500/20 hover:shadow-lg hover:shadow-blue-gray-500/40 active:opacity-[0.85] flex items-center gap-2"
            type="button"><i class="fa-brands fa-facebook text-white"></i>Share</button></div>
      </div>
    </div>
  </aside>
  <div
    class="relative mt-8 h-72 w-full overflow-hidden rounded-xl bg-[url(https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80)] bg-cover	bg-center">
    <div class="absolute inset-0 h-full w-full bg-blue-500/50"></div>
  </div>
  <div
    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md mx-3 -mt-16 mb-6 lg:mx-4">
    <div class="p-4">
      <div class="mb-10 flex items-center justify-between gap-6">
        <div class="flex items-center gap-6"><img src="{{asset('storage/'.$client->profile_photo_path)}}"
            alt="bruce-mars"
            class="inline-block relative object-cover object-center w-[74px] h-[74px] rounded-lg shadow-lg shadow-blue-gray-500/40">
          <div>
            <h5
              class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-1">
                {{$client->name}}</h5>
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">{{$client->type}}</p>
          </div>
        </div>
     
      </div>
      <div class="gird-cols-1 mb-12 grid gap-12 px-4 lg:grid-cols-2 xl:grid-cols-3">
  
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
          <div
            class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none mx-0 mt-0 mb-4 flex items-center justify-between gap-4">
            <h6
              class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
              Profile Information</h6>
          </div>
          <div class="p-0">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">Hi, I'm Alec
              Thompson, Decisions: If you can't decide, the answer is no. If two equally difficult paths, choose the one
              more painful in the short term (pain avoidance is creating an illusion of equality).</p>
            <hr class="my-8 border-blue-gray-50">
            <ul class="flex flex-col gap-4 p-0">
              <li class="flex items-center gap-4">
                <p
                  class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                  first name:</p>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500"> {{$client->name}}</p>
              </li>
              <li class="flex items-center gap-4">
                <p
                  class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                  mobile:</p>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500"> {{$client->contact}}</p>
              </li>
              <li class="flex items-center gap-4">
                <p
                  class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                  email:</p>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                  {{$client->email}}</p>
              </li>
              <li class="flex items-center gap-4">
                <p
                  class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                  location:</p>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500"> {{$client->adresse}}</p>
              </li>
              <li class="flex items-center gap-4">
                <p
                  class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                  social:</p>
                <div class="flex items-center gap-4"><i class="fa-brands fa-facebook text-blue-700"></i><i
                    class="fa-brands fa-twitter text-blue-400"></i><i
                    class="fa-brands fa-instagram text-purple-500"></i></div>
              </li>
            </ul>
          </div>
        </div>
        <!--
        <div>
          <h6
            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-3">
            Platform Settings</h6>
          <ul class="flex flex-col gap-6">
            <div class="flex items-center justify-between gap-4">
              <div class="flex items-center gap-4"><img src="/material-tailwind-dashboard-react/img/team-1.jpeg"
                  alt="Sophie B."
                  class="inline-block relative object-cover object-center w-12 h-12 rounded-lg shadow-lg shadow-blue-gray-500/25">
                <div>
                  <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 mb-1 font-semibold">
                    Sophie B.</p>
                  <p class="block antialiased font-sans text-xs font-normal text-blue-gray-400">Hi! I need more
                    information...</p>
                </div>
              </div><button
                class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg text-blue-500 hover:bg-blue-500/10 active:bg-blue-500/30"
                type="button">reply</button>
            </div>
            <div class="flex items-center justify-between gap-4">
              <div class="flex items-center gap-4"><img src="/material-tailwind-dashboard-react/img/team-2.jpeg"
                  alt="Alexander"
                  class="inline-block relative object-cover object-center w-12 h-12 rounded-lg shadow-lg shadow-blue-gray-500/25">
                <div>
                  <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 mb-1 font-semibold">
                    Alexander</p>
                  <p class="block antialiased font-sans text-xs font-normal text-blue-gray-400">Awesome work, can you...
                  </p>
                </div>
              </div><button
                class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg text-blue-500 hover:bg-blue-500/10 active:bg-blue-500/30"
                type="button">reply</button>
            </div>
            <div class="flex items-center justify-between gap-4">
              <div class="flex items-center gap-4"><img src="/material-tailwind-dashboard-react/img/team-3.jpeg"
                  alt="Ivanna"
                  class="inline-block relative object-cover object-center w-12 h-12 rounded-lg shadow-lg shadow-blue-gray-500/25">
                <div>
                  <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 mb-1 font-semibold">
                    Ivanna</p>
                  <p class="block antialiased font-sans text-xs font-normal text-blue-gray-400">About files I can...</p>
                </div>
              </div><button
                class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg text-blue-500 hover:bg-blue-500/10 active:bg-blue-500/30"
                type="button">reply</button>
            </div>
            <div class="flex items-center justify-between gap-4">
              <div class="flex items-center gap-4"><img src="/material-tailwind-dashboard-react/img/team-4.jpeg"
                  alt="Peterson"
                  class="inline-block relative object-cover object-center w-12 h-12 rounded-lg shadow-lg shadow-blue-gray-500/25">
                <div>
                  <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 mb-1 font-semibold">
                    Peterson</p>
                  <p class="block antialiased font-sans text-xs font-normal text-blue-gray-400">Have a great
                    afternoon...</p>
                </div>
              </div><button
                class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg text-blue-500 hover:bg-blue-500/10 active:bg-blue-500/30"
                type="button">reply</button>
            </div>
            <div class="flex items-center justify-between gap-4">
              <div class="flex items-center gap-4"><img src="/material-tailwind-dashboard-react/img/bruce-mars.jpeg"
                  alt="Bruce Mars"
                  class="inline-block relative object-cover object-center w-12 h-12 rounded-lg shadow-lg shadow-blue-gray-500/25">
                <div>
                  <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 mb-1 font-semibold">
                    Bruce Mars</p>
                  <p class="block antialiased font-sans text-xs font-normal text-blue-gray-400">Hi! I need more
                    information...</p>
                </div>
              </div><button
                class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg text-blue-500 hover:bg-blue-500/10 active:bg-blue-500/30"
                type="button">reply</button>
            </div>
          </ul>
        </div>-->
      </div>
    <!--
      <div class="px-4 pb-4">
        <h6
          class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-2">
          Projects</h6>
        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">Architects design
          houses</p>
        <div class="mt-6 grid grid-cols-1 gap-12 md:grid-cols-2 xl:grid-cols-4">
          <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
            <div
              class="relative bg-clip-border rounded-xl overflow-hidden bg-gray-500 text-white shadow-gray-500/40 shadow-lg mx-0 mt-0 mb-4 h-64 xl:h-40">
              <img src="/material-tailwind-dashboard-react/img/home-decor-1.jpeg" alt="Modern"
                class="h-full w-full object-cover"></div>
            <div class="p-6 py-0 px-1">
              <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">Project #1
              </p>
              <h5
                class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mt-1 mb-2">
                Modern</h5>
              <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">As Uber works
                through a huge amount of internal management turmoil.</p>
            </div>
            <div class="p-6 mt-6 flex items-center justify-between py-0 px-1"><a href="#/dashboard/profile"><button
                  class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-blue-500 text-blue-500 hover:opacity-75 focus:ring focus:ring-blue-200 active:opacity-[0.85]"
                  type="button">view project</button></a>
              <div><img src="/material-tailwind-dashboard-react/img/team-1.jpeg" alt="Romina Hadid"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                  src="/material-tailwind-dashboard-react/img/team-2.jpeg" alt="Ryan Tompson"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                  src="/material-tailwind-dashboard-react/img/team-3.jpeg" alt="Jessica Doe"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                  src="/material-tailwind-dashboard-react/img/team-4.jpeg" alt="Alexander Smith"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
              </div>
            </div>
          </div>
          <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
            <div
              class="relative bg-clip-border rounded-xl overflow-hidden bg-gray-500 text-white shadow-gray-500/40 shadow-lg mx-0 mt-0 mb-4 h-64 xl:h-40">
              <img src="/material-tailwind-dashboard-react/img/home-decor-2.jpeg" alt="Scandinavian"
                class="h-full w-full object-cover"></div>
            <div class="p-6 py-0 px-1">
              <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">Project #2
              </p>
              <h5
                class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mt-1 mb-2">
                Scandinavian</h5>
              <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">Music is
                something that every person has his or her own specific opinion about.</p>
            </div>
            <div class="p-6 mt-6 flex items-center justify-between py-0 px-1"><a href="#/dashboard/profile"><button
                  class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-blue-500 text-blue-500 hover:opacity-75 focus:ring focus:ring-blue-200 active:opacity-[0.85]"
                  type="button">view project</button></a>
              <div><img src="/material-tailwind-dashboard-react/img/team-4.jpeg" alt="Alexander Smith"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                  src="/material-tailwind-dashboard-react/img/team-3.jpeg" alt="Jessica Doe"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                  src="/material-tailwind-dashboard-react/img/team-2.jpeg" alt="Ryan Tompson"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                  src="/material-tailwind-dashboard-react/img/team-1.jpeg" alt="Romina Hadid"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
              </div>
            </div>
          </div>
          <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
            <div
              class="relative bg-clip-border rounded-xl overflow-hidden bg-gray-500 text-white shadow-gray-500/40 shadow-lg mx-0 mt-0 mb-4 h-64 xl:h-40">
              <img src="/material-tailwind-dashboard-react/img/home-decor-3.jpeg" alt="Minimalist"
                class="h-full w-full object-cover"></div>
            <div class="p-6 py-0 px-1">
              <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">Project #3
              </p>
              <h5
                class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mt-1 mb-2">
                Minimalist</h5>
              <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">Different
                people have different taste, and various types of music.</p>
            </div>
            <div class="p-6 mt-6 flex items-center justify-between py-0 px-1"><a href="#/dashboard/profile"><button
                  class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-blue-500 text-blue-500 hover:opacity-75 focus:ring focus:ring-blue-200 active:opacity-[0.85]"
                  type="button">view project</button></a>
              <div><img src="/material-tailwind-dashboard-react/img/team-1.jpeg" alt="Romina Hadid"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                  src="/material-tailwind-dashboard-react/img/team-2.jpeg" alt="Ryan Tompson"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                  src="/material-tailwind-dashboard-react/img/team-3.jpeg" alt="Jessica Doe"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                  src="/material-tailwind-dashboard-react/img/team-4.jpeg" alt="Alexander Smith"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
              </div>
            </div>
          </div>
          <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
            <div
              class="relative bg-clip-border rounded-xl overflow-hidden bg-gray-500 text-white shadow-gray-500/40 shadow-lg mx-0 mt-0 mb-4 h-64 xl:h-40">
              <img src="/material-tailwind-dashboard-react/img/home-decor-4.jpeg" alt="Gothic"
                class="h-full w-full object-cover"></div>
            <div class="p-6 py-0 px-1">
              <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">Project #4
              </p>
              <h5
                class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mt-1 mb-2">
                Gothic</h5>
              <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">Why would
                anyone pick blue over pink? Pink is obviously a better color.</p>
            </div>
            <div class="p-6 mt-6 flex items-center justify-between py-0 px-1"><a href="#/dashboard/profile"><button
                  class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-blue-500 text-blue-500 hover:opacity-75 focus:ring focus:ring-blue-200 active:opacity-[0.85]"
                  type="button">view project</button></a>
              <div><img src="/material-tailwind-dashboard-react/img/team-4.jpeg" alt="Alexander Smith"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                  src="/material-tailwind-dashboard-react/img/team-3.jpeg" alt="Jessica Doe"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                  src="/material-tailwind-dashboard-react/img/team-2.jpeg" alt="Ryan Tompson"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                  src="/material-tailwind-dashboard-react/img/team-1.jpeg" alt="Romina Hadid"
                  class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  -->
  </div>
  <div class="text-blue-gray-600">
    <footer class="py-2">
      <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
        <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">© 2023, made with <svg
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
            class="-mt-0.5 inline-block h-3.5 w-3.5">
            <path
              d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
            </path>
          </svg> by <a href="https://www.creative-tim.com" target="_blank"
            class="transition-colors hover:text-blue-500">Creative Tim</a> for a better web.</p>
        <ul class="flex items-center gap-4">
          <li><a href="https://www.creative-tim.com" target="_blank"
              class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Creative
              Tim</a></li>
          <li><a href="https://www.creative-tim.com/presentation" target="_blank"
              class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">About
              Us</a></li>
          <li><a href="https://www.creative-tim.com/blog" target="_blank"
              class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Blog</a>
          </li>
          <li><a href="https://www.creative-tim.com/license" target="_blank"
              class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">License</a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
</div>
<!-- /.content -->
</div>



<script src="https://cdn.tailwindcss.com"></script>







@endsection