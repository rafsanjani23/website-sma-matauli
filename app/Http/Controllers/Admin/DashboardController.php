<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();

        $sekolahStats = [
            ['label' => 'Media', 'count' => DB::table('media')->count(), 'route' => 'admin.media.index', 'icon' => 'newspaper'],
            ['label' => 'Prestasi', 'count' => DB::table('prestasi')->count(), 'route' => 'admin.prestasi.index', 'icon' => 'trophy'],
            ['label' => 'Testimoni', 'count' => DB::table('testimoni')->count(), 'route' => 'admin.testimoni.index', 'icon' => 'chat'],
            ['label' => 'Fasilitas Sekolah', 'count' => DB::table('fasilitas_sekolah')->count(), 'route' => 'admin.fasilitas-sekolah.index', 'icon' => 'building'],
            ['label' => 'Pimpinan', 'count' => DB::table('pimpinan')->count(), 'route' => 'admin.pimpinan.index', 'icon' => 'users'],
            ['label' => 'Guru', 'count' => DB::table('tenaga_pendidik')->count(), 'route' => 'admin.tenaga-pendidik.index', 'icon' => 'academic'],
            ['label' => 'Tenaga Kependidikan', 'count' => DB::table('tenaga_kependidikan')->count(), 'route' => 'admin.tenaga-kependidikan.index', 'icon' => 'briefcase'],
            ['label' => 'Kemitraan', 'count' => DB::table('kemitraan')->count(), 'route' => 'admin.kemitraan.index', 'icon' => 'handshake'],
            ['label' => 'Studi Lanjut', 'count' => DB::table('studi_lanjut')->count(), 'route' => 'admin.studi-lanjut.index', 'icon' => 'graduation'],
            ['label' => 'Profesional', 'count' => DB::table('profesional')->count(), 'route' => 'admin.profesional.index', 'icon' => 'star'],
            ['label' => 'Foto', 'count' => DB::table('foto')->count(), 'route' => 'admin.foto.index', 'icon' => 'photo'],
            ['label' => 'Video', 'count' => DB::table('video')->count(), 'route' => 'admin.video.index', 'icon' => 'video'],
            ['label' => 'Ekstrakurikuler', 'count' => DB::table('ekstrakurikuler')->count(), 'route' => 'admin.ekstrakurikuler.index', 'icon' => 'star'],
            ['label' => 'Program IB', 'count' => DB::table('program_ib')->count(), 'route' => 'admin.program-ib.index', 'icon' => 'academic'],
            ['label' => 'Program Kemataulian', 'count' => DB::table('program_kemataulian')->count(), 'route' => 'admin.program-kemataulian.index', 'icon' => 'academic'],
            ['label' => 'Program Kemendikdasmen', 'count' => DB::table('program_kemendikdasmen')->count(), 'route' => 'admin.program-kemendikdasmen.index', 'icon' => 'academic'],
        ];

        $asramaStats = [
            ['label' => 'Fasilitas Asrama', 'count' => DB::table('fasilitas_asrama')->count(), 'route' => 'admin.fasilitas-asrama.index', 'icon' => 'home'],
            ['label' => 'Kegiatan Asrama', 'count' => DB::table('kegiatan_asrama')->count(), 'route' => 'admin.kegiatan-asrama.index', 'icon' => 'calendar'],
            ['label' => 'Pengasuh Asrama', 'count' => DB::table('pengasuhs')->count(), 'route' => 'admin.pengasuh.index', 'icon' => 'users'],
        ];

        $stats = [];
        if ($admin->canAccessSekolah()) {
            $stats = array_merge($stats, $sekolahStats);
        }
        if ($admin->canAccessAsrama()) {
            $stats = array_merge($stats, $asramaStats);
        }

        if ($admin->canManageAdmins()) {
            array_unshift($stats, [
                'label' => 'Kelola Admin',
                'count' => DB::table('admins')->whereIn('role', Admin::ASSIGNABLE_ROLES)->count(),
                'route' => 'admin.admin-users.index',
                'icon' => 'users',
            ]);
        }

        return view('admin.dashboard', compact('stats'));
    }
}
