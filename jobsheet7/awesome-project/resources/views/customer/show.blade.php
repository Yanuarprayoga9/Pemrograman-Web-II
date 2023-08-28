@extends('layout.main')
@section('content')
    <h1 class="text-center">main page</h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        NO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        officer
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td class="px-6 py-4">
                            {{ $customer->customer_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $customer->Officer->officer_name }}
                        </td>
                        
                       
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
