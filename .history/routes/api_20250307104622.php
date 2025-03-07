<?

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/salons', [SalonController::class, 'store']);
});
