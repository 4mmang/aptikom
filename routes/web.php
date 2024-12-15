<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Profil\ArtiLogoController;
use App\Http\Controllers\Admin\Profil\PengurusController;
use App\Http\Controllers\Admin\Profil\SejarahController;
use App\Http\Controllers\Admin\Profil\StrukturOrganisasiController;
use App\Http\Controllers\Admin\Profil\TftController;
use App\Http\Controllers\Admin\Profil\VisiMisiController;
use App\Http\Controllers\Admin\Tupoksi\BagianKhusus\HumasBrandingController;
use App\Http\Controllers\Admin\Tupoksi\BagianKhusus\LegalitasController;
use App\Http\Controllers\Admin\Tupoksi\BagianKhusus\PembinaanOrganisasiController;
use App\Http\Controllers\Admin\Tupoksi\BagianKhusus\SistemInformasiController;
use App\Http\Controllers\Admin\Tupoksi\BendaharaUmumController;
use App\Http\Controllers\Admin\Tupoksi\Keilmuan\AiController;
use App\Http\Controllers\Admin\Tupoksi\Keilmuan\BioinformaticsController;
use App\Http\Controllers\Admin\Tupoksi\Keilmuan\ComputingController;
use App\Http\Controllers\Admin\Tupoksi\Keilmuan\MultimediaController;
use App\Http\Controllers\Admin\Tupoksi\Keilmuan\SecurityController;
use App\Http\Controllers\Admin\Tupoksi\Keilmuan\TransformationController;
use App\Http\Controllers\Admin\Tupoksi\KerjaSama\IndustriController;
use App\Http\Controllers\Admin\Tupoksi\KerjaSama\LuarNegeriController;
use App\Http\Controllers\Admin\Tupoksi\KerjaSama\PemerintahController;
use App\Http\Controllers\Admin\Tupoksi\KerjaSama\PerguruanTinggiController;
use App\Http\Controllers\Admin\Tupoksi\KesektariatanController;
use App\Http\Controllers\Admin\Tupoksi\Otonom\ConferenceController;
use App\Http\Controllers\Admin\Tupoksi\Otonom\LamInfokomController;
use App\Http\Controllers\Admin\Tupoksi\Otonom\LembagaController;
use App\Http\Controllers\Admin\Tupoksi\Otonom\LspInformatikaController;
use App\Http\Controllers\Admin\Tupoksi\Otonom\PemerataanController;
use App\Http\Controllers\Admin\Tupoksi\Otonom\PenerbitanController;
use App\Http\Controllers\Admin\Tupoksi\Pengembangan\CampController;
use App\Http\Controllers\Admin\Tupoksi\Pengembangan\FungsionalController;
use App\Http\Controllers\Admin\Tupoksi\Pengembangan\KompetensiController;
use App\Http\Controllers\Admin\Tupoksi\Pengembangan\LombaController;
use App\Http\Controllers\Admin\Tupoksi\Pengembangan\PenulisanController;
use App\Http\Controllers\Admin\Tupoksi\Pengembangan\PublikasiController;
use App\Http\Controllers\Admin\Tupoksi\PerguruanTinggi\AkreditasiController;
use App\Http\Controllers\Admin\Tupoksi\PerguruanTinggi\ForumController;
use App\Http\Controllers\Admin\Tupoksi\PerguruanTinggi\InternasionalisasiController;
use App\Http\Controllers\Admin\Tupoksi\PerguruanTinggi\KurikulumController;
use App\Http\Controllers\Admin\Tupoksi\PerguruanTinggi\ManajemenController;
use App\Models\Ai;
use App\Models\Akreditasi;
use App\Models\ArtiLogo;
use App\Models\BendaharaUmum;
use App\Models\Berita;
use App\Models\Bioinformatics;
use App\Models\Computing;
use App\Models\Conference;
use App\Models\HumasBranding;
use App\Models\Industri;
use App\Models\Kesektariatan;
use App\Models\LamInfokom;
use App\Models\Legalitas;
use App\Models\Lembaga;
use App\Models\LspInformatika;
use App\Models\LuarNegeri;
use App\Models\Multimedia;
use App\Models\PembinaanOrganisasi;
use App\Models\Pemerataan;
use App\Models\Pemerintah;
use App\Models\Penerbitan;
use App\Models\Pengurus;
use App\Models\PerguruanTinggi;
use App\Models\Security;
use App\Models\Sejarah;
use App\Models\SistemInformasi;
use App\Models\StrukturOrganisasi;
use App\Models\Transformation;
use App\Models\Visimisi;
use App\Models\Internasionalisasi;
use App\Models\Kurikulum;
use App\Models\Forum;
use App\Models\Manajemen;
use App\Models\Camp;
use App\Models\Fungsional;
use App\Models\Kompetensi;
use App\Models\Lomba;
use App\Models\Penulisan;
use App\Models\Publikasi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $berita = Berita::latest()->take(3)->get();
    return view('index', compact('berita'));
});

