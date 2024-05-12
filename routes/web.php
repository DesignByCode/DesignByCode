<?php

    use App\Http\Controllers\Frontend\HomePageController;
    use App\Http\Controllers\Patterns\PatternsIndexController;
    use App\Http\Controllers\PatternsShowController;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\Sheets\Package\{PackageIndexController, PackageShowController};
    use App\Http\Controllers\Sheets\Packagist\PackagistIndexController;
    use App\Http\Controllers\Sheets\Packagist\PackagistShowController;
    use Illuminate\Support\Facades\Route;


    Route::get("/", HomePageController::class)->name("home");

    Route::get("/open-source/npm", PackageIndexController::class)->name("packages.index");
    Route::get("/open-source/npm/{package}", PackageShowController::class)->name("packages.show");


    Route::get("/open-source/packagist", PackagistIndexController::class)->name("packagist.index");
    Route::get("/open-source/packagist/{packagist}", PackagistShowController::class)->name("packagist.show");


    Route::get("/open-source/patterns", PatternsIndexController::class)->name("patterns.index");
    Route::get("/open-source/patterns/{pattern:slug}", PatternsShowController::class)->name("patterns.show");

    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

//    Route::get('posts', PostsIndexController::class)->name('posts.index');
//    Route::get('posts/{post:slug}', PostShowController::class)->name('posts.show');


    //    Route::get("dev-tools", DevToolsIndexController::class)->name("dev-tools.index");
//    Route::get('tools', ToolsPageIndexController::class)->name("tools");
//    Route::get("tools/random-password-generator", PasswordGeneratorController::class)->name("tools.password");

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';
