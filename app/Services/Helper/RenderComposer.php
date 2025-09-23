<?php

namespace App\Services\Helper;

use App\Repositories\GroupRepository;
use App\Repositories\SettingsRepository;
use Illuminate\View\View;

class RenderComposer
{
    protected $settingsRepo;

    public function __construct(
        SettingsRepository $settingsRepo,
        GroupRepository $groupRepo
    )
    {
        $this->settingsRepo = $settingsRepo;
        $this->groupRepo = $groupRepo;
    }
    public function compose(View $view)
    {
        $view->with([
            'setting' => $this->settingsRepo->getRow(),
            'front_groups' => $this->groupRepo->getAll()->get(),
        ]);
    }
}
