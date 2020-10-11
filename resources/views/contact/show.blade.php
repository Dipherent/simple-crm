@extends('layouts.app')


@section('content')

<div class="my-5 flex justify-start">
    <a href="/contacts" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-gray-300 hover:bg-gray-500 focus:outline-none focus:border-gray-300 focus:shadow-outline-black active:bg-gray-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
        Back to all contacts
      </a>
    </div>
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Contact Information
      </h3>
      <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
        Personal details 
      </p>
    </div>
    <div class="px-4 py-5 sm:p-0">
      <dl>
        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Full name
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{$contact->name}}
          </dd>
        </div>
        <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Company
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{$contact->company->name}}
          </dd>
        </div>
        <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Email address
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{$contact->email}}
          </dd>
        </div>
        <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Phone
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{$contact->phone}}
          </dd>
        </div>
        <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Notes
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{$contact->notes}}          </dd>
        </div>
        
      </dl>
    </div>
  </div>

  <div class="my-5 flex justify-start">
    <a href="/contacts/{{$contact->id}}/edit" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-red-300 hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
        Edit
      </a>

    <form class="ml-6" action="/contacts/{{$contact->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-red-300 hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Delete
        </button>
    </form>
    </div>
  

@endsection