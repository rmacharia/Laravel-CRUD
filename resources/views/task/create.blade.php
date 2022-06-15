<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Task
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    

                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="case_id" class="block font-medium text-sm text-gray-700">Case_ID</label>
                            <input type="text" name="case_id" id="case_id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    />
                            @error('case_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="client_name" class="block font-medium text-sm text-gray-700">Client Name</label>
                            <input type="text" name="client_name" id="client_name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    />
                            @error('client_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="case_type" class="block font-medium text-sm text-gray-700">Case Type</label>
                            <input type="text" name="case_type" id="case_type" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  />
                            @error('case_type')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                            <input type="text" name="status" id="status" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   />
                            @error('status')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="priority" class="block font-medium text-sm text-gray-700">Priority</label>
                            <input type="text" name="priority" id="priority" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    >
                            @error('priority')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="hearing_date" class="block font-medium text-sm text-gray-700">Hearing Date</label>
                            <input type="text" name="hearing_date" id="hearing_date" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  />
                            @error('hearing_date')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <textarea  type="text" name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   ></textarea>
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex px-4 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>