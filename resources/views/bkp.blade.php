<div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{$resource->id}}" name="resource_id[]"
        id="flexCheckIndeterminate{{$resource->id}}"
        @if(in_array($resource->id,$role->resources->pluck('id')->toArray()))) checked @endif >
    <label class="form-check-label" for="flexCheckIndeterminate{{$resource->id}}">
        {{$resource->name}}
    </label>
</div>




<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