Route::get('/profil-sejarah', function () {
    $sejarah = Sejarah::find(1);
    return view('profil.sejarah', compact('sejarah'));
});

Route::get('/profil-visimisi', function () {
    $visimisi = Visimisi::find(1);
    return view('profil.visiMisi', compact('visimisi'));
});

Route::get('/profil-strukturOrganisasi', function () {
    $strukturorganisasi = StrukturOrganisasi::find(1);
    return view('profil.struktur', compact('strukturorganisasi'));
});

Route::get('/profil-pengurus', function () {
    $pengurus = Pengurus::find(1);
    return view('profil.pengurus', compact('pengurus'));
});
Route::get('/profil-artiLogo', function () {
    $artilogo = ArtiLogo::find(1);
    return view('profil.artiLogo', compact('artilogo'));
});
Route::get('/profil-tujuanFungsiTugas', function () {
    return view('profil.tujuanFungsiTugas');
});

Route::get('/tupoksi-bendaharaUmum', function () {
    $bendaharaumum = BendaharaUmum::find(1);
    return view('tupoksi.bendahara', compact('bendaharaumum'));
});
Route::get('/tupoksi-kesekretariatan', function () {
    $kesekretariatan = Kesektariatan::find(1);
    return view('tupoksi.kesekretariatan', compact('kesekretariatan'));
});

Route::get('/tupoksi/bagiankhusus/humasbranding', function () {
    $humasbranding = HumasBranding::find(1);
    return view('tupoksi.bagiankhusus.humasbranding', compact('humasbranding'));
})->name('humasbranding');

Route::get('/tupoksi/bagiankhusus/sisteminformasi', function () {
    $sisteminformasi = SistemInformasi::find(1);
    return view('tupoksi.bagiankhusus.sisteminformasi', compact('sisteminformasi'));
})->name('sisteminformasi');

Route::get('/tupoksi/bagiankhusus/pembinaanorganisasi', function () {
    $pembinaanorganisasi = PembinaanOrganisasi::find(1);
    return view('tupoksi.bagiankhusus.pembinaanorganisasi', compact('pembinaanorganisasi'));
})->name('pembinaanorganisasi');

Route::get('/tupoksi/bagiankhusus/legalitas', function () {
    $legalitas = Legalitas::find(1);
    return view('tupoksi.bagiankhusus.legalitas', compact('legalitas'));
})->name('legalitas');

Route::get('/tupoksi/keilmuan/bioinformatics', function () {
    $bioinformatics = Bioinformatics::find(1);
    return view('tupoksi.keilmuan.bioinformatics', compact('bioinformatics'));
})->name('bioinformatics');

Route::get('/tupoksi/keilmuan/computing', function () {
    $computing = Computing::find(1);
    return view('tupoksi.keilmuan.computing', compact('computing'));
})->name('computing');

Route::get('/tupoksi/keilmuan/multimedia', function () {
    $multimedia = Multimedia::find(1);
    return view('tupoksi.keilmuan.multimedia', compact('multimedia'));
})->name('multimedia');

Route::get('/tupoksi/keilmuan/security', function () {
    $security = Security::find(1);
    return view('tupoksi.keilmuan.security', compact('security'));
})->name('security');

Route::get('/tupoksi/keilmuan/transformation', function () {
    $transformation = Transformation::find(1);
    return view('tupoksi.keilmuan.transformation', compact('transformation'));
})->name('transformation');

Route::get('/tupoksi/keilmuan/ai', function () {
    $ai = Ai::find(1);
    return view('tupoksi.keilmuan.ai', compact('ai'));
})->name('ai');

