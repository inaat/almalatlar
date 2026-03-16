<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/customers-clients', fn() => view('customers-clients'));
Route::get('/partners', fn() => view('partners'));
Route::get('/team-details', fn() => view('team-details'));
Route::get('/it-hardware-software', fn() => view('it-hardware-software'));
Route::get('/it-passive-equipment', fn() => view('it-passive-equipment'));

// Services
Route::get('/service', fn() => view('service.index'));
Route::get('/service/access-control-system', fn() => view('service.access-control-system'));
Route::get('/service/applications-development-services', fn() => view('service.applications-development-services'));
Route::get('/service/artificial-intelligence-ai', fn() => view('service.artificial-intelligence-ai'));
Route::get('/service/audio-visual-system', fn() => view('service.audio-visual-system'));
Route::get('/service/big-data', fn() => view('service.big-data'));
Route::get('/service/building-management-system', fn() => view('service.building-management-system'));
Route::get('/service/business-process-automation', fn() => view('service.business-process-automation'));
Route::get('/service/call-center-services', fn() => view('service.call-center-services'));
Route::get('/service/cctv-system', fn() => view('service.cctv-system'));
Route::get('/service/data-center-solutions-services', fn() => view('service.data-center-solutions-services'));
Route::get('/service/fire-alarm-fire-suspension-system', fn() => view('service.fire-alarm-fire-suspension-system'));
Route::get('/service/internet-of-things-iot', fn() => view('service.internet-of-things-iot'));
Route::get('/service/it-information-security', fn() => view('service.it-information-security'));
Route::get('/service/it-infrastructure-management', fn() => view('service.it-infrastructure-management'));
Route::get('/service/it-managed-services', fn() => view('service.it-managed-services'));
Route::get('/service/it-resource-outsourcing', fn() => view('service.it-resource-outsourcing'));
Route::get('/service/it-service-management', fn() => view('service.it-service-management'));
Route::get('/service/master-clock-system', fn() => view('service.master-clock-system'));
Route::get('/service/next-generation-data-centers', fn() => view('service.next-generation-data-centers'));
Route::get('/service/public-address-system', fn() => view('service.public-address-system'));
Route::get('/service/voice-over-ip-telephony-solutions-voip', fn() => view('service.voice-over-ip-telephony-solutions-voip'));
Route::get('/service/wireless-solutions', fn() => view('service.wireless-solutions'));
