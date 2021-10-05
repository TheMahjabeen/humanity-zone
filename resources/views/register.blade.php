@extends('layouts/main')

@section('body')
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full" method="POST">
          @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
              Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Jone Doe" name="name">
          </div>
          <div class="flex items-center justify-between">
            <div class="mb-4 mx-1">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                Phone
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="number" placeholder="923458976554" name="phone">
            </div>

            <div class="mb-4 mx-1">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Email
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="email" placeholder="abcd@gmail.com" name="email">
            </div>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
              Address
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" placeholder="DC." name="address"> </textarea>
          </div>
          <div class="flex items-center justify-between">
            <div class="mb-6 mx-1">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password">
            </div>
            <div class="mb-6 mx-1">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="c_password">
                Confirm Password
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="c_password" type="password" placeholder="******************" name="c_password">
            </div>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Register
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('login') }}">
              Login
            </a>
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
