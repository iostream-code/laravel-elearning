@extends('layout.template')
@section('title', 'Edit Dosen')
@section('content')
    <form class="max-w-full" action="{{ route('dosen_update', $dosen) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="flex flex-row gap-4">
            <div class="w-full max-w-xs">
                <div class="bg-white pt-8 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center pb-10">
                        @if ($dosen->user->photo != null)
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                src="{{ url('storage/' . $dosen->user->photo) }}" alt="Profile Picture">
                        @else
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                src="{{ url('/assets/blank-profile-picture.png') }}" alt="Profile Picture">
                        @endif
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $dosen->nama }}</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400 capitalize">{{ $dosen->user->status }}</span>
                    </div>
                </div>
            </div>
            <div
                class="w-full max-w-screen p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="grid md:grid-cols-2 md:gap-6 mb-5">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="nip" id="floating_nip"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            value="{{ $dosen->nip }}" placeholder=" " required />
                        <label for="floating_nip"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                            Induk Pegawai</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="nama" id="floating_nama"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            value="{{ $dosen->nama }}" placeholder=" " required />
                        <label for="floating_nama"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6 mb-5">
                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                        <input {{ $dosen->gender === 'pria' ? 'checked' : '' }} id="bordered-radio-1" type="radio"
                            value="pria" name="gender"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="bordered-radio-1"
                            class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pria</label>
                    </div>
                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                        <input {{ $dosen->gender === 'wanita' ? 'checked' : '' }} id="bordered-radio-2" type="radio"
                            value="wanita" name="gender"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="bordered-radio-2"
                            class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Wanita</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6 mb-5">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" name="usia" id="floating_usia"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            value="{{ $dosen->usia }}" placeholder=" " />
                        <label for="floating_usia"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Usia</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="asal" id="floating_asal"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            value="{{ $dosen->asal }}" placeholder=" " />
                        <label for="floating_asal"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Asal</label>
                    </div>
                </div>
                <div class="mb-5">
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="dosen_avatar_help" id="dosen_avatar" name="photo"
                        value="{{ $dosen->user->photo }}" type="file">
                </div>
                <div class="flex flex-row-reverse">
                    <button type="submit"
                        class="text-white mt-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection
