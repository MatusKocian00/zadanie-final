<x-app-layout>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.tokens') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center">
                    <form class="flex flex-col justify-center" method="POST" action={{url('token')}}>
                        @csrf
                        <div class="form-group text-center">
                            <label class="form-control">{{ __('messages.create_token_message') }}</label>
                        </div>
                        <div class="flex justify-center mt-3">
                        <x-button class="w-min">
                        {{ __('messages.generate_token') }}
                        </x-button>
                        </div>
                    </form>

                    @if (session('token'))
                    <div class="mt-3 text-center">
                        <p>{{ __('messages.new_token_message') }}{{ session('token') }}</p>
                        <p class="font-semibold">{{ __('messages.please_save_it') }}</p>
                        @endif
                        </div>
                        </div>
                    </div>
                </div>
</x-app-layout>