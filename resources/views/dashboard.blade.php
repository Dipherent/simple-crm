@extends('layouts.app')

@section('header', 'Dashboard')


@section('content')

<!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
<div>
    
    <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
          <div class="flex items-center">
            <div class="flex-shrink-0 bg-red-500 rounded-md p-3">
              <!-- Heroicon name: users -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                
                <dd class="flex items-baseline">
                  <div class="text-2xl leading-8 font-semibold text-gray-900">
                   <a href="/contacts/create" class="text-red-500 hover:text-red-800"> Add New Contact</a>
                  </div>
                  
                </dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-4 sm:px-6">
          <div class="text-sm leading-5">
            <a href="/contacts/" class="font-medium text-red-600 hover:text-red-500 transition ease-in-out duration-150">
              View all contacts
            </a>
          </div>
        </div>
      </div>
      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
          <div class="flex items-center">
            <div class="flex-shrink-0 bg-red-500 rounded-md p-3">
              <!-- Heroicon name: mail-open -->
              <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                
                <dd class="flex items-baseline">
                  <div class="text-2xl leading-8 font-semibold text-gray-900">
                    <a href="/companies/create" class="text-red-500 hover:text-red-800"> Add New Company</a>
                </div>
                  
                </dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-4 sm:px-6">
          <div class="text-sm leading-5">
            <a href="/companies/" class="font-medium text-red-600 hover:text-red-500 transition ease-in-out duration-150">
              View all companies
            </a>
          </div>
        </div>
      </div>
      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
          <div class="flex items-center">
            <div class="flex-shrink-0 bg-red-500 rounded-md p-3">
              <!-- Heroicon name: cursor-click -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
              </svg>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                
                <dd class="flex items-baseline">
                  <div class="text-2xl leading-8 font-semibold text-gray-900">
                    <a href="/tasks/create" class="text-red-500 hover:text-red-800"> Add New Task</a>
                  </div>
                  
                </dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-4 sm:px-6">
          <div class="text-sm leading-5">
            <a href="/tasks/" class="font-medium text-red-600 hover:text-red-500 transition ease-in-out duration-150">
              View all tasks
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection
