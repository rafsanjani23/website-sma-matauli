@extends('admin.layouts.app')
@section('title', 'Ubah Admin')
@section('content')
    <div class="max-w-2xl">
        <div class="mb-6">
            <a href="{{ route('admin.admin-users.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                Kembali
            </a>
        </div>
        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Ubah Admin</h2>
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.admin-users.update', $item->id) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="username" class="block text-sm font-semibold text-gray-700 mb-1.5">Username <span class="text-red-600">*</span></label>
                    <input type="text" name="username" id="username" value="{{ old('username', $item->username) }}" required minlength="4" maxlength="50"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>

                <div>
                    <label for="role" class="block text-sm font-semibold text-gray-700 mb-1.5">Role <span class="text-red-600">*</span></label>
                    <select name="role" id="role" required
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        <option value="{{ \App\Models\Admin::ROLE_ADMIN_SEKOLAH }}" {{ old('role', $item->role) === \App\Models\Admin::ROLE_ADMIN_SEKOLAH ? 'selected' : '' }}>Admin Sekolah (akses semua panel kecuali asrama)</option>
                        <option value="{{ \App\Models\Admin::ROLE_ADMIN_ASRAMA }}" {{ old('role', $item->role) === \App\Models\Admin::ROLE_ADMIN_ASRAMA ? 'selected' : '' }}>Admin Asrama (hanya panel asrama)</option>
                    </select>
                </div>

                <div class="border-t border-gray-200 pt-5">
                    <p class="text-sm font-semibold text-gray-700 mb-1">Ganti Password</p>
                    <p class="text-xs text-gray-500 mb-3">Kosongkan jika tidak ingin mengubah password.</p>

                    <div class="space-y-3">
                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-1.5">Password Baru</label>
                            <input type="password" name="password" id="password" minlength="8"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-1.5">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" minlength="8"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
