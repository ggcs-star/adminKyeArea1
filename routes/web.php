<?php
use App\Http\Controllers\BuilderController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProjectFlagController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ParkingController;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\ModernFeaturesController;
use App\Http\Controllers\LifestyleController;
use App\Http\Controllers\LocalityDataController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\DashboardController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
+
require __DIR__.'/auth.php';


Route::get('/test-mongo', function () {
    $user = User::create([
        'name' => 'Khushi',
        'email' => 'khushi@example.com'
    ]);
    return User::all();
});


Route::middleware(['auth'])->group(function () {
 
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::get('/projects/{id}/view', [ProjectController::class, 'view'])->name('projects.view');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::get('/builder/create', [BuilderController::class, 'index'])->name('builder.create');
Route::post('/builder/store', [BuilderController::class, 'store'])->name('builder.store');
Route::get('/builder/{id}', [BuilderController::class, 'show'])->name('builder.show');



Route::get('/configurations', [ConfigurationController::class, 'index'])->name('configurations.index');
Route::post('/configurations', [ConfigurationController::class, 'store'])->name('configurations.store');
Route::put('/configurations/{project}', [ConfigurationController::class, 'update'])->name('configurations.update');
Route::delete('/configurations/{project}/{type}', [ConfigurationController::class, 'destroy'])->name('configurations.destroy');
Route::get('/configurations/{project}/{type}', [ConfigurationController::class, 'show'])->name('configurations.show');

 Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
 Route::get('/leads/{id}', [LeadController::class, 'show'])->name('leads.show');
Route::delete('/leads/{id}', [LeadController::class, 'destroy'])->name('leads.destroy');

Route::post('/projects/{id}/flags', [ProjectFlagController::class, 'update'])->name('projects.flags.update');
Route::get('/projects/{project}/flags', [ProjectFlagController::class, 'showFlags'])->name('projects.flags.show');

Route::post('/projects/{project}/specifications', [SpecificationController::class, 'store'])->name('projects.specifications.store');
Route::get('/specifications', [SpecificationController::class, 'index'])->name('specifications.index');
Route::delete('/specifications/{id}', [SpecificationController::class, 'destroy'])->name('specifications.destroy');
Route::put('/projects/{project}/specifications', [SpecificationController::class, 'update'])->name('projects.specifications.update');
Route::get('/specifications/{project}', [SpecificationController::class, 'show'])->name('specifications.show');


Route::get('/projects/building', [BuildingController::class, 'index'])->name('building.index');
Route::post('/projects/{project}/building', [BuildingController::class, 'store'])->name('building.store');
Route::put('/projects/{project}/building', [BuildingController::class, 'update'])->name('building.update');
Route::delete('/projects/{project}/building', [BuildingController::class, 'destroy'])->name('building.destroy');
Route::get('/projects/{project}/building', [BuildingController::class, 'show'])->name('building.show');

Route::prefix('projects')->group(function () {
    Route::get('/parking', [ParkingController::class, 'index'])->name('parking.index');
    Route::post('/{project}/parking', [ParkingController::class, 'store'])->name('parking.store');
    Route::put('/{project}/parking', [ParkingController::class, 'update'])->name('parking.update');
    Route::delete('/{project}/parking', [ParkingController::class, 'destroy'])->name('parking.destroy');
    Route::get('/{project}/parking', [ParkingController::class, 'show'])->name('parking.show');
});


Route::prefix('amenities')->name('amenities.')->group(function () {
    Route::get('/', [AmenitiesController::class, 'index'])->name('index');
    Route::post('/{project}/store', [AmenitiesController::class, 'store'])->name('store');
    Route::put('/{project}/update', [AmenitiesController::class, 'store'])->name('update');
    Route::delete('/{project}/delete', [AmenitiesController::class, 'destroy'])->name('destroy');
    Route::get('/{project}/show', [AmenitiesController::class, 'show'])->name('show');

});

Route::prefix('modern-features')->group(function () {
    Route::get('/', [ModernFeaturesController::class, 'index'])->name('modern-features.index');
    Route::post('/{project}/store', [ModernFeaturesController::class, 'store'])->name('modern-features.store');
    Route::put('/{project}/update', [ModernFeaturesController::class, 'update'])->name('modern-features.update');
    Route::delete('/{project}/delete', [ModernFeaturesController::class, 'destroy'])->name('modern-features.destroy');
    Route::get('/{project}/view', [ModernFeaturesController::class, 'show'])->name('modern-features.view');
});



Route::prefix("lifestyles")->group(function () {
    Route::get("/", [LifestyleController::class, "index"])->name("lifestyles.index");
    Route::post("/", [LifestyleController::class, "store"])->name("lifestyles.store");
    Route::put("/{id}", [LifestyleController::class, "update"])->name("lifestyles.update");
    Route::delete("/{id}", [LifestyleController::class, "destroy"])->name("lifestyles.destroy");
    Route::get('/{project}/view', [LifestyleController::class, 'show'])->name('lifestyles.view');
});

Route::prefix("localityData")->group(function () {
    Route::get("/", [LocalityDataController::class, "index"])->name("localityData.index");
    Route::post("/", [LocalityDataController::class, "store"])->name("localityData.store");
    Route::put("/{id}", [LocalityDataController::class, "update"])->name("localityData.update");
    Route::delete("/{id}", [LocalityDataController::class, "destroy"])->name("localityData.destroy");
    Route::get('/{project}/view', [LocalityDataController::class, 'show'])->name('localityData.view');
});

Route::prefix("sliders")->group(function () {
    Route::get("/", [SliderController::class, "index"])->name("sliders.index");
    Route::post("/", [SliderController::class, "store"])->name("sliders.store");
    Route::put("/{id}", [SliderController::class, "update"])->name("sliders.update");
       Route::delete("/{id}", [SliderController::class, "destroy"])->name("sliders.destroy");
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/analytics', [DashboardController::class, 'analytics'])->name('admin.analytics');
    
Route::get('/projects/searchAll', [ProjectController::class, 'allProjects']);

Route::get('/projects/search', function (Request $request) {
    $query = Project::query();

    if ($search = $request->input('q')) {
        $query->where('project.name', 'like', "%{$search}%");
    }

    $projects = $query->select('_id', 'project')->get()->map(function ($project) {
        return [
            'id' => $project->_id,
            'name' => $project->project['name'] ?? null,
        ];
    });

    return response()->json($projects);
});

});





