use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable; // Ensure HasApiTokens is added

    protected $fillable = [
        'name', 'email', 'password',
    ];
}
