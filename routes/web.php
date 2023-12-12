<?php

    use App\Http\Controllers\Frontend\HomePageController;
    use App\Http\Controllers\Patterns\PatternsIndexController;
    use App\Http\Controllers\PatternsShowController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\Sheets\SheetPackageIndexController;
    use App\Http\Controllers\Sheets\SheetPackageShowController;
    use Illuminate\Support\Facades\Route;


    Route::get("/", HomePageController::class)->name("home");
    Route::get("/open-source/npm", SheetPackageIndexController::class)->name("packages.index");
    Route::get("/open-source/npm/{package}", SheetPackageShowController::class)->name("packages.show");
    Route::get("/open-source/patterns", PatternsIndexController::class)->name("patterns.index");
    Route::get("/open-source/patterns/{pattern:slug}", PatternsShowController::class)->name("patterns.show");
//    Route::get("dev-tools", DevToolsIndexController::class)->name("dev-tools.index");

//    Route::get('tools', ToolsPageIndexController::class)->name("tools");
//    Route::get("tools/random-password-generator", PasswordGeneratorController::class)->name("tools.password");

//    Route::get('openai', OpenApiController::class)->name("openapi");

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';
