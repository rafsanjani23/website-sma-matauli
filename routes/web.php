<?php

use App\Http\Controllers\Admin\PengasuhController;
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
use App\Http\Controllers\Admin\EkstrakurikulerController;
use App\Http\Controllers\Admin\ProgramKemataulianController;
use App\Http\Controllers\Admin\ProgramKemendikdasmenController;
use App\Http\Controllers\Admin\BerandaProgramIbController;
use App\Http\Controllers\Admin\BerandaProgramKemataulianController;
use App\Http\Controllers\Admin\BerandaProgramKemendikdasmenController;
use App\Http\Controllers\Admin\ProgramIbController;

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
    $programIb = \App\Models\BerandaProgramIb::latest()->first();
    $programKemataulian = \App\Models\BerandaProgramKemataulian::latest()->first();
    $programKemendikdasmen = \App\Models\BerandaProgramKemendikdasmen::latest()->first();
    return view('pages.home', compact('berita', 'prestasi', 'testimoni', 'programIb', 'programKemataulian', 'programKemendikdasmen'));
});

// tentang kami
Route::get('/sejarah', function () {
    return view('pages.sejarah');
})->name('sejarah');
Route::get('/profil/feisal-tanjung', function () {
    return view('pages.profil-feisal-tanjung');
})->name('profil.feisal-tanjung');
Route::get('/profil/akbar-tanjung', function () {
    return view('pages.profil-akbar-tanjung');
})->name('profil.akbar-tanjung');
Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
})->name('visi-misi');
Route::get('/struktur', function () {
    return view('pages.struktur');
})->name('struktur');
Route::get('/komite', function () {
    return view('pages.komite');
})->name('komite');
Route::get('/tendik', function () {
    $pimpinan = \App\Models\Pimpinan::all();
    $guruMapel = \App\Models\TenagaPendidik::where('kategori', 'Guru Mata Pelajaran')->orderBy('nama')->get();
    $guruIB = \App\Models\TenagaPendidik::where('kategori', 'IB')->orderBy('nama')->get();
    $tendik = \App\Models\TenagaKependidikan::orderBy('nama')->get();
    return view('pages.tendik', compact('pimpinan', 'guruMapel', 'guruIB', 'tendik'));
})->name('tendik');
Route::get('/fasilitas', function () {
    $labStudi = \App\Models\FasilitasSekolah::where('kategori', 'Laboratorium / Studi')->get();
    $akademik = \App\Models\FasilitasSekolah::where('kategori', 'Fasilitas Akademik')->get();
    $umum = \App\Models\FasilitasSekolah::where('kategori', 'Fasilitas Umum')->get();
    return view('pages.fasilitas-sekolah', compact('labStudi', 'akademik', 'umum'));
})->name('fasilitas');
Route::get('/ekstrakurikuler', function () {
    $items = \App\Models\Ekstrakurikuler::orderBy('nama')->get();
    return view('pages.ekstrakurikuler', compact('items'));
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
    $item = \App\Models\ProgramKemataulian::orderBy('judul')->first();
    return view('pages.program-kemataulian-detail', compact('item'));
})->name('program-kemataulian');
Route::get('/program-kemataulian/{id}', function ($id) {
    $item = \App\Models\ProgramKemataulian::findOrFail($id);
    return view('pages.program-kemataulian-detail', compact('item'));
})->name('program-kemataulian-detail');

Route::get('/program-ib', function () {
    $item = \App\Models\ProgramIb::orderBy('judul')->first();
    return view('pages.program-ib-detail', compact('item'));
})->name('program-ib');
Route::get('/program-ib/{id}', function ($id) {
    $item = \App\Models\ProgramIb::findOrFail($id);
    return view('pages.program-ib-detail', compact('item'));
})->name('program-ib-detail');