Route::get('/tupoksi/kerjasama/industri', function () {
    $industri = Industri::find(1);
    return view('tupoksi.kerjasama.industri', compact('industri'));
})->name('industri');

Route::get('/tupoksi/kerjasama/luarnegeri', function () {
    $luarnegeri = LuarNegeri::find(1);
    return view('tupoksi.kerjasama.luarnegeri', compact('luarnegeri'));
})->name('luarnegeri');

Route::get('/tupoksi/kerjasama/pemerintah', function () {
    $pemerintah = Pemerintah::find(1);
    return view('tupoksi.kerjasama.pemerintah', compact('pemerintah'));
})->name('pemerintah');

Route::get('/tupoksi/kerjasama/perguruantinggi', function () {
    $perguruantinggi = PerguruanTinggi::find(1);
    return view('tupoksi.kerjasama.perguruantinggi', compact('perguruantinggi'));
})->name('perguruantinggi');

Route::get('/tupoksi/otonom/conference', function () {
    $conference = Conference::find(1);
    return view('tupoksi.otonom.conference', compact('conference'));
})->name('conference');

Route::get('/tupoksi/otonom/laminfokom', function () {
    $laminfokom = LamInfokom::find(1);
    return view('tupoksi.otonom.laminfokom', compact('laminfokom'));
})->name('laminfokom');

Route::get('/tupoksi/otonom/lembaga', function () {
    $lembaga = Lembaga::find(1);
    return view('tupoksi.otonom.lembaga', compact('lembaga'));
})->name('lembaga');

Route::get('/tupoksi/otonom/lspinformatika', function () {
    $lspinformatika = LspInformatika::find(1);
    return view('tupoksi.otonom.lspinformatika', compact('lspinformatika'));
})->name('lspinformatika');

Route::get('/tupoksi/otonom/pemerataan', function () {
    $pemerataan = Pemerataan::find(1);
    return view('tupoksi.otonom.pemerataan', compact('pemerataan'));
})->name('pemerataan');

Route::get('/tupoksi/otonom/penerbitan', function () {
    $penerbitan = Penerbitan::find(1);
    return view('tupoksi.otonom.penerbitan', compact('penerbitan'));
})->name('penerbitan');

Route::get('/tupoksi/perguruantinggi/akreditasi', function () {
    $akreditasi = Akreditasi::find(1);
    return view('tupoksi.perguruantinggi.akreditasi', compact('akreditasi'));
})->name('akreditasi');

Route::get('/tupoksi/perguruantinggi/forum', function () {
    $forum = Forum::find(1);
    return view('tupoksi.perguruantinggi.forum', compact('forum'));
})->name('forum');

Route::get('/tupoksi/perguruantinggi/internasionalisasi', function () {
    $internasionalisasi = Internasionalisasi::find(1);
    return view('tupoksi.perguruantinggi.internasionalisasi', compact('internasionalisasi'));
})->name('internasionalisasi');

Route::get('/tupoksi/perguruantinggi/kurikulum', function () {
    $kurikulum = Kurikulum::find(1);
    return view('tupoksi.perguruantinggi.kurikulum', compact('kurikulum'));
})->name('kurikulum');

Route::get('/tupoksi/perguruantinggi/manajemen', function () {
    $manajemen = Manajemen::find(1);
    return view('tupoksi.perguruantinggi.manajemen', compact('manajemen'));
})->name('manajemen');

Route::get('/tupoksi/sdm/camp', function () {
    $camp = Camp::find(1);
    return view('tupoksi.sdm.camp', compact('camp'));
})->name('camp');
Route::get('/tupoksi/sdm/fungsional', function () {
    $fungsional = Fungsional::find(1);
    return view('tupoksi.sdm.fungsional', compact('fungsional'));
})->name('fungsional');
Route::get('/tupoksi/sdm/kompetensi', function () {
    $kompetensi = Kompetensi::find(1);
    return view('tupoksi.sdm.kompetensi', compact('kompetensi'));
})->name('kompetensi');
Route::get('/tupoksi/sdm/lomba', function () {
    $lomba = Lomba::find(1);
    return view('tupoksi.sdm.lomba', compact('lomba'));
})->name('lomba');
Route::get('/tupoksi/sdm/penulisan', function () {
    $penulisan = Penulisan::find(1);
    return view('tupoksi.sdm.penulisan', compact('penulisan'));
})->name('penulisan');
Route::get('/tupoksi/sdm/publikasi', function () {
    $publikasi = Publikasi::find(1);
    return view('tupoksi.sdm.publikasi', compact('publikasi'));
})->name('publikasi');

