@php $isEdit = isset($item); @endphp

<div data-lang-tabs>
    <div class="flex gap-1 border-b border-gray-200 mb-4">
        <button type="button" data-tab-btn="id"
            class="lang-tab-btn px-4 py-2 text-sm font-semibold border-b-2 border-red-800 text-red-800 transition cursor-pointer">
            Indonesia
        </button>
        <button type="button" data-tab-btn="en"
            class="lang-tab-btn px-4 py-2 text-sm font-semibold border-b-2 border-transparent text-gray-500 hover:text-gray-700 transition cursor-pointer">
            English
        </button>
    </div>

    <div data-tab-pane="id" class="space-y-5">
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Judul (ID) <span
                    class="text-red-600">*</span></label>
            <input type="text" name="judul[id]"
                value="{{ old('judul.id', $isEdit ? $item->getTranslation('judul', 'id', false) ?? '' : '') }}" required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
        </div>
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Ringkasan (ID) <span
                    class="text-red-600">*</span></label>
            <textarea name="ringkasan[id]" rows="4" required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('ringkasan.id', $isEdit ? $item->getTranslation('ringkasan', 'id', false) ?? '' : '') }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Isi (ID) <span
                    class="text-red-600">*</span></label>
            <textarea name="isi[id]" data-rich-editor rows="6" required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('isi.id', $isEdit ? $item->getTranslation('isi', 'id', false) ?? '' : '') }}</textarea>
        </div>
    </div>

    <div data-tab-pane="en" class="space-y-5 hidden">
        <p class="text-xs text-gray-500 italic">Field bahasa Inggris bersifat opsional. Jika kosong, akan otomatis
            fallback ke versi Indonesia.</p>
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Judul (EN)</label>
            <input type="text" name="judul[en]"
                value="{{ old('judul.en', $isEdit ? $item->getTranslation('judul', 'en', false) ?? '' : '') }}"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
        </div>
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Ringkasan (EN)</label>
            <textarea name="ringkasan[en]" rows="4"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('ringkasan.en', $isEdit ? $item->getTranslation('ringkasan', 'en', false) ?? '' : '') }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Isi (EN)</label>
            <textarea name="isi[en]" data-rich-editor rows="6"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('isi.en', $isEdit ? $item->getTranslation('isi', 'en', false) ?? '' : '') }}</textarea>
        </div>
    </div>
</div>

<div>
    <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-1.5">Gambar <span
            class="text-red-600">*</span></label>
    @if ($isEdit && $item->gambar)
        <div class="mb-2">
            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}"
                class="w-32 h-20 object-cover rounded-lg" />
        </div>
    @endif
    <input type="file" name="gambar" id="gambar" accept="image/*" {{ $isEdit ? '' : 'required' }}
        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition">
    @if ($isEdit)
        <p class="mt-1 text-xs text-gray-500">Biarkan kosong jika gambar tidak perlu diganti.</p>
    @endif
</div>

<div>
    <label for="link_facebook" class="block text-sm font-semibold text-gray-700 mb-1.5">Link Facebook</label>
    <input type="url" name="link_facebook" id="link_facebook"
        value="{{ old('link_facebook', $isEdit ? $item->link_facebook : '') }}"
        placeholder="https://www.facebook.com/..."
        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
</div>

<div>
    <label for="tanggal" class="block text-sm font-semibold text-gray-700 mb-1.5">Tanggal <span
            class="text-red-600">*</span></label>
    <input type="date" name="tanggal" id="tanggal"
        value="{{ old('tanggal', $isEdit ? $item->tanggal->format('Y-m-d') : '') }}" required
        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
</div>

<div class="pt-4">
    <button type="submit"
        class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition cursor-pointer">
        Simpan
    </button>
</div>
