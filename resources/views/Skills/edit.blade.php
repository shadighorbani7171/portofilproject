<x-app-layout>
    <x-slot name="header">
      <div class="flex justify-between self-center"> 
         <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('skills update') }}
        </h2>
       
       </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
     <form method="post"  class="mt-6 space-y-6">
        @csrf
       
        <div>
            <x-input-label for="name" :value="__('name')" />
            
            <x-text-input id="name" name="name" value="{{$skills->name}}" type="text" class="mt-1 block w-full"  autofocus autocomplete="name" />
            
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="tools" :value="__('tools')" />
            
            <x-text-input id="tools" name="tools" value="{{$skills->tools}}" type="text" class="mt-1 block w-full"  autofocus autocomplete="tools" />
            
            <x-input-error class="mt-2" :messages="$errors->get('tools')" />
        </div>
        
          <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>

        </form>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>