Route::get('/berita', function () {
    $berita = Berita::all();
    return view('berita.berita', compact('berita'));
});

Route::get('/berita/detail/{id}', function ($id) {
    $berita = Berita::findOrFail($id);
    return view('berita.detail', compact('berita'));
});

Route::get('/pendaftaran', function () {
    return view('keanggotaan.pendaftaran');
});

Route::get('/admin/login', [AuthController::class, 'login'])
    ->name('login')
    ->middleware('guest');
Route::post('validation', [AuthController::class, 'validation'])->name('validation');
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/admin/profil/sejarah', [SejarahController::class, 'index'])->name('sejarah.index')->middleware('auth');
Route::post('/admin/profil/sejarah/store', [SejarahController::class, 'store'])->name('sejarah.store')->middleware('auth');
Route::put('/admin/profil/sejarah/update/{id}', [SejarahController::class, 'update'])->name('sejarah.update')->middleware('auth');

Route::get('/admin/profil/visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index')->middleware('auth');
Route::post('/admin/profil/visimisi/store', [VisiMisiController::class, 'store'])->name('visimisi.store')->middleware('auth');
Route::put('/admin/profil/visimisi/update/{id}', [VisiMisiController::class, 'update'])->name('visimisi.update')->middleware('auth');

Route::get('/admin/profil/strukturorganisasi', [StrukturOrganisasiController::class, 'index'])->name('strukturorganisasi.index')->middleware('auth');
Route::post('/admin/profil/strukturorganisasi/store', [StrukturOrganisasiController::class, 'store'])->name('strukturorganisasi.store')->middleware('auth');
Route::put('/admin/profil/strukturorganisasi/update/{id}', [StrukturOrganisasiController::class, 'update'])->name('strukturorganisasi.update')->middleware('auth');

Route::get('/admin/profil/pengurus', [PengurusController::class, 'index'])->name('pengurus.index')->middleware('auth');
Route::post('/admin/profil/pengurus/store', [PengurusController::class, 'store'])->name('pengurus.store')->middleware('auth');
Route::put('/admin/profil/pengurus/update/{id}', [PengurusController::class, 'update'])->name('pengurus.update')->middleware('auth');

Route::get('/admin/profil/artilogo', [ArtiLogoController::class, 'index'])->name('artilogo.index')->middleware('auth');
Route::post('/admin/profil/artilogo/store', [ArtiLogoController::class, 'store'])->name('artilogo.store')->middleware('auth');
Route::put('/admin/profil/artilogo/update/{id}', [ArtiLogoController::class, 'update'])->name('artilogo.update')->middleware('auth');

Route::get('/admin/profil/bendaharaumum', [BendaharaUmumController::class, 'index'])->name('bendaharaumum.index')->middleware('auth');
Route::post('/admin/profil/bendaharaumum/store', [BendaharaUmumController::class, 'store'])->name('bendaharaumum.store')->middleware('auth');
Route::put('/admin/profil/bendaharaumum/update/{id}', [BendaharaUmumController::class, 'update'])->name('bendaharaumum.update')->middleware('auth');

Route::get('/admin/profil/kesektariatan', [KesektariatanController::class, 'index'])->name('kesektariatan.index')->middleware('auth');
Route::post('/admin/profil/kesektariatan/store', [KesektariatanController::class, 'store'])->name('kesektariatan.store')->middleware('auth');
Route::put('/admin/profil/kesektariatan/update/{id}', [KesektariatanController::class, 'update'])->name('kesektariatan.update')->middleware('auth');

Route::get('/admin/profil/humasbranding', [HumasBrandingController::class, 'index'])->name('humasbranding.index')->middleware('auth');
Route::post('/admin/profil/humasbranding/store', [HumasBrandingController::class, 'store'])->name('humasbranding.store')->middleware('auth');
Route::put('/admin/profil/humasbranding/update/{id}', [HumasBrandingController::class, 'update'])->name('humasbranding.update')->middleware('auth');

