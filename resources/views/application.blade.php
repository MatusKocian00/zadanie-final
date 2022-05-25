<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Application') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="post" action={{url('application')}}>
                        @csrf
                        <div class="flex justify-center text-center">
                            <div class="mb-3 xl:w-96">
                                <label for="r" class="form-label inline-block mb-2 text-gray-700">{{ __('messages.insert_value_r') }}</label>
                                <input type="number" class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="r" name="r" placeholder="0"/>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <x-button>
                            {{ __('messages.compute') }}
                            </x-button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>