<!DOCTYPE html>
<html>

<head>
    <title>Hi</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
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
                                <tr class="bg-white border-b text-centers">
                                    <td class="px-6 py-4">
                                        https://site95.webte.fei.stuba.sk/zadanie-final/api/compute
                                    </td>
                                    <td class="px-6 py-4">
                                        POST
                                    </td>
                                    <td class="px-6 py-4">
                                        Bearer &lt;token&gt;
                                    </td>
                                    <td class="px-6 py-4">
                                        {"body": "calculation"}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        application/json
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3 mb-3">
                        <h3 class="font-semibold text-xl text-gray-800 leading-tight text-center">{{__('messages.example')}}</h3>
                    </div>
                    <div class="flex justify-evenly mt-3 mb-3 border-3">
                        <div class="p-2">
                            <p class="font-bold text-xl text-gray-800 text-center">Computation POST</p>
                            <hr class="m-1">
                            <span class=" text-red-500">POST</span> /zadanie-final/api/compute HTTP/1.1<br>
                            Host: site95.webte.fei.stuba.sk<br>
                            Authorization: Bearer token<br>
                            Accept: application/json<br>
                            Content-Type: application/json<br>
                            Content-Length: 22<br>
                            {"body": "1+1"}
                        </div>
                        <div class="p-2"">
                        <p class=" font-bold text-xl text-gray-800 text-center">Simulation GET</p>
                            <hr class="m-1">
                            <span class=" text-red-500">GET</span> /zadanie-final/api/car?r=1 HTTP/1.1<br>
                            Host: site95.webte.fei.stuba.sk<br>
                            Accept: application/json<br>
                            Authorization: Bearer token<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>