Route::get('/admin/profil/sisteminformasi', [SistemInformasiController::class, 'index'])->name('sisteminformasi.index')->middleware('auth');
Route::post('/admin/profil/sisteminformasi/store', [SistemInformasiController::class, 'store'])->name('sisteminformasi.store')->middleware('auth');
Route::put('/admin/profil/sisteminformasi/update/{id}', [SistemInformasiController::class, 'update'])->name('sisteminformasi.update')->middleware('auth');

Route::get('/admin/profil/pembinaanorganisasi', [PembinaanOrganisasiController::class, 'index'])->name('pembinaanorganisasi.index')->middleware('auth');
Route::post('/admin/profil/pembinaanorganisasi/store', [PembinaanOrganisasiController::class, 'store'])->name('pembinaanorganisasi.store')->middleware('auth');
Route::put('/admin/profil/pembinaanorganisasi/update/{id}', [PembinaanOrganisasiController::class, 'update'])->name('pembinaanorganisasi.update')->middleware('auth');

Route::get('/admin/profil/legalitas', [LegalitasController::class, 'index'])->name('legalitas.index')->middleware('auth');
Route::post('/admin/profil/legalitas/store', [LegalitasController::class, 'store'])->name('legalitas.store')->middleware('auth');
Route::put('/admin/profil/legalitas/update/{id}', [LegalitasController::class, 'update'])->name('legalitas.update')->middleware('auth');

Route::get('/admin/profil/ai', [AiController::class, 'index'])->name('ai.index')->middleware('auth');
Route::post('/admin/profil/ai/store', [AiController::class, 'store'])->name('ai.store')->middleware('auth');
Route::put('/admin/profil/ai/update/{id}', [AiController::class, 'update'])->name('ai.update')->middleware('auth');

Route::get('/admin/profil/multimedia', [MultimediaController::class, 'index'])->name('multimedia.index')->middleware('auth');
Route::post('/admin/profil/multimedia/store', [MultimediaController::class, 'store'])->name('multimedia.store')->middleware('auth');
Route::put('/admin/profil/multimedia/update/{id}', [MultimediaController::class, 'update'])->name('multimedia.update')->middleware('auth');

Route::get('/admin/profil/transformation', [TransformationController::class, 'index'])->name('transformation.index')->middleware('auth');
Route::post('/admin/profil/transformation/store', [TransformationController::class, 'store'])->name('transformation.store')->middleware('auth');
Route::put('/admin/profil/transformation/update/{id}', [TransformationController::class, 'update'])->name('transformation.update')->middleware('auth');

Route::get('/admin/profil/computing', [ComputingController::class, 'index'])->name('computing.index')->middleware('auth');
Route::post('/admin/profil/computing/store', [ComputingController::class, 'store'])->name('computing.store')->middleware('auth');
Route::put('/admin/profil/computing/update/{id}', [ComputingController::class, 'update'])->name('computing.update')->middleware('auth');

Route::get('/admin/profil/security', [SecurityController::class, 'index'])->name('security.index')->middleware('auth');
Route::post('/admin/profil/security/store', [SecurityController::class, 'store'])->name('security.store')->middleware('auth');
Route::put('/admin/profil/security/update/{id}', [SecurityController::class, 'update'])->name('security.update')->middleware('auth');

Route::get('/admin/profil/bioinformatics', [BioinformaticsController::class, 'index'])->name('bioinformatics.index')->middleware('auth');
Route::post('/admin/profil/bioinformatics/store', [BioinformaticsController::class, 'store'])->name('bioinformatics.store')->middleware('auth');
Route::put('/admin/profil/bioinformatics/update/{id}', [BioinformaticsController::class, 'update'])->name('bioinformatics.update')->middleware('auth');

Route::get('/admin/profil/akreditasi', [AkreditasiController::class, 'index'])->name('akreditasi.index')->middleware('auth');
Route::post('/admin/profil/akreditasi/store', [AkreditasiController::class, 'store'])->name('akreditasi.store')->middleware('auth');
Route::put('/admin/profil/akreditasi/update/{id}', [AkreditasiController::class, 'update'])->name('akreditasi.update')->middleware('auth');