Route::get('/program-kemendikdasmen', function () {
    $item = \App\Models\ProgramKemendikdasmen::orderBy('judul')->first();
    return view('pages.program-kemendikdasmen-detail', compact('item'));
})->name('program-kemendikdasmen');
Route::get('/program-kemendikdasmen/{id}', function ($id) {
    $item = \App\Models\ProgramKemendikdasmen::findOrFail($id);
    return view('pages.program-kemendikdasmen-detail', compact('item'));
})->name('program-kemendikdasmen-detail');

// asrama
Route::get('/tentang-asrama', function (){
    $pengasuh = \App\Models\Pengasuh::orderBy('nama')->get();
    return view('pages.tentang-asrama', compact('pengasuh'));
})->name('tentang-asrama');
Route::get('/fasilitas-asrama', function () {
    $items = \App\Models\FasilitasAsrama::latest()->get();
    return view('pages.fasilitas-asrama', compact('items'));
})->name('fasilitas-asrama');
Route::get('/kegiatan-asrama', function () {
    $rutinItems = \App\Models\KegiatanAsrama::where('kategori', 'rutin')->latest()->get();
    $tidakRutinItems = \App\Models\KegiatanAsrama::where('kategori', 'tidak_rutin')->latest()->get();
    return view('pages.kegiatan-asrama', compact('rutinItems', 'tidakRutinItems'));
})->name('kegiatan-asrama');

