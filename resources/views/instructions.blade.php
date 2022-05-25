<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.instructions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-center text-gray-500  table-auto">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Path
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Method
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Authorization
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Body
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ACCEPT
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b text-centers">
                                    <td class="px-6 py-4">
                                        https://site95.webte.fei.stuba.sk/zadanie-final/api/car?r=&lt;value&gt;
                                    </td>
                                    <td class="px-6 py-4">
                                        GET
                                    </td>
                                    <td class="px-6 py-4">
                                        Bearer &lt;token&gt;
                                    </td>
                                    <td class="px-6 py-4">
                                        Empty
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        application/json
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    curl --location --request GET 'https://site95.webte.fei.stuba.sk/zadanie-final/api/car?r=1' \
                    --header 'Accept: application/json' \
                    --header 'Authorization: Bearer &lt;token&gt;
                </div>
            </div>
        </div>
    </div>
</x-app-layout>