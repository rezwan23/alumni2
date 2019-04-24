<?php
namespace App\Http\View\Composers;

use App\Info;
use Illuminate\View\View;
use App\Repositories\UserRepository;

class DataComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $meta;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->meta = Info::first();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['meta'=>$this->meta]);
    }
}