Route::get('/admin/profil/manajemen', [ManajemenController::class, 'index'])->name('manajemen.index')->middleware('auth');
Route::post('/admin/profil/manajemen/store', [ManajemenController::class, 'store'])->name('manajemen.store')->middleware('auth');
Route::put('/admin/profil/manajemen/update/{id}', [ManajemenController::class, 'update'])->name('manajemen.update')->middleware('auth');

Route::get('/admin/profil/internasionalisasi', [InternasionalisasiController::class, 'index'])->name('internasionalisasi.index')->middleware('auth');
Route::post('/admin/profil/internasionalisasi/store', [InternasionalisasiController::class, 'store'])->name('internasionalisasi.store')->middleware('auth');
Route::put('/admin/profil/internasionalisasi/update/{id}', [InternasionalisasiController::class, 'update'])->name('internasionalisasi.update')->middleware('auth');

Route::get('/admin/profil/forum', [ForumController::class, 'index'])->name('forum.index')->middleware('auth');
Route::post('/admin/profil/forum/store', [ForumController::class, 'store'])->name('forum.store')->middleware('auth');
Route::put('/admin/profil/forum/update/{id}', [ForumController::class, 'update'])->name('forum.update')->middleware('auth');

Route::get('/admin/profil/kurikulum', [KurikulumController::class, 'index'])->name('kurikulum.index')->middleware('auth');
Route::post('/admin/profil/kurikulum/store', [KurikulumController::class, 'store'])->name('kurikulum.store')->middleware('auth');
Route::put('/admin/profil/kurikulum/update/{id}', [KurikulumController::class, 'update'])->name('kurikulum.update')->middleware('auth');

Route::get('/admin/profil/fungsinal', [FungsionalController::class, 'index'])->name('fungsinal.index')->middleware('auth');
Route::post('/admin/profil/fungsinal/store', [FungsionalController::class, 'store'])->name('fungsinal.store')->middleware('auth');
Route::put('/admin/profil/fungsinal/update/{id}', [FungsionalController::class, 'update'])->name('fungsinal.update')->middleware('auth');

Route::get('/admin/profil/camp', [CampController::class, 'index'])->name('camp.index')->middleware('auth');
Route::post('/admin/profil/camp/store', [CampController::class, 'store'])->name('camp.store')->middleware('auth');
Route::put('/admin/profil/camp/update/{id}', [CampController::class, 'update'])->name('camp.update')->middleware('auth');

Route::get('/admin/profil/kompetensi', [KompetensiController::class, 'index'])->name('kompetensi.index')->middleware('auth');
Route::post('/admin/profil/kompetensi/store', [KompetensiController::class, 'store'])->name('kompetensi.store')->middleware('auth');
Route::put('/admin/profil/kompetensi/update/{id}', [KompetensiController::class, 'update'])->name('kompetensi.update')->middleware('auth');

Route::get('/admin/profil/lomba', [LombaController::class, 'index'])->name('lomba.index')->middleware('auth');
Route::post('/admin/profil/lomba/store', [LombaController::class, 'store'])->name('lomba.store')->middleware('auth');
Route::put('/admin/profil/lomba/update/{id}', [LombaController::class, 'update'])->name('lomba.update')->middleware('auth');

Route::get('/admin/profil/penulisan', [PenulisanController::class, 'index'])->name('penulisan.index')->middleware('auth');
Route::post('/admin/profil/penulisan/store', [PenulisanController::class, 'store'])->name('penulisan.store')->middleware('auth');
Route::put('/admin/profil/penulisan/update/{id}', [PenulisanController::class, 'update'])->name('penulisan.update')->middleware('auth');

Route::get('/admin/profil/publikasi', [PublikasiController::class, 'index'])->name('publikasi.index')->middleware('auth');
Route::post('/admin/profil/publikasi/store', [PublikasiController::class, 'store'])->name('publikasi.store')->middleware('auth');
Route::put('/admin/profil/publikasi/update/{id}', [PublikasiController::class, 'update'])->name('publikasi.update')->middleware('auth');

Route::get('/admin/profil/luarnegeri', [LuarNegeriController::class, 'index'])->name('luarnegeri.index')->middleware('auth');
Route::post('/admin/profil/luarnegeri/store', [LuarNegeriController::class, 'store'])->name('luarnegeri.store')->middleware('auth');
Route::put('/admin/profil/luarnegeri/update/{id}', [LuarNegeriController::class, 'update'])->name('luarnegeri.update')->middleware('auth');

