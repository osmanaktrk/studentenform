<section>
    <div class="container">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Update Profile Photo') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __("Update your account's profile photo.") }}
            </p>
        </header>



        <form id="foto-form" action="{{ route('profile-photo.upload') }} " method="post" enctype="multipart/form-data">

            @csrf
            <div id="foto-div">
                @if (session('status') === 'Profile Photo Updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-xl text-green-600">{{ __('Saved') }}</p>
                @endif
                @if (session('status') === 'Profile Photo Deleted')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-xl text-red-600">{{ __('Deleted') }}</p>
                @endif
                <img id="profile-img" src="{{ Auth::user()->profile_photo_path }} " alt="profile foto" />
                <label id="foto-upload-label"
                    class="'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'"
                    for="photo">SELECT</label>
                <input type="file" name="photo" id="photo">

            </div>




            <div class="flex items-center justify-center gap-4">
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />

                <x-primary-button>{{ __('Upload') }}</x-primary-button>



                <a class='ms-3 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150'
                    href="{{route('profile-photo.delete')}} " onclick="confirm('Are you sure?')">DELETE</a>
            </div>
        </form>


    </div>


</section>
