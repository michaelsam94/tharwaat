<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSettingsRequest;
use App\Repositories\SettingsRepository;
use App\Services\Helper\FileService;
use Exception;
class SettingsController extends Controller
{
    public function __construct(SettingsRepository $settingsRepo)
    {
        $this->settingsRepo = $settingsRepo;
    }

    public function edit()
    {
        $setting = $this->settingsRepo->getRow();
        return view('admin.pages.settings.edit')->with(compact('setting'));
    }

    public function update(UpdateSettingsRequest $request)
    {
        try {
            if ($request->hasFile('img'))
                $request['logo'] = FileService::saveFile($request->img, 'logos');
            $this->settingsRepo->update($request->all());
            return redirect()->back()->with('success','Settings updated successfully');
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }

}
