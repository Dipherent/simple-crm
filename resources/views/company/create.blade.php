@extends('layouts.app')

@section('content')

<!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
<div class="relative bg-white">
    <div class="absolute inset-0">
      <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
    </div>
    <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
      <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
        <div class="max-w-lg mx-auto">
          <h2 class="text-2xl leading-8 font-extrabold tracking-normal text-gray-900 sm:text-3xl sm:leading-9">
            Add a new <span class="border-b-8 border-red-500">company</span> 
          </h2>
        
        </div>
      </div>
      <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
        <div class="max-w-lg mx-auto lg:max-w-none">
          <form action="/companies" method="POST" class="grid grid-cols-1 gap-y-6">
            @csrf
            <div>
              <label for="name" class="sr-only">Company name</label>
              <div class="relative rounded-md shadow-sm">
              <input value="{{ old('name') }}" type="text" name="name" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Company name">
                    @error('name') 
                        <p class="rounded-md bg-red-100 p-2 mt-2 text-sm leading-5 text-red-700"> {{$message}}</p>
                    @enderror
            </div>
            </div>
            <div>
              <label for="address" class="sr-only">Address</label>
              <div class="relative rounded-md shadow-sm">
                <input value="{{ old('address') }}" name="address" type="text" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Address">
                @error('address') 
                <p class="rounded-md bg-red-100 p-2 mt-2 text-sm leading-5 text-red-700"> {{$message}}</p>
            @enderror
              </div>
            </div>
            
            <div>
              <label for="notes" class="sr-only">Notes</label>
              <div class="relative rounded-md shadow-sm">
                <textarea name="notes" type="text" rows="4" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Notes">{{ old('notes') }}</textarea>
              </div>
              {{-- <div class="my-4">
                <input type="checkbox" name="active" value="1" checked='true' class="form-checkbox">
                <span class="ml-2">Status <span class="text-sm">(Active/Inactive)</span></span>
                @error('active') 
                <p class="rounded-md bg-red-100 p-2 mt-2 text-sm leading-5 text-red-700"> New contacts must be active- You can deactivate later</p>
            @enderror
              </div> --}}



            <div class="my-6">
              <span class="inline-flex rounded-md shadow-sm">
                <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition duration-150 ease-in-out">
                  Add New Company
                </button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
    
@endsection