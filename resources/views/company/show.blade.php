@extends('layouts.app')


@section('content')

<div class="my-5 flex justify-start">
    <a href="/companies" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-gray-300 hover:bg-gray-500 focus:outline-none focus:border-gray-300 focus:shadow-outline-black active:bg-gray-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
        Back to all companies
      </a>
    </div>
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Company Details
      </h3>
      
    </div>
    <div class="px-4 py-5 sm:p-0">
      <dl>
        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Company name
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{$company->name}}
          </dd>
        </div>
        <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Company Address
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{$company->address}}
          </dd>
        </div>
        
    
        <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
          <dt class="text-sm leading-5 font-medium text-gray-500">
            Notes
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{$company->notes}}          </dd>
        </div>
        
        <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Conatcats in this company
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{-- @forelse ($companies as $company) --}}
                  <ul class="border border-gray-200 rounded-md">
                    @forelse ($company->contacts as $contact)
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                            <div class="w-0 flex-1 flex items-center">
                
                                <span class="ml-2 flex-1 w-0 truncate">
                                    {{$contact->name}}
                                </span>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <a href="/contacts/{{$contact->id}}" class="font-medium text-red-600 hover:text-red-500 transition duration-150 ease-in-out">
                                Contact Details
                                </a>
                            </div>
                  @empty 
                  <div class="flex items-center justify-between mx-4">
                    <p class="py-6">Not Contacts for this company yet</p>
                    <div class="">
                      <a href="/contacts/create" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-red-500 hover:bg-red-300 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                          Add Contact
                        </a>
                      </div>
                  </div>
                </li>
                @endforelse
              </ul>
              {{-- @empty
                  <p>You don't have a contact in this company yet</p>
              @endforelse --}}
                
            </dd>
          </div>
      </dl>
    </div>
  </div>

  <div class="my-5 flex justify-start">
    <a href="/companies/{{$company->id}}/edit" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-red-300 hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
        Edit
      </a>

    <form class="ml-6" action="/companies/{{$company->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-red-300 hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Delete
        </button>
    </form>
    </div>
  

@endsection