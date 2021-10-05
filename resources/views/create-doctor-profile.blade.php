@extends('layouts/main')

@section('body')
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
          @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="charges">
              Charges (PKR)
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="charges" type="number" placeholder="500" name="charges">
          </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="specialization">
                    Specialization
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="specialization" type="text" placeholder="General Physician" name="specialization">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="hosp">
                    Hospital
                </label>
                <select name="hospital" id="hosp" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value=""></option>
                    @foreach ($hospitals as $hospital)
                        <option value="{{ $hospital->id }}">{{ $hospital->branch }}</option>
                    @endforeach
                </select>
{{--                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hosp" type="text" placeholder="General Physician" name="hosp">--}}
            </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Create
            </button>
          </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2021 Humanity Zone. All rights reserved by <a href="https://github.com/TheMahjabeen" target="_blank">Mobeen Shehzadi</a>.
        </p>
    </div>
@endsection


@section('page_title')
    Login
@endsection
