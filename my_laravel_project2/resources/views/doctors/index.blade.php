
@extends('layouts.app')

@section('content')

    <div class="container mx-auto px-4">
        <h1 class="text-center text-2xl font-bold my-8">Our Doctors</h1>
        <div class="flex flex-wrap justify-center">
            @foreach ($doctors as $doctor)
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 m-6">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/public/imgs_medprjct/' . $doctor['image_path']) }}" class="w-full h-64 object-cover" alt="{{ $doctor['name'] }}">                        <div class="p-4">
                            <h2 class="font-bold text-xl mb-2">{{ $doctor['name'] }}</h2>
                            <p class="text-gray-700">
                                <strong>Speciality:</strong> {{ $doctor['speciality'] }}<br>
                                <strong>Country:</strong> {{ $doctor['country'] }}<br>
                                <strong>City:</strong> {{ $doctor['city'] }}
                            </p>
                            <!-- Add the button here -->
            <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Book Your Appointment
            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection