<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\FasilitasSekolahController;
use App\Http\Controllers\Admin\FasilitasAsramaController;
use App\Http\Controllers\Admin\KegiatanAsramaController;
use App\Http\Controllers\Admin\PimpinanController;
use App\Http\Controllers\Admin\TenagaPendidikController;
use App\Http\Controllers\Admin\TenagaKependidikanController;
use App\Http\Controllers\Admin\KemitraanController;
use App\Http\Controllers\Admin\StudiLanjutController;
use App\Http\Controllers\Admin\ProfesionalController;
use App\Http\Controllers\Admin\FotoController;
use App\Http\Controllers\Admin\VideoController;

// Language switch
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['id', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/', function () {
    $berita = \App\Models\Media::latest()->take(3)->get();
    $prestasi = \App\Models\Prestasi::latest()->take(3)->get();
    $testimoni = \App\Models\Testimoni::latest()->take(6)->get();
    return view('pages.home', compact('berita', 'prestasi', 'testimoni'));
});

// tentang kami
Route::get('/sejarah', function () {
    return view('pages.sejarah');
})->name('sejarah');
Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
})->name('visi-misi');
Route::get('/struktur', function () {
    return view('pages.struktur');
})->name('struktur');
Route::get('/tendik', function () {
    $pimpinan = \App\Models\Pimpinan::all();
    $guruMapel = \App\Models\TenagaPendidik::where('kategori', 'Guru Mata Pelajaran')->get();
    $guruIB = \App\Models\TenagaPendidik::where('kategori', 'IB')->get();
    $tendik = \App\Models\TenagaKependidikan::all();
    return view('pages.tendik', compact('pimpinan', 'guruMapel', 'guruIB', 'tendik'));
})->name('tendik');
Route::get('/fasilitas', function () {
    $labStudi = \App\Models\FasilitasSekolah::where('kategori', 'Laboratorium / Studi')->get();
    $akademik = \App\Models\FasilitasSekolah::where('kategori', 'Fasilitas Akademik')->get();
    $umum = \App\Models\FasilitasSekolah::where('kategori', 'Fasilitas Umum')->get();
    return view('pages.fasilitas-sekolah', compact('labStudi', 'akademik', 'umum'));
})->name('fasilitas');
Route::get('/ekstrakurikuler', function () {
    return view('pages.ekstrakurikuler');
})->name('ekstrakurikuler');
Route::get('/mitra', function () {
    $items = \App\Models\Kemitraan::latest()->get();
    return view('pages.mitra-list', compact('items'));
})->name('mitra');
Route::get('/mitra/{id}', function ($id) {
    $item = \App\Models\Kemitraan::findOrFail($id);
    return view('pages.mitra-detail', compact('item'));
})->name('mitra-detail');

// program
Route::get('/program-kemataulian', function () {
    return view('pages.program-kemataulian');
})->name('program-kemataulian');
Route::get('/program-ib', function () {
    return view('pages.program-ib');
})->name('program-ib');
Route::get('/program-kemendikdasmen', function () {
    return view('pages.program-kemendikdasmen');
})->name('program-kemendikdasmen');

// asrama
Route::get('/fasilitas-asrama', function () {
    $items = \App\Models\FasilitasAsrama::latest()->get();
    return view('pages.fasilitas-asrama', compact('items'));
})->name('fasilitas-asrama');
Route::get('/kegiatan-asrama', function () {
    $items = \App\Models\KegiatanAsrama::latest()->get();
    return view('pages.kegiatan-asrama', compact('items'));
})->name('kegiatan-asrama');

// alumni
Route::get('/studi-lanjut', function () {
    $tniPolri = \App\Models\StudiLanjut::where('kategori', 'TNI-Polri')->get();
    $kedinasan = \App\Models\StudiLanjut::where('kategori', 'Kedinasan')->get();
    $ptn = \App\Models\StudiLanjut::where('kategori', 'PTN')->get();
    $ptln = \App\Models\StudiLanjut::where('kategori', 'PTLN')->get();
    return view('pages.studi-lanjut', compact('tniPolri', 'kedinasan', 'ptn', 'ptln'));
})->name('studi-lanjut');
Route::get('/profesional-alumni', function () {
    $items = \App\Models\Profesional::latest()->get();
    return view('pages.profesional-alumni', compact('items'));
})->name('profesional-alumni');

// galeri
Route::get('/galeri-foto', function () {
    $items = \App\Models\Foto::latest()->get();
    return view('pages.galeri-foto', compact('items'));
})->name('galeri-foto');
Route::get('/galeri-video', function () {
    $items = \App\Models\Video::latest()->get();
    return view('pages.galeri-video', compact('items'));
})->name('galeri-video');
Route::get('/galeri-media', function () {
    $items = \App\Models\Media::latest()->get();
    return view('pages.galeri-media', compact('items'));
})->name('galeri-media');
Route::get('/galeri-media/{id}', function ($id) {
    $item = \App\Models\Media::findOrFail($id);
    return view('pages.galeri-media-detail', compact('item'));
})->name('galeri-media-detail');
Route::get('/prestasi', function () {
    $items = \App\Models\Prestasi::latest()->get();
    return view('pages.prestasi', compact('items'));
})->name('prestasi');
Route::get('/prestasi/{id}', function ($id) {
    $item = \App\Models\Prestasi::findOrFail($id);
    return view('pages.prestasi-detail', compact('item'));
})->name('prestasi-detail');
Route::get('/testimonials', function () {
    $items = \App\Models\Testimoni::latest()->get();
    return view('pages.testimonials', compact('items'));
})->name('testimonials');

// ============================
// ADMIN ROUTES
// ============================
Route::prefix('admin')->group(function () {

    // Auth
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Protected routes
    Route::middleware('admin.auth')->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

        // Media
        Route::get('/media', [MediaController::class, 'index'])->name('admin.media.index');
        Route::get('/media/create', [MediaController::class, 'create'])->name('admin.media.create');
        Route::post('/media', [MediaController::class, 'store'])->name('admin.media.store');
        Route::get('/media/{id}/edit', [MediaController::class, 'edit'])->name('admin.media.edit');
        Route::put('/media/{id}', [MediaController::class, 'update'])->name('admin.media.update');
        Route::delete('/media/{id}', [MediaController::class, 'destroy'])->name('admin.media.destroy');

        // Prestasi
        Route::get('/prestasi', [PrestasiController::class, 'index'])->name('admin.prestasi.index');
        Route::get('/prestasi/create', [PrestasiController::class, 'create'])->name('admin.prestasi.create');
        Route::post('/prestasi', [PrestasiController::class, 'store'])->name('admin.prestasi.store');
        Route::get('/prestasi/{id}/edit', [PrestasiController::class, 'edit'])->name('admin.prestasi.edit');
        Route::put('/prestasi/{id}', [PrestasiController::class, 'update'])->name('admin.prestasi.update');
        Route::delete('/prestasi/{id}', [PrestasiController::class, 'destroy'])->name('admin.prestasi.destroy');

        // Testimoni
        Route::get('/testimoni', [TestimoniController::class, 'index'])->name('admin.testimoni.index');
        Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('admin.testimoni.create');
        Route::post('/testimoni', [TestimoniController::class, 'store'])->name('admin.testimoni.store');
        Route::get('/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('admin.testimoni.edit');
        Route::put('/testimoni/{id}', [TestimoniController::class, 'update'])->name('admin.testimoni.update');
        Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('admin.testimoni.destroy');

        // Fasilitas Sekolah
        Route::get('/fasilitas-sekolah', [FasilitasSekolahController::class, 'index'])->name('admin.fasilitas-sekolah.index');
        Route::get('/fasilitas-sekolah/create', [FasilitasSekolahController::class, 'create'])->name('admin.fasilitas-sekolah.create');
        Route::post('/fasilitas-sekolah', [FasilitasSekolahController::class, 'store'])->name('admin.fasilitas-sekolah.store');
        Route::get('/fasilitas-sekolah/{id}/edit', [FasilitasSekolahController::class, 'edit'])->name('admin.fasilitas-sekolah.edit');
        Route::put('/fasilitas-sekolah/{id}', [FasilitasSekolahController::class, 'update'])->name('admin.fasilitas-sekolah.update');
        Route::delete('/fasilitas-sekolah/{id}', [FasilitasSekolahController::class, 'destroy'])->name('admin.fasilitas-sekolah.destroy');

        // Fasilitas Asrama
        Route::get('/fasilitas-asrama', [FasilitasAsramaController::class, 'index'])->name('admin.fasilitas-asrama.index');
        Route::get('/fasilitas-asrama/create', [FasilitasAsramaController::class, 'create'])->name('admin.fasilitas-asrama.create');
        Route::post('/fasilitas-asrama', [FasilitasAsramaController::class, 'store'])->name('admin.fasilitas-asrama.store');
        Route::get('/fasilitas-asrama/{id}/edit', [FasilitasAsramaController::class, 'edit'])->name('admin.fasilitas-asrama.edit');
        Route::put('/fasilitas-asrama/{id}', [FasilitasAsramaController::class, 'update'])->name('admin.fasilitas-asrama.update');
        Route::delete('/fasilitas-asrama/{id}', [FasilitasAsramaController::class, 'destroy'])->name('admin.fasilitas-asrama.destroy');

        // Kegiatan Asrama
        Route::get('/kegiatan-asrama', [KegiatanAsramaController::class, 'index'])->name('admin.kegiatan-asrama.index');
        Route::get('/kegiatan-asrama/create', [KegiatanAsramaController::class, 'create'])->name('admin.kegiatan-asrama.create');
        Route::post('/kegiatan-asrama', [KegiatanAsramaController::class, 'store'])->name('admin.kegiatan-asrama.store');
        Route::get('/kegiatan-asrama/{id}/edit', [KegiatanAsramaController::class, 'edit'])->name('admin.kegiatan-asrama.edit');
        Route::put('/kegiatan-asrama/{id}', [KegiatanAsramaController::class, 'update'])->name('admin.kegiatan-asrama.update');
        Route::delete('/kegiatan-asrama/{id}', [KegiatanAsramaController::class, 'destroy'])->name('admin.kegiatan-asrama.destroy');

        // Pimpinan (only index + edit/update, no create/delete)
        Route::get('/pimpinan', [PimpinanController::class, 'index'])->name('admin.pimpinan.index');
        Route::get('/pimpinan/{id}/edit', [PimpinanController::class, 'edit'])->name('admin.pimpinan.edit');
        Route::put('/pimpinan/{id}', [PimpinanController::class, 'update'])->name('admin.pimpinan.update');

        // Tenaga Pendidik
        Route::get('/tenaga-pendidik', [TenagaPendidikController::class, 'index'])->name('admin.tenaga-pendidik.index');
        Route::get('/tenaga-pendidik/create', [TenagaPendidikController::class, 'create'])->name('admin.tenaga-pendidik.create');
        Route::post('/tenaga-pendidik', [TenagaPendidikController::class, 'store'])->name('admin.tenaga-pendidik.store');
        Route::get('/tenaga-pendidik/{id}/edit', [TenagaPendidikController::class, 'edit'])->name('admin.tenaga-pendidik.edit');
        Route::put('/tenaga-pendidik/{id}', [TenagaPendidikController::class, 'update'])->name('admin.tenaga-pendidik.update');
        Route::delete('/tenaga-pendidik/{id}', [TenagaPendidikController::class, 'destroy'])->name('admin.tenaga-pendidik.destroy');

        // Tenaga Kependidikan
        Route::get('/tenaga-kependidikan', [TenagaKependidikanController::class, 'index'])->name('admin.tenaga-kependidikan.index');
        Route::get('/tenaga-kependidikan/create', [TenagaKependidikanController::class, 'create'])->name('admin.tenaga-kependidikan.create');
        Route::post('/tenaga-kependidikan', [TenagaKependidikanController::class, 'store'])->name('admin.tenaga-kependidikan.store');
        Route::get('/tenaga-kependidikan/{id}/edit', [TenagaKependidikanController::class, 'edit'])->name('admin.tenaga-kependidikan.edit');
        Route::put('/tenaga-kependidikan/{id}', [TenagaKependidikanController::class, 'update'])->name('admin.tenaga-kependidikan.update');
        Route::delete('/tenaga-kependidikan/{id}', [TenagaKependidikanController::class, 'destroy'])->name('admin.tenaga-kependidikan.destroy');

        // Kemitraan
        Route::get('/kemitraan', [KemitraanController::class, 'index'])->name('admin.kemitraan.index');
        Route::get('/kemitraan/create', [KemitraanController::class, 'create'])->name('admin.kemitraan.create');
        Route::post('/kemitraan', [KemitraanController::class, 'store'])->name('admin.kemitraan.store');
        Route::get('/kemitraan/{id}/edit', [KemitraanController::class, 'edit'])->name('admin.kemitraan.edit');
        Route::put('/kemitraan/{id}', [KemitraanController::class, 'update'])->name('admin.kemitraan.update');
        Route::delete('/kemitraan/{id}', [KemitraanController::class, 'destroy'])->name('admin.kemitraan.destroy');

        // Studi Lanjut
        Route::get('/studi-lanjut', [StudiLanjutController::class, 'index'])->name('admin.studi-lanjut.index');
        Route::get('/studi-lanjut/create', [StudiLanjutController::class, 'create'])->name('admin.studi-lanjut.create');
        Route::post('/studi-lanjut', [StudiLanjutController::class, 'store'])->name('admin.studi-lanjut.store');
        Route::get('/studi-lanjut/{id}/edit', [StudiLanjutController::class, 'edit'])->name('admin.studi-lanjut.edit');
        Route::put('/studi-lanjut/{id}', [StudiLanjutController::class, 'update'])->name('admin.studi-lanjut.update');
        Route::delete('/studi-lanjut/{id}', [StudiLanjutController::class, 'destroy'])->name('admin.studi-lanjut.destroy');

        // Profesional
        Route::get('/profesional', [ProfesionalController::class, 'index'])->name('admin.profesional.index');
        Route::get('/profesional/create', [ProfesionalController::class, 'create'])->name('admin.profesional.create');
        Route::post('/profesional', [ProfesionalController::class, 'store'])->name('admin.profesional.store');
        Route::get('/profesional/{id}/edit', [ProfesionalController::class, 'edit'])->name('admin.profesional.edit');
        Route::put('/profesional/{id}', [ProfesionalController::class, 'update'])->name('admin.profesional.update');
        Route::delete('/profesional/{id}', [ProfesionalController::class, 'destroy'])->name('admin.profesional.destroy');

        // Foto
        Route::get('/foto', [FotoController::class, 'index'])->name('admin.foto.index');
        Route::get('/foto/create', [FotoController::class, 'create'])->name('admin.foto.create');
        Route::post('/foto', [FotoController::class, 'store'])->name('admin.foto.store');
        Route::get('/foto/{id}/edit', [FotoController::class, 'edit'])->name('admin.foto.edit');
        Route::put('/foto/{id}', [FotoController::class, 'update'])->name('admin.foto.update');
        Route::delete('/foto/{id}', [FotoController::class, 'destroy'])->name('admin.foto.destroy');

        // Video
        Route::get('/video', [VideoController::class, 'index'])->name('admin.video.index');
        Route::get('/video/create', [VideoController::class, 'create'])->name('admin.video.create');
        Route::post('/video', [VideoController::class, 'store'])->name('admin.video.store');
        Route::get('/video/{id}/edit', [VideoController::class, 'edit'])->name('admin.video.edit');
        Route::put('/video/{id}', [VideoController::class, 'update'])->name('admin.video.update');
        Route::delete('/video/{id}', [VideoController::class, 'destroy'])->name('admin.video.destroy');
    });
});