// alumni
Route::get('/studi-lanjut', function (\Illuminate\Http\Request $request) {
    $angkatan = $request->query('angkatan');
    $kategoriList = ['TNI-Polri', 'Kedinasan', 'PTN', 'PTS', 'PTLN'];

    // Get total count for percentages
    $total = \App\Models\StudiLanjut::count();
    $percentages = [];
    foreach ($kategoriList as $kat) {
        $count = \App\Models\StudiLanjut::where('kategori', $kat)->count();
        $percentages[$kat] = $total > 0 ? round(($count / $total) * 100, 1) : 0;
    }

    // Get all unique angkatan values for dropdown
    $angkatanList = \App\Models\StudiLanjut::select('angkatan')->distinct()->orderBy('angkatan', 'desc')->pluck('angkatan');

    // Get total per angkatan
    $angkatanTotals = \App\Models\StudiLanjut::select('angkatan', \DB::raw('COUNT(*) as total'))
        ->groupBy('angkatan')
        ->orderBy('angkatan', 'desc')
        ->pluck('total', 'angkatan');

    // Build queries per category with optional angkatan filter + pagination
    $perPage = 10;
    $panelMap = [
        'TNI-Polri' => 'panel-tni',
        'Kedinasan' => 'panel-kedinasan',
        'PTN'       => 'panel-ptn',
        'PTS'       => 'panel-pts',
        'PTLN'      => 'panel-ptln',
    ];
    $buildQuery = function ($kategori) use ($request, $angkatan, $perPage, $panelMap) {
        $query = \App\Models\StudiLanjut::where('kategori', $kategori);
        if (!empty($angkatan)) {
            $query->where('angkatan', $angkatan);
        }
        return $query->orderBy('angkatan', 'desc')->orderBy('nama_alumni', 'asc')
            ->paginate($perPage, ['*'], strtolower(str_replace('-', '', $kategori)) . '_page')
            ->appends($request->query())
            ->fragment($panelMap[$kategori]);
    };

    $tniPolri = $buildQuery('TNI-Polri');
    $kedinasan = $buildQuery('Kedinasan');
    $ptn = $buildQuery('PTN');
    $pts = $buildQuery('PTS');
    $ptln = $buildQuery('PTLN');

    return view('pages.studi-lanjut', compact('tniPolri', 'kedinasan', 'ptn', 'pts', 'ptln', 'percentages', 'angkatanList', 'angkatanTotals', 'angkatan', 'total'));
})->name('studi-lanjut');
Route::get('/profesional-alumni', function () {
    $items = \App\Models\Profesional::orderBy('nama')->get();
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
    $prestasiSekolah = \App\Models\Prestasi::where('kategori', 'Prestasi Sekolah')->latest()->get();
    $prestasiSiswa = \App\Models\Prestasi::where('kategori', 'Prestasi Siswa')->latest()->get();
    $prestasiGuru = \App\Models\Prestasi::where('kategori', 'Prestasi Guru')->latest()->get();
    return view('pages.prestasi', compact('prestasiSekolah', 'prestasiSiswa', 'prestasiGuru'));
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

        // Pimpinan
        Route::get('/pimpinan', [PimpinanController::class, 'index'])->name('admin.pimpinan.index');
        Route::get('/pimpinan/create', [PimpinanController::class, 'create'])->name('admin.pimpinan.create');
        Route::post('/pimpinan', [PimpinanController::class, 'store'])->name('admin.pimpinan.store');
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

        // Ekstrakurikuler
        Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('admin.ekstrakurikuler.index');
        Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])->name('admin.ekstrakurikuler.create');
        Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])->name('admin.ekstrakurikuler.store');
        Route::get('/ekstrakurikuler/{id}/edit', [EkstrakurikulerController::class, 'edit'])->name('admin.ekstrakurikuler.edit');
        Route::put('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'update'])->name('admin.ekstrakurikuler.update');
        Route::delete('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'destroy'])->name('admin.ekstrakurikuler.destroy');

            // Program IB
        Route::get('/program-ib', [ProgramIbController::class, 'index'])->name('admin.program-ib.index');
        Route::get('/program-ib/create', [ProgramIbController::class, 'create'])->name('admin.program-ib.create');
        Route::post('/program-ib', [ProgramIbController::class, 'store'])->name('admin.program-ib.store');
        Route::get('/program-ib/{id}/edit', [ProgramIbController::class, 'edit'])->name('admin.program-ib.edit');
        Route::put('/program-ib/{id}', [ProgramIbController::class, 'update'])->name('admin.program-ib.update');
        Route::delete('/program-ib/{id}', [ProgramIbController::class, 'destroy'])->name('admin.program-ib.destroy');

            // Program Kemataulian
        Route::get('/program-kemataulian', [ProgramKemataulianController::class, 'index'])->name('admin.program-kemataulian.index');
        Route::get('/program-kemataulian/create', [ProgramKemataulianController::class, 'create'])->name('admin.program-kemataulian.create');
        Route::post('/program-kemataulian', [ProgramKemataulianController::class, 'store'])->name('admin.program-kemataulian.store');
        Route::get('/program-kemataulian/{id}/edit', [ProgramKemataulianController::class, 'edit'])->name('admin.program-kemataulian.edit');
        Route::put('/program-kemataulian/{id}', [ProgramKemataulianController::class, 'update'])->name('admin.program-kemataulian.update');
        Route::delete('/program-kemataulian/{id}', [ProgramKemataulianController::class, 'destroy'])->name('admin.program-kemataulian.destroy');

        // Program Kemendikdasmen
        Route::get('/program-kemendikdasmen', [ProgramKemendikdasmenController::class, 'index'])->name('admin.program-kemendikdasmen.index');
        Route::get('/program-kemendikdasmen/create', [ProgramKemendikdasmenController::class, 'create'])->name('admin.program-kemendikdasmen.create');
        Route::post('/program-kemendikdasmen', [ProgramKemendikdasmenController::class, 'store'])->name('admin.program-kemendikdasmen.store');
        Route::get('/program-kemendikdasmen/{id}/edit', [ProgramKemendikdasmenController::class, 'edit'])->name('admin.program-kemendikdasmen.edit');
        Route::put('/program-kemendikdasmen/{id}', [ProgramKemendikdasmenController::class, 'update'])->name('admin.program-kemendikdasmen.update');
        Route::delete('/program-kemendikdasmen/{id}', [ProgramKemendikdasmenController::class, 'destroy'])->name('admin.program-kemendikdasmen.destroy');

        // Beranda - Program IB
        Route::get('/beranda/program-ib', [BerandaProgramIbController::class, 'index'])->name('admin.beranda.program-ib.index');
        Route::get('/beranda/program-ib/create', [BerandaProgramIbController::class, 'create'])->name('admin.beranda.program-ib.create');
        Route::post('/beranda/program-ib', [BerandaProgramIbController::class, 'store'])->name('admin.beranda.program-ib.store');
        Route::get('/beranda/program-ib/{id}/edit', [BerandaProgramIbController::class, 'edit'])->name('admin.beranda.program-ib.edit');
        Route::put('/beranda/program-ib/{id}', [BerandaProgramIbController::class, 'update'])->name('admin.beranda.program-ib.update');
        Route::delete('/beranda/program-ib/{id}', [BerandaProgramIbController::class, 'destroy'])->name('admin.beranda.program-ib.destroy');

        // Beranda - Program Khusus Kemataulian
        Route::get('/beranda/program-kemataulian', [BerandaProgramKemataulianController::class, 'index'])->name('admin.beranda.program-kemataulian.index');
        Route::get('/beranda/program-kemataulian/create', [BerandaProgramKemataulianController::class, 'create'])->name('admin.beranda.program-kemataulian.create');
        Route::post('/beranda/program-kemataulian', [BerandaProgramKemataulianController::class, 'store'])->name('admin.beranda.program-kemataulian.store');
        Route::get('/beranda/program-kemataulian/{id}/edit', [BerandaProgramKemataulianController::class, 'edit'])->name('admin.beranda.program-kemataulian.edit');
        Route::put('/beranda/program-kemataulian/{id}', [BerandaProgramKemataulianController::class, 'update'])->name('admin.beranda.program-kemataulian.update');
        Route::delete('/beranda/program-kemataulian/{id}', [BerandaProgramKemataulianController::class, 'destroy'])->name('admin.beranda.program-kemataulian.destroy');

        // Beranda - Program Kemendikdasmen
        Route::get('/beranda/program-kemendikdasmen', [BerandaProgramKemendikdasmenController::class, 'index'])->name('admin.beranda.program-kemendikdasmen.index');
        Route::get('/beranda/program-kemendikdasmen/create', [BerandaProgramKemendikdasmenController::class, 'create'])->name('admin.beranda.program-kemendikdasmen.create');
        Route::post('/beranda/program-kemendikdasmen', [BerandaProgramKemendikdasmenController::class, 'store'])->name('admin.beranda.program-kemendikdasmen.store');
        Route::get('/beranda/program-kemendikdasmen/{id}/edit', [BerandaProgramKemendikdasmenController::class, 'edit'])->name('admin.beranda.program-kemendikdasmen.edit');
        Route::put('/beranda/program-kemendikdasmen/{id}', [BerandaProgramKemendikdasmenController::class, 'update'])->name('admin.beranda.program-kemendikdasmen.update');
        Route::delete('/beranda/program-kemendikdasmen/{id}', [BerandaProgramKemendikdasmenController::class, 'destroy'])->name('admin.beranda.program-kemendikdasmen.destroy');

        // Pengasuh
        Route::get('/pengasuh', [PengasuhController::class, 'index'])->name('admin.pengasuh.index');
        Route::get('/pengasuh/create', [PengasuhController::class, 'create'])->name('admin.pengasuh.create');
        Route::post('/pengasuh', [PengasuhController::class, 'store'])->name('admin.pengasuh.store');
        Route::get('/pengasuh/{id}/edit', [PengasuhController::class, 'edit'])->name('admin.pengasuh.edit');
        Route::put('/pengasuh/{id}', [PengasuhController::class, 'update'])->name('admin.pengasuh.update');
        Route::delete('/pengasuh/{id}', [PengasuhController::class, 'destroy'])->name('admin.pengasuh.destroy');
    });
});
