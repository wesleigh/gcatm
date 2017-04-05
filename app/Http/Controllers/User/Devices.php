<?php
namespace App\Http\Controllers\User;

use Redirect;
use Illuminate\Http\Request;
use App\Database\Devices as Device;

class Devices
{

  public function list ()
  {
    return view('user.devices')
      ->withPage('Registered Devices')
      ->withDevices(Device::orderBy('id', 'DESC')->get());
  }

  public function search (Request $request)
  {
    if (Device::where('serial_number','LIKE', '%' . $request->serial_number . '%')->count() > 0)
    {
      return view('user.devices')
        ->withPage('Matching Devices')
        ->withDevices(Device::where('serial_number', 'LIKE', '%' . $request->serial_number . '%')->get());
    }
    else
    {
      return Redirect::to('/devices/list')->withError('No similar devices found');
    }
  }

  public function create (Request $request)
  {
    $device                   = new Device;
    $device->asset_tag        = $request->asset_tag;
    $device->serial_number    = $request->serial_number;
    $device->machine_type     = $request->machine_type;
    $device->description      = $request->description;
    $device->location         = $request->location;
    $device->warranty_expire  = $request->warranty_expire;
    $device->user             = $request->user;
    $device->patch_range      = $request->patch_range;
    $device->save();

    return Redirect::to('/devices/list')->withSuccess('That device has been registered');
  }

  public function edit (Request $request)
  {
    if (Device::where('id', $request->id)->count() == 1)
    {
      $device                   = Device::where('id', $request->id)->first();
      $device->asset_tag        = $request->asset_tag;
      $device->serial_number    = $request->serial_number;
      $device->machine_type     = $request->machine_type;
      $device->description      = $request->description;
      $device->location         = $request->location;
      $device->warranty_expire  = $request->warranty_expire;
      $device->user             = $request->user;
      $device->patch_range      = $request->patch_range;
      $device->save();

      return Redirect::to('/devices/list')->withSuccess('That device has been updated');
    }
    else
    {
      return Redirect::to('/devices/list')->withError('That device could not be found');
    }
  }

  public function delete ($id)
  {
    if (Device::where('id', $id)->count() == 1)
    {
      Device::where('id', $id)->delete();
      return Redirect::to('/devices/list')->withSuccess('The device has been deleted from our registry');
    }
    else
    {
      return Redirect::to('/devices/list')->withError('That device could not be found');
    }
  }


}
