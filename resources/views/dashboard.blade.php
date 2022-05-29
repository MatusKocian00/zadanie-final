<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CarSuspensionModel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
  </head>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 text-center">
          @if (session('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>


          <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
            @else
            @endif
            <a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
              <div class="w-full md:w-100 text-xl rounded-t">
                <p class="text-gray-800 text-xl font-serif  px-6 mb-5">
                  {{__('messages.dashboard')}}
                </p>
                <!-- <img src="https://i.pinimg.com/originals/e7/43/8d/e7438db2aaa57f2842e4807999963f75.gif" class="h-25 w-25 shadow"> -->
                <div class="w-full md:w-3/3 flex flex-col flex-grow justify-center content-center flex-shrink">
                  <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <div class="w-full font-bold text-xl text-center text-gray-900 px-6">{{__('messages.dashboard_app')}}
                      <div class="flex flex-wrap justify-between pt-12 -mx-6">

                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                              <img src="https://i.pinimg.com/originals/e7/43/8d/e7438db2aaa57f2842e4807999963f75.gif" class="h-64 w-full rounded-t pb-6">
                              <div class="w-full font-bold text-xl text-gray-900 px-6">{{__('messages.dashboard_app_info')}}</div>
                              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                {{__('messages.dashboard_app_info_')}}
                              </p>
                            </a>
                          </div>
                        </div>
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                              <img src="https://cdn.dribbble.com/users/374101/screenshots/5885738/calculator.gif" class="h-64 w-full rounded-t pb-6">
                              <div class="w-full font-bold text-xl text-gray-900 px-6"> {{__('messages.dashboard_vypocet')}}</div>
                              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                {{__('messages.dashboard_vypocet_')}}
                              </p>
                            </a>
                          </div>
                        </div>
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                              <img src="https://i.gifer.com/5F5d.gif" class="h-64 w-full rounded-t pb-6">
                              <div class="w-full font-bold text-xl text-gray-900 px-6"> {{__('messages.dashboard_token')}}</div>
                              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                {{__('messages.dashboard_token_')}}
                              </p>
                            </a>
                          </div>
                        </div>
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                              <img src="https://cdn.dribbble.com/users/398490/screenshots/1716348/users.gif" class="h-64 w-full rounded-t pb-6">
                              <div class="w-full font-bold text-xl text-gray-900 px-6"> {{__('messages.dashboard_uzivatel')}}</div>
                              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                {{__('messages.dashboard_uzivatel_')}}
                              </p>
                            </a>
                          </div>
                        </div>
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                              <img src="https://i.pinimg.com/originals/6a/cf/67/6acf67c5c9341c3c467179668c200895.gif" class="h-64 w-full rounded-t pb-6">
                              <div class="w-full font-bold text-xl text-gray-900 px-6"> {{__('messages.dashboard_api')}}</div>
                              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                {{__('messages.dashboard_api_')}}
                              </p>
                            </a>
                          </div>
                        </div>
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                              <img src="https://logimp.files.wordpress.com/2019/01/viral-parmar1-1.gif" class="h-64 w-full rounded-t pb-6">
                              <div class="w-full font-bold text-xl text-gray-900 px-6"> {{__('messages.dashboard_team')}}</div>
                              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                {{__('messages.dashboard_team_')}}
                              </p>
                            </a>
                          </div>
                        </div>
                        <p class="text-gray-800 font-serif text-m px-6 mb-5">
                          {{__('messages.dashboard_table_info')}}
                        </p>
                      </div>
                      <div>
                        <table class="shadow-lg  justify-center bg-white border-separate">
                          <tr>
                            <th class="bg-blue-200 border text-center px-8 py-4">{{__('messages.dashboard_table_name')}}</th>
                            <th class="bg-blue-200  border text-center px-8 py-4">{{__('messages.dashboard_table_task')}}</th>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Samuel Hančák</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r1')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Andrej Horník<BR>Matúš Kocián</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r2')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Samuel Hančák</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r3')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Samuel Hančák<BR>Matúš Kocián</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r4')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Matúš Kocián</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r5')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Matúš Kocián<BR>Dominika Bemberáková</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r6')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Matúš Kocián</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r7')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_imp')}} </td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r8')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Dominika Bemberáková</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r9')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Dominika Bemberáková<BR>Matúš Kocián<BR>Samuel Hančák</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r10')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-8 py-4">Dominika Bemberáková,Matúš Kocián<BR>Samuel Hančák<BR>Andrej Horník</td>
                            <td class="border px-8 py-4">{{__('messages.dashboard_table_r11')}}</td>
                          </tr>
                        </table>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>