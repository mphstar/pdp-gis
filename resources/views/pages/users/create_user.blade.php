<div onclick="handleModal()" id="bg_modal"
    class="flex duration-500 w-full h-full bg-black opacity-0 fixed justify-center items-center pointer-events-none">
</div>

<form id="form_user" action="{{ route('user.create') }}" method="POST">
    @csrf
    <div class="flex flex-col w-full h-full justify-center items-center pointer-events-none fixed">
        <div id="konten_modal"
            class="flex scale-0 flex-col duration-500 ease-in-out w-[90%] lg:w-[500px] max-h-[90%] bg-white rounded-lg pointer-events-auto drop-shadow-lg overflow-hidden">
            <header>
                <div class="flex w-full h-fit flex-row justify-between px-6 lg:px-12 py-6 items-center border-b-2">
                    <h1 id="titleModal" class="font-poppins-semibold">Tambah Data</h1>
                    <div onclick="handleModal()" class="bg-[#ED3237] py-2 flex items-center px-2 rounded-md">
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.41089 10.6519L5.68762 6.92859L1.96436 10.6519L0.723267 9.41077L4.44653 5.6875L0.723267 1.96423L1.96436 0.723145L5.68762 4.44641L9.41089 0.723145L10.652 1.96423L6.92871 5.6875L10.652 9.41077L9.41089 10.6519Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
            </header>

            <div class="flex flex-col flex-grow w-full px-6 lg:px-12 mt-4 overflow-y-auto">
                <div class="grid grid-cols-1 h-full gap-4">
                    <!-- Input ID (Hidden) -->
                    <input maxlength="40"
                        class="w-full border-[2px] px-3 py-2 rounded-lg outline-primary" 
                        type="hidden"
                        name="id" 
                        id="id" 
                        placeholder="">
            
                    <!-- Input Nama -->
                    <div class="flex flex-col w-full">
                        <p class="py-3">Nama <span class="text-red-600">*</span></p>
                        <div class="">
                            <input maxlength="50"
                                class="w-full border-[2px] px-3 py-2 rounded-lg outline-primary" 
                                type="text"
                                name="nama" 
                                id="nama" 
                                placeholder="">
                        </div>
                    </div>
            
                    <!-- Input Email -->
                    <div class="flex flex-col w-full">
                        <p class="py-3">Email <span class="text-red-600">*</span></p>
                        <div class="">
                            <input maxlength="50"
                                class="w-full border-[2px] px-3 py-2 rounded-lg outline-primary" 
                                type="email"
                                name="email" 
                                id="email" 
                                placeholder="">
                        </div>
                    </div>
            
                    <!-- Input Password -->
                    <div class="flex flex-col w-full">
                        <p class="py-3">Password <span class="text-red-600">*</span></p>
                        <div class="">
                            <input maxlength="50"
                                class="w-full border-[2px] px-3 py-2 rounded-lg outline-primary" 
                                type="password"
                                name="password" 
                                id="password" 
                                placeholder="">
                        </div>
                    </div>
            
                    <!-- Input Konfirmasi Password -->
                    {{-- <div class="flex flex-col w-full">
                        <p class="py-3">Konfirmasi Password <span class="text-red-600">*</span></p>
                        <div class="">
                            <input maxlength="50"
                                class="w-full border-[2px] px-3 py-2 rounded-lg outline-primary" 
                                type="password"
                                name="konfirmasi_password" 
                                id="konfirmasi_password" 
                                placeholder="">
                        </div>
                    </div> --}}
                </div>
            </div>
            
            <div class="px-6 lg:px-12 py-8">
                <button onclick="handleData()" type="button"
                    class="flex bg-[#38D191] text-white w-full h-fit py-2 rounded-md items-center justify-center">
                    <p id="titleButton">Tambah Data</p>
                </button>
            </div>
        </div>
    </div>

</form>