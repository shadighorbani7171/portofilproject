<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Education create') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
     <form method="post"  class="mt-6 space-y-6">
        @csrf
       
        <div>
            <x-input-label for="institutions" :value="__('institutions')" />
            <x-text-input id="institutions" name="institutions" type="text" class="mt-1 block w-full" :value="old('institutions')"  autofocus autocomplete="institutions" />
            <x-input-error class="mt-2" :messages="$errors->get('institutions')" />
        </div>
        <div>
            <x-input-label for="section" :value="__('section')" />
            <x-text-input id="section" name="section" type="text" class="mt-1 block w-full" :value="old('section')"  autofocus autocomplete="section" />
            <x-input-error class="mt-2" :messages="$errors->get('section')" />
        </div>
        <div>
            <x-input-label for="year" :value="__('Year')" />
            <x-text-input id="year" name="year" type="text" class="mt-1 block w-full"  autofocus autocomplete="year" />
            <x-input-error class="mt-2" :messages="$errors->get('year')" />
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