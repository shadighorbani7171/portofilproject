<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Experience') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
     <form method="post"  class="mt-6 space-y-6">
        @csrf
       
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"  autofocus autocomplete="title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
        <div>
            <x-input-label for="company" :value="__('Company')" />
            <x-text-input id="company" name="company" type="text" class="mt-1 block w-full"  autofocus autocomplete="company" />
            <x-input-error class="mt-2" :messages="$errors->get('company')" />
        </div>
        <div>
            <x-input-label for="title" :value="__('Year')" />
            <x-text-input id="year" name="year" type="text" class="mt-1 block w-full"  autofocus autocomplete="year" />
            <x-input-error class="mt-2" :messages="$errors->get('year')" />
        </div>
        
            
             
             <input id="x" :value="__('content')" type="hidden" name="content">
                  <trix-editor input="x"></trix-editor>

            <x-input-error class="mt-2" :messages="$errors->get('content')" />
       
     
       <div>
            <x-input-label for="summary" :value="__('summary')" />
            <textarea name="summary" id="summary" class= 'w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm' >
                      
            </textarea>
            <x-input-error class="mt-2" :messages="$errors->get('summary')" />
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
