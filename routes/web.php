<?php

use App\Models\PostTest;
use App\Models\Sertifikat;
use App\Models\TugasAdmin;
use App\Http\Middleware\MustPeserta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostTestController;
use App\Http\Controllers\TestUserController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\TugasAdminController;
use App\Http\Controllers\AbsenceCodeController;
use App\Http\Controllers\AbsenPesertaController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\StateEventController;
use App\Http\Controllers\UbahPasswordController;
use App\Http\Controllers\ZoomController;
use App\Models\Zoom;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::middleware('auth')->group(function () {

    Route::get('/welcome', [AbsenPesertaController::class, 'welcome'])->name('welcome')->middleware('user-page');

    Route::middleware('must-admin')->group(function () {
        Route::get('admin', [AdminController::class, 'dashboard'])->name('admin');

        Route::get('/token', [AdminController::class, 'token'])->name('token.index');
        Route::post('/token/activate/{id}', [AdminController::class, 'tokenAktivasi'])->name('token.activate');

        Route::get('/event/activate/', [StateEventController::class, 'activated'])->name('event.activate');
        Route::get('/event/deactivate/', [StateEventController::class, 'deactivated'])->name('event.deactivate');
    });

    Route::middleware('must-admin')->group(function () {
        Route::get('admin/absen', [AbsenController::class, 'index']);
    });

    Route::middleware('must-peserta')->group(function () {
        Route::get('/user', function () {
            return view('peserta.home');
        });
        Route::get('peserta', [AbsenPesertaController::class, 'index']);
        Route::middleware('state.event')->group(function () {
            Route::get('peserta/day/{day}', [AbsenPesertaController::class, 'day']);
            Route::get('peserta/finalDay', [AbsenPesertaController::class, 'finalDay']);
            Route::get('peserta/final-project', [AbsenPesertaController::class, 'finalProject']);
            Route::post('peserta/absen/{day}', [AbsenPesertaController::class, 'submitAbsen']);
            Route::post('peserta/tugas/{day}', [AbsenPesertaController::class, 'submitTugas']);
            Route::post('peserta/upload-posttest/{day}', [AbsenPesertaController::class, 'submitPosttest']);
            // Route::get('peserta/final-project', function () {
            //     return view('final-project.index');
            // });
        });
    });




    Route::prefix('/Materi')->middleware('must-admin')->group(function () {
        Route::get('Admin/Index', [MateriController::class, 'index'])->name('Materi.Index');
        Route::get('Admin/BuatMateri', [MateriController::class, 'create'])->name('Materi.Create');
        Route::post('Admin/Store', [MateriController::class, 'store'])->name('Materi.Store');
        Route::get('Admin/Edit/{id}', [MateriController::class, 'edit'])->name('Materi.Edit');
        Route::put('Admin/Update/{id}', [MateriController::class, 'update'])->name('Materi.Update');
        Route::delete('Admin/Delete/{id}', [MateriController::class, 'delete'])->name('Materi.Delete');

        // Route::get('/upload-bukti', [PesertaController::class, 'showUploadForm'])->name('upload.form');
        // Route::post('/upload-bukti', [PesertaController::class, 'uploadImage'])->name('upload.image');

    });

    // Route::prefix('/TugasAdmin')->middleware('must-admin')->group(function(){
    //     Route::get('Index', [TugasAdminController::class, 'index'])->name('TugasAdmin.Index');
    //     Route::get('BuatTugas', [TugasAdminController::class, 'create'])->name('TugasAdmin.Create');
    //     Route::post('Store', [TugasAdminController::class, 'store'])->name('TugasAdmin.Store');
    //     Route::get('Edit/{id}', [TugasAdminController::class, 'edit'])->name('TugasAdmin.Edit');
    //     Route::put('Update/{id}', [TugasAdminController::class, 'update'])->name('TugasAdmin.Update');
    //     Route::delete('Delete/{id}', [TugasAdminController::class, 'delete'])->name('TugasAdmin.Delete');
    // });


    // Route::middleware('must-admin')->group(function(){
    //     Route::get('admin/absen', [AbsenController::class, 'index']);
    // });

    // Route::middleware('must-peserta')->group(function(){
    //     Route::get('peserta/absen', [AbsenPesertaController::class, 'index']);
    //     Route::get('peserta/absen/submit', [AbsenPesertaController::class, 'submit']);
    // });
});


