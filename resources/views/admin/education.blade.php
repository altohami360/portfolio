<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Education') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Degree
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        School
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Collage
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Department
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Start At
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        End At
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        --
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($education as $item)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">
                                            {{ $item->degree }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->school }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->collage }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->department }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->start_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->end_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <form action="{{ route('education.destroy', $item) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('education.store') }}" method="POST">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="degree"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                                <input type="text" id="degree" name="degree"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('degree')
                                    <small class="text-red-500">This feild is require</small>
                                @enderror
                            </div>
                            <div>
                                <label for="school"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School</label>
                                <input type="text" id="school" name="school"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('school')
                                    <small class="text-red-500">This feild is require</small>
                                @enderror
                            </div>
                            <div>
                                <label for="collage"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Collage</label>
                                <input type="text" id="collage" name="collage"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('collage')
                                    <small class="text-red-500">This feild is require</small>
                                @enderror
                            </div>
                            <div>
                                <label for="department"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                <input type="text" id="department" name="department"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('department')
                                    <small class="text-red-500">This feild is require</small>
                                @enderror
                            </div>
                            <div>
                                <label for=""
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                    At</label>
                                <input type="text" id="department" name="start_at"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('start_at')
                                    <small class="text-red-500">This feild is require</small>
                                @enderror
                            </div>
                            <div>
                                <label for=""
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End At</label>
                                <input type="text" id="department" name="end_at"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('end_at')
                                    <small class="text-red-500">This feild is require</small>
                                @enderror
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
