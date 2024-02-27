<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vector') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="post" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        <div>
            <x-input-label for="avatar" :value="__('Vector')" />
            <input type='file' name="vector" id="vector" class= 'w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm' cols="30" rows="10"/>          
            
            <x-input-error class="mt-2" :messages="$errors->get('vector')" />
          </div>

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
