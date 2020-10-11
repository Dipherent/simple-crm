@extends('layouts.app')

@section('header', 'Companies')


@section('content')


@if (count($companies) > 0)


<div class="my-5 flex justify-end">
<a href="/companies/create" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-red-500 hover:bg-red-300 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
    Add Company
  </a>
</div>

<!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                 Company Name
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Address
                </th>
                {{-- <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Status
                </th> --}}
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Notes
                </th>
                <th class="px-6 py-3 bg-gray-50"></th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($companies as $company)
                <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm leading-5 font-medium text-red-500 hover:text-red-300">
                      <a href="/companies/{{$company->id}}">  {{ $company->name }}</a>
                      
                      </div>
                      
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                  <div class="text-sm leading-5 text-gray-900">{{ $company->address }}</div>
                </td>
                {{-- <td class="px-6 py-4 whitespace-no-wrap">
                  @if ($contact->active=== 1)
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Active
                      </span>
                  @else
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                    Inactive
                  </span>
                  @endif
                  
                </td> --}}
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                    {{ $company->notes }}
                </td>
                <td class=" flex px-6 py-4 whitespace-no-wrap text-left text-sm leading-5 font-medium">
                  <div>
                       <a href="/companies/{{$company->id}}/edit" class="text-red-600 hover:text-red-900">Edit</a>
                  </div>

                  <div>
                    <form class="ml-4"  action="/companies/{{$company->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900">
                        Delete
                    </button>
                </form>   
                  </div>
                            
                </td>

               
              </tr>
             
              
              
             @endforeach
              <!-- More rows... -->
            </tbody>
          </table>

          @else 
          <h3 class="text-2xl font-semibold text-gray-700">You don't have any Companies yet!</h3>
          <div class="my-5 flex justify-start">
            <a href="/companies/create" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-red-500 hover:bg-red-300 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                Add Company
              </a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>

@endsection
