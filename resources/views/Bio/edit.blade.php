<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Biography') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="post" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        <div>
            <x-input-label for="role" :value="__('Role')" />
            <x-text-input id="role" name="role" type="text" class="mt-1 block w-full" :value="old('role', $user->role)"  autofocus autocomplete="role" />
            <x-input-error class="mt-2" :messages="$errors->get('role')" />
        </div>
          <div>
           <x-input-label for="linkedin" :value="__('linkedin')" />
           <x-text-input id="linkedin" name="linkedin" type="text" class="mt-1 block w-full" :value="old('linkedin', $user->linkedin)"  autofocus autocomplete="linkedin" />
        
           <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
        </div>
          <div>
          <x-input-label for="instagram" :value="__('Instagram')" />
           <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full" :value="old('instagram', $user->instagram)"  autofocus autocomplete="instagram" />
        
           <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
        </div>
        <div>
          <x-input-label for="portofillink" :value="__('portofillink')" />
           <x-text-input id="portofillink" name="portofillink" type="text" class="mt-1 block w-full" :value="old('portofillink', $user->portofillink)"  autofocus autocomplete="portofillink" />
        
           <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
        </div>
            <div>
            <x-input-label for="introduction" :value="__('introduction')" />
            <textarea name="introduction" id="introduction" class= 'w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm' cols="30" rows="10">
               {{old('introduction',$user->introduction)}}        
            </textarea>
            <x-input-error class="mt-2" :messages="$errors->get('introduction')" />
          </div>
          <div>
            <x-input-label for="avatar" :value="__('Image')" />
            <input type='file' name="avatar" id="avatar" class= 'w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm' cols="30" rows="10"/>          
            
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
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