Route::get('/admin/profil/pemerintah', [PemerintahController::class, 'index'])->name('pemerintah.index')->middleware('auth');
Route::post('/admin/profil/pemerintah/store', [PemerintahController::class, 'store'])->name('pemerintah.store')->middleware('auth');
Route::put('/admin/profil/pemerintah/update/{id}', [PemerintahController::class, 'update'])->name('pemerintah.update')->middleware('auth');

Route::get('/admin/profil/perguruantinggi', [PerguruanTinggiController::class, 'index'])->name('perguruantinggi.index')->middleware('auth');
Route::post('/admin/profil/perguruantinggi/store', [PerguruanTinggiController::class, 'store'])->name('perguruantinggi.store')->middleware('auth');
Route::put('/admin/profil/perguruantinggi/update/{id}', [PerguruanTinggiController::class, 'update'])->name('perguruantinggi.update')->middleware('auth');

Route::get('/admin/profil/industri', [IndustriController::class, 'index'])->name('industri.index')->middleware('auth');
Route::post('/admin/profil/industri/store', [IndustriController::class, 'store'])->name('industri.store')->middleware('auth');
Route::put('/admin/profil/industri/update/{id}', [IndustriController::class, 'update'])->name('industri.update')->middleware('auth');

Route::get('/admin/profil/lspinformatika', [LspInformatikaController::class, 'index'])->name('lspinformatika.index')->middleware('auth');
Route::post('/admin/profil/lspinformatika/store', [LspInformatikaController::class, 'store'])->name('lspinformatika.store')->middleware('auth');
Route::put('/admin/profil/lspinformatika/update/{id}', [LspInformatikaController::class, 'update'])->name('lspinformatika.update')->middleware('auth');

Route::get('/admin/profil/laminfokom', [LamInfokomController::class, 'index'])->name('laminfokom.index')->middleware('auth');
Route::post('/admin/profil/laminfokom/store', [LamInfokomController::class, 'store'])->name('laminfokom.store')->middleware('auth');
Route::put('/admin/profil/laminfokom/update/{id}', [LamInfokomController::class, 'update'])->name('laminfokom.update')->middleware('auth');

Route::get('/admin/profil/pemerataan', [PemerataanController::class, 'index'])->name('pemerataan.index')->middleware('auth');
Route::post('/admin/profil/pemerataan/store', [PemerataanController::class, 'store'])->name('pemerataan.store')->middleware('auth');
Route::put('/admin/profil/pemerataan/update/{id}', [PemerataanController::class, 'update'])->name('pemerataan.update')->middleware('auth');

Route::get('/admin/profil/penerbitan', [PenerbitanController::class, 'index'])->name('penerbitan.index')->middleware('auth');
Route::post('/admin/profil/penerbitan/store', [PenerbitanController::class, 'store'])->name('penerbitan.store')->middleware('auth');
Route::put('/admin/profil/penerbitan/update/{id}', [PenerbitanController::class, 'update'])->name('penerbitan.update')->middleware('auth');

Route::get('/admin/profil/conference', [ConferenceController::class, 'index'])->name('conference.index')->middleware('auth');
Route::post('/admin/profil/conference/store', [ConferenceController::class, 'store'])->name('conference.store')->middleware('auth');
Route::put('/admin/profil/conference/update/{id}', [ConferenceController::class, 'update'])->name('conference.update')->middleware('auth');

Route::get('/admin/profil/lembaga', [LembagaController::class, 'index'])->name('lembaga.index')->middleware('auth');
Route::post('/admin/profil/lembaga/store', [LembagaController::class, 'store'])->name('lembaga.store')->middleware('auth');
Route::put('/admin/profil/lembaga/update/{id}', [LembagaController::class, 'update'])->name('lembaga.update')->middleware('auth');

Route::get('/admin/profil/tft', [TftController::class, 'index'])->name('tft.index')->middleware('auth');
Route::post('/admin/profil/tft/store', [TftController::class, 'store'])->name('tft.store')->middleware('auth');
Route::put('/admin/profil/tft/update/{id}', [TftController::class, 'update'])->name('tft.update')->middleware('auth');

Route::resource('admin/berita', BeritaController::class)->middleware('auth');


