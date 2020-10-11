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
             <span class="border-b-8 border-red-500">Edit</span>  Contact
          </h2>
        
        </div>
      </div>
      <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
        <div class="max-w-lg mx-auto lg:max-w-none">
          <form action="/contacts/{{$contact->id}}" method="POST" class="grid grid-cols-1 gap-y-6">
            @csrf
            @method('PATCH')
            <div>
              <label for="name" class="sr-only">Full name</label>
              <div class="relative rounded-md shadow-sm">
              <input value="{{ $contact->name }}" type="text" name="name" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Full name">
                    @error('name') 
                        <p class="rounded-md bg-red-100 p-2 mt-2 text-sm leading-5 text-red-700"> {{$message}}</p>
                    @enderror
            </div>
            </div>
            <div>
              <label for="email" class="sr-only">Email</label>
              <div class="relative rounded-md shadow-sm">
                <input value="{{ $contact->email  }}" name="email" type="email" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Email">
                @error('email') 
                <p class="rounded-md bg-red-100 p-2 mt-2 text-sm leading-5 text-red-700"> {{$message}}</p>
            @enderror
              </div>
            </div>
            <div>
              <label for="phone" class="sr-only">Phone</label>
              <div class="relative rounded-md shadow-sm">
                <input value="{{ $contact->phone  }}" name="phone" type="text" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Phone">
                @error('phone') 
                <p class="rounded-md bg-red-100 p-2 mt-2 text-sm leading-5 text-red-700"> {{$message}}</p>
                @enderror
              </div>

              <div>
                <label for="company_id" class="sr-only">Company</label>
                <select id="company_id" name="company_id" class="mt-6 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                 @foreach ($companies as $company)
                <option value="{{ $company->id }}" {{$company->id == $contact->company_id ? 'selected' : ''}}>{{$company->name}}</option>
                 @endforeach
                 
                </select>
              </div>
            </div>
            <div>
              <label for="notes" class="sr-only">Message</label>
              <div class="relative rounded-md shadow-sm">
                <textarea name="notes" type="text" rows="4" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Notes">{{ $contact->notes }}</textarea>
              </div>
            </div>

                {{-- <div class="my-4">
                <input type="checkbox" name="active"  checked="{{ @if($contact->active == 1 ? 'checked' : '') @endif}}" class="form-checkbox">
                    <span class="ml-2">Status <span class="text-sm">(Active/Inactive)</span></span>
                    @error('active') 
                    <p class="rounded-md bg-red-100 p-2 mt-2 text-sm leading-5 text-red-700"> New contacts must be active- You can deactivate later</p>
                    @enderror   
                </div> --}}
            <div class="mt-6">
              <span class="inline-flex rounded-md shadow-sm">
                <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition duration-150 ease-in-out">
                  Save Changes
                </button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
    
@endsection