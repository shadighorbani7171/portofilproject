<x-app-layout>
    <x-slot name="header">
       <div class="flex justify-between">
       <h2 class="font-semibold text-xl self-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('skills') }}
        </h2>
          <a href="{{route('skills.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">create</a>
       </div>
    </x-slot>
    

<div class="my-20 max-w-7xl m-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-black uppercase dark:text-gray-400">
            <tr>
              
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                      #
                </th> 
                </th>
               
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    tools
                </th>
                <th scope="col" class="px-6 py-3">
                    created_at
                </th>
                <th scope="col" class="px-6 py-3">
                    actions
                </th>
            </tr>
        </thead>
        <tbody>
                  @foreach ($skills as $skill)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap bg-gray-50 dark:text-black dark:bg-gray-800">
                          
                </th>
                <td class="px-6 py-4  dark:bg-gray-800">
                    {{$skill->name}}  
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                   {{$skill->tools}}
                </td>
                <td class="px-6 py-4">
                     {{$skill->created_at}}
                </td>
                <td scope="col" class="px-6 py-3">
                                    <a href="{{route('skills.edit',['id'=>$skill->id])}}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Edit</a>
                                    <a href="{{route('skills.destroy',['id'=>$skill->id])}}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Delete</a>
                                </td>
                
            </tr>
            @endforeach
        
           
        </tbody>
    </table>
</div>

    </x-app-layout>