// NEW ROUTES
Route::prefix('users')->middleware('auth')->group(function () {
    Route::get('/password/change', [UbahPasswordController::class, 'index'])->name('password.change');
    Route::put('/password/update', [UbahPasswordController::class, 'update'])->name('password.update');
});

Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [SessionController::class, 'index'])->name('auth.login.view');
        Route::post('/login', [SessionController::class, 'loginFunc'])->name('auth.login');
        Route::get('/register', [SessionController::class, 'registerView'])->name('auth.register.view');
        Route::post('/register', [SessionController::class, 'registerFunc'])->name('auth.register');
        Route::post('/forgot-password', [SessionController::class, 'ForgotPassword'])->name('auth.forgot');
    });

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [SessionController::class, 'logout'])->name('auth.logout');
    });
});

// Bendahara 
Route::prefix('bendahara')->middleware('must-bendahara')->group(function () {
    Route::get('', [BendaharaController::class, 'index'])->name('bendahara.view');
    Route::get('export-users', [UserController::class, 'export'])->name('bendahara.export');
    Route::put('verification/{id}', [UserController::class, 'verification'])->name('bendahara.verification');
    Route::put('unverification/{id}', [UserController::class, 'unverification'])->name('bendahara.unverification');
});
Route::prefix('admin')->middleware('must-admin')->group(function () {
    Route::get('', [AdminController::class, 'dashboard'])->name('admin.view');

    Route::prefix('materials')->group(function () {
        Route::get('', [MateriController::class, 'index'])->name('materi.view');
        Route::get('/create', [MateriController::class, 'create'])->name('materi.create.view');
        Route::post('/create', [MateriController::class, 'store'])->name('materi.create');
        Route::get('/update/{id}', [MateriController::class, 'edit'])->name('materi.update.view');
        Route::put('/update/{id}', [MateriController::class, 'update'])->name('materi.update');
        Route::delete('/delete/{id}', [MateriController::class, 'delete'])->name('materi.delete');
    });

    Route::prefix('tasks')->group(function () {
        Route::get('', [TugasAdminController::class, 'index'])->name('tasks.view');
        Route::get('/create', [TugasAdminController::class, 'create'])->name('tasks.create.view');
        Route::post('/create', [TugasAdminController::class, 'store'])->name('tasks.create');
        Route::get('/show/{id}', [TugasAdminController::class, 'show'])->name('tasks.show');
        Route::get('/update/{id}', [TugasAdminController::class, 'edit'])->name('tasks.update.view');
        Route::put('/update/{id}', [TugasAdminController::class, 'update'])->name('tasks.update');
        Route::delete('/delete/{id}', [TugasAdminController::class, 'delete'])->name('tasks.delete');
    });

    Route::prefix('users')->group(function () {
        Route::get('', [UserController::class, 'index'])->name('users.view');
        Route::get('export-users', [UserController::class, 'export'])->name('users.export');
        Route::post('import-users', [UserController::class, 'import'])->name('users.import');
        Route::put('verification/{id}', [UserController::class, 'verification'])->name('users.verification');
        Route::put('unverification/{id}', [UserController::class, 'unverification'])->name('users.unverification');
        Route::put('reset-password/{id}', [UserController::class, 'resetPassword'])->name('users.reset-password');
        Route::post('link-group/{id}', [UserController::class, 'kelompok'])->name('users.link-group');
    });

    Route::prefix('absences')->group(function () {
        Route::get('', [AbsenController::class, 'index'])->name('absences.view');
    });

    Route::prefix('absences-code')->group(function () {
        Route::get('', [AbsenceCodeController::class, 'index'])->name('absences.code.view');
        Route::post('/activate/{id}', [AbsenceCodeController::class, 'activate'])->name('absences.code.activate');
        Route::post('/deactivate/{id}', [AbsenceCodeController::class, 'deactivate'])->name('absences.code.deactivate');
    });

    Route::prefix('assignment-collection')->group(function () {
        Route::get('', [TaskController::class, 'index'])->name('assignment.collection.view');
        Route::put('verification/{id}', [TaskController::class, 'VerifTugas'])->name('Task.verification');
        Route::put('Unverification/{id}', [TaskController::class, 'UnVerifTugas'])->name('Task.Unverification');
        Route::put('verificationFp/{id}', [TaskController::class, 'VerifTugasFp'])->name('Task.verificationFp');
        Route::put('ButuhPerbaikan/{id}', [TaskController::class, 'ButuhPerbaikan'])->name('Task.ButuhPerbaikan');
        Route::post('TambahNilai/{id}', [TaskController::class, 'TambahNilai'])->name('Task.TambahNilai');
    });

    // Post Tests Routes
    Route::prefix('tests')->group(function () {

        Route::get('', [PostTestController::class, 'index'])->name('tests.view');
        Route::post('/create', [PostTestController::class, 'store'])->name('tests.create');
        Route::post('/upload', [TaskController::class, 'upload'])->name('tests.upload');
        Route::put('/update/{id}', [PostTestController::class, 'update'])->name('tests.update');
        Route::delete('/delete/{id}', [PostTestController::class, 'delete'])->name('tests.delete');
    });

    // Post Test Collections Routes
    Route::prefix('test-collections')->group(function () {
        Route::get('', [TestUserController::class, 'index'])->name('test-collections.view');
        Route::post('/verification/{id}', [TestUserController::class, 'VerifPostTest'])->name('test-collections.verification');
        Route::post('/unverification/{id}', [TestUserController::class, 'UnverifPostTest'])->name('test-collections.unverification');
        Route::post('/reject/{id}', [TestUserController::class, 'TolakPostTest'])->name('test-collections.reject');
    });

    // Sertificates Routes
    Route::prefix('sertificates')->group(function () {
        Route::get('', [SertifikatController::class, 'index'])->name('sertificates.view');
        Route::post('/create', [SertifikatController::class, 'store'])->name('sertificates.create');
        Route::delete('/delete/{id}', [SertifikatController::class, 'destroy'])->name('sertificates.delete');
    });

    // User's Groups Routes
    Route::prefix('user-groups')->group(function () {
        Route::get('', function () {
            return view('admin.user-groups.index');
        });
        // Route::get('', [TaskController::class, 'index'])->name('sertificates.view');
        // Route::post('/create', [TaskController::class, 'store'])->name('sertificates.create');
        Route::put('/update/{id}', [TaskController::class, 'update'])->name('sertificates.update');
    });

    // FP Requirements Routes
    Route::prefix('fp-requirements')->group(function () {
        // Route::get('', function(){
        //     return view('admin.fp-requirements.index');
        // });
        Route::get('', [RequirementController::class, 'index'])->name('fp-requirements.view');
        Route::post('/create', [RequirementController::class, 'store'])->name('fp-requirements.create');
    });

    // Record Video Routes
    Route::prefix('records')->group(function () {
        Route::get('', [VideoController::class, 'index'])->name('records.view');
        Route::post('/create', [VideoController::class, 'store'])->name('records.create');
        Route::put('/update/{id}', [VideoController::class, 'update'])->name('records.update');
        Route::delete('/delete/{id}', [VideoController::class, 'delete'])->name('records.delete');
    });

    // Zoom Link Routes
    Route::prefix('zooms')->group(function () {
        Route::get('', [ZoomController::class, 'index'])->name('zooms.view');
        Route::post('/create', [ZoomController::class, 'store'])->name('zooms.create');
        Route::put('/update/{id}', [ZoomController::class, 'update'])->name('zooms.update');
        Route::delete('/delete/{id}', [ZoomController::class, 'delete'])->name('zooms.delete');
    });
});
