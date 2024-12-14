<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->addRedirect('/', '/auth/login');
$routes->get('run-migration', 'Home::runMigration');
$routes->get('api/simper/(:num)', 'Api\SimperController::getSimperById/$1');
// $routes->get('generate-bg-simper', 'DeptHead\PengajuanSimperController::generateIdCardBelakangBg');
// $routes->get('update-ttd-bg-simper/(:num)', 'DeptHead\PengajuanSimperController::updateTtdBgSimper/$1');
$routes->group('admin', function($routes) {
    $routes->group('management_account', function($routes) {
        $routes->group('karyawan', function($routes) {
            $routes->get('/', 'Admin\ManagementAccount\KaryawanController::index');
            $routes->get('post-add', 'Admin\ManagementAccount\KaryawanController::postAdd');
        });
    });
});
$routes->group('dept_head', function($routes) {
    $routes->group('id_card', function($routes) {
        $routes->get('/', 'DeptHead\PengajuanMinePermitController::index');
        $routes->get('detail/(:num)', 'DeptHead\PengajuanMinePermitController::detail/$1');
        $routes->get('detail/id_card/(:num)', 'DeptHead\PengajuanMinePermitController::detailIDCard/$1');
        $routes->post('post-instan-create', 'DeptHead\PengajuanMinePermitController::postInstanCreate');
        $routes->post('post-ajukan-minepermit', 'DeptHead\PengajuanMinePermitController::postAjukanMinePermit');
        $routes->post('post-delete', 'DeptHead\PengajuanMinePermitController::postDelete');
        $routes->post('post-continue-done', 'DeptHead\PengajuanMinePermitController::postContinueDone');
        $routes->get('detail-pengajuan/(:num)', 'DeptHead\PengajuanMinePermitController::detailPengajuan/$1');
    });
    $routes->group('profile', function($routes) {
        $routes->get('/', 'DeptHead\ProfileController::index');
        $routes->post('reset-password', 'DeptHead\ProfileController::resetPassword');
    });
    $routes->group('simper', function($routes) {
        $routes->get('/', 'DeptHead\PengajuanSimperController::index');
        $routes->get('detail/(:num)', 'DeptHead\PengajuanSimperController::detail/$1');
        $routes->get('detail/simper/(:num)', 'DeptHead\PengajuanSimperController::detailIDCard/$1');
        $routes->post('post-instan-create', 'DeptHead\PengajuanSimperController::postInstanCreate');
        $routes->post('post-delete', 'DeptHead\PengajuanSimperController::postDelete');
        $routes->post('post-ajukan-simper', 'DeptHead\PengajuanSimperController::postAjukanSimper');
        $routes->post('post-continue-done', 'DeptHead\PengajuanSimperController::postContinueDone');
        $routes->get('detail-pengajuan/(:num)', 'DeptHead\PengajuanSimperController::detailPengajuan/$1');

    });
    $routes->get('dashboard', 'DeptHead\DashboardController::index');
});
$routes->group('soh', function($routes) {
    $routes->group('id_card', function($routes) {
        $routes->get('/', 'SOH\PengajuanMinePermitController::index');
        $routes->get('detail/(:num)', 'SOH\PengajuanMinePermitController::detail/$1');
        $routes->get('detail/id_card/(:num)', 'SOH\PengajuanMinePermitController::detailIDCard/$1');
        $routes->post('post-instan-create', 'SOH\PengajuanMinePermitController::postInstanCreate');
        $routes->post('post-delete', 'SOH\PengajuanMinePermitController::postDelete');
        $routes->post('post-ajukan-minepermit', 'SOH\PengajuanMinePermitController::postAjukanMinePermit');
        $routes->get('detail-pengajuan/(:num)', 'SOH\PengajuanMinePermitController::detailPengajuan/$1');
        $routes->post('post-ajukan-approve', 'SOH\PengajuanMinePermitController::postAjukanApprove');
        $routes->post('post-ajukan-reject', 'SOH\PengajuanMinePermitController::postAjukanReject');
        $routes->post('post-continue-done', 'SOH\PengajuanMinePermitController::postContinueDone');
    });
    $routes->group('simper', function($routes) {
        $routes->get('/', 'SOH\PengajuanSimperController::index');
        $routes->get('detail/(:num)', 'SOH\PengajuanSimperController::detail/$1');
        $routes->get('detail/simper/(:num)', 'SOH\PengajuanSimperController::detailIDCard/$1');
        $routes->post('post-instan-create', 'SOH\PengajuanSimperController::postInstanCreate');
        $routes->post('post-delete', 'SOH\PengajuanSimperController::postDelete');
        $routes->post('post-ajukan-minepermit', 'SOH\PengajuanMinePermitController::postAjukanMinePermit');
        $routes->get('detail-pengajuan/(:num)', 'SOH\PengajuanSimperController::detailPengajuan/$1');
        $routes->post('post-ajukan-approve', 'SOH\PengajuanSimperController::postAjukanApprove');
        $routes->post('post-ajukan-reject', 'SOH\PengajuanSimperController::postAjukanReject');
    });
    $routes->group('profile', function($routes) {
        $routes->get('/', 'SOH\ProfileController::index');
        $routes->post('reset-password', 'SOH\ProfileController::resetPassword');
    });
    $routes->get('dashboard', 'SOH\DashboardController::index');
});
$routes->group('esr', function($routes) {
    $routes->group('id_card', function($routes) {
        $routes->get('/', 'ESR\PengajuanMinePermitController::index');
        $routes->get('detail/(:num)', 'ESR\PengajuanMinePermitController::detail/$1');
        $routes->get('detail/id_card/(:num)', 'ESR\PengajuanMinePermitController::detailIDCard/$1');
        $routes->post('post-instan-create', 'ESR\PengajuanMinePermitController::postInstanCreate');
        $routes->post('post-delete', 'ESR\PengajuanMinePermitController::postDelete');
        $routes->post('post-ajukan-minepermit', 'ESR\PengajuanMinePermitController::postAjukanMinePermit');
        $routes->get('detail-pengajuan/(:num)', 'ESR\PengajuanMinePermitController::detailPengajuan/$1');
        $routes->post('post-ajukan-approve', 'ESR\PengajuanMinePermitController::postAjukanApprove');
        $routes->post('post-ajukan-reject', 'ESR\PengajuanMinePermitController::postAjukanReject');
        $routes->post('post-continue-done', 'ESR\PengajuanMinePermitController::postContinueDone');
    });
    $routes->group('simper', function($routes) {
        $routes->get('/', 'ESR\PengajuanSimperController::index');
        $routes->get('detail/(:num)', 'ESR\PengajuanSimperController::detail/$1');
        $routes->get('detail/simper/(:num)', 'ESR\PengajuanSimperController::detailIDCard/$1');
        $routes->post('post-instan-create', 'ESR\PengajuanSimperController::postInstanCreate');
        $routes->post('post-delete', 'ESR\PengajuanSimperController::postDelete');
        $routes->post('post-ajukan-minepermit', 'ESR\PengajuanMinePermitController::postAjukanMinePermit');
        $routes->get('detail-pengajuan/(:num)', 'ESR\PengajuanSimperController::detailPengajuan/$1');
        $routes->post('post-ajukan-approve', 'ESR\PengajuanSimperController::postAjukanApprove');
        $routes->post('post-ajukan-reject', 'ESR\PengajuanSimperController::postAjukanReject');
    });
    $routes->group('profile', function($routes) {
        $routes->get('/', 'ESR\ProfileController::index');
        $routes->post('reset-password', 'ESR\ProfileController::resetPassword');
    });

    $routes->get('dashboard', 'ESR\DashboardController::index');
});
$routes->group('corpo', function($routes) {
    $routes->group('id_card', function($routes) {
        $routes->get('/', 'corpo\PengajuanMinePermitController::index');
        $routes->get('detail/(:num)', 'corpo\PengajuanMinePermitController::detail/$1');
        $routes->get('detail/id_card/(:num)', 'corpo\PengajuanMinePermitController::detailIDCard/$1');
        $routes->post('post-instan-create', 'corpo\PengajuanMinePermitController::postInstanCreate');
        $routes->post('post-delete', 'corpo\PengajuanMinePermitController::postDelete');
        $routes->post('post-ajukan-minepermit', 'corpo\PengajuanMinePermitController::postAjukanMinePermit');
        $routes->get('detail-pengajuan/(:num)', 'corpo\PengajuanMinePermitController::detailPengajuan/$1');
        $routes->post('post-ajukan-approve', 'corpo\PengajuanMinePermitController::postAjukanApprove');
        $routes->post('post-ajukan-reject', 'corpo\PengajuanMinePermitController::postAjukanReject');
        $routes->post('post-continue-done', 'corpo\PengajuanMinePermitController::postContinueDone');
    });
    $routes->group('simper', function($routes) {
        $routes->get('/', 'corpo\PengajuanSimperController::index');
        $routes->get('detail/(:num)', 'corpo\PengajuanSimperController::detail/$1');
        $routes->get('detail/simper/(:num)', 'corpo\PengajuanSimperController::detailIDCard/$1');
        $routes->post('post-instan-create', 'corpo\PengajuanSimperController::postInstanCreate');
        $routes->post('post-delete', 'corpo\PengajuanSimperController::postDelete');
        $routes->post('post-ajukan-minepermit', 'corpo\PengajuanMinePermitController::postAjukanMinePermit');
        $routes->get('detail-pengajuan/(:num)', 'corpo\PengajuanSimperController::detailPengajuan/$1');
        $routes->post('post-ajukan-approve', 'corpo\PengajuanSimperController::postAjukanApprove');
        $routes->post('post-ajukan-reject', 'corpo\PengajuanSimperController::postAjukanReject');
    });
    $routes->group('profile', function($routes) {
        $routes->get('/', 'corpo\ProfileController::index');
        $routes->post('reset-password', 'corpo\ProfileController::resetPassword');
    });

    $routes->get('dashboard', 'ESR\DashboardController::index');
});
$routes->get('test', 'DeptHead\PengajuanSimperController::test');
$routes->group('pengguna', function($routes) {
    $routes->get('dashboard', 'Pengguna\DashboardController::index');
    $routes->group('id_card', function($routes) {
        $routes->get('/', 'Pengguna\MinePermitController::index');
    });
    $routes->group('simper', function($routes) {
        $routes->get('/', 'Pengguna\SimperController::index');
        $routes->get('pernyataan-disiplin/(:num)', 'Pengguna\SimperController::pernyataanDisiplin/$1');
        $routes->post('post-pernyataan-disiplin/(:num)', 'Pengguna\SimperController::postPernyataanDisiplin/$1');
        $routes->get('post-test/(:num)/(:num)', 'Pengguna\SimperController::postTest/$1/$2');
        $routes->post('post-post-test/(:num)/(:num)', 'Pengguna\SimperController::postPostTest/$1/$2');
        $routes->post('post-create-biodata', 'Pengguna\SimperController::postCreateBiodata');
    });
    $routes->group('topup', function($routes) {
        $routes->get('/', 'Pengguna\TopupController::index');
        $routes->get('pernyataan-disiplin/(:num)', 'Pengguna\TopupController::pernyataanDisiplin/$1');
        $routes->post('post-pernyataan-disiplin/(:num)', 'Pengguna\TopupController::postPernyataanDisiplin/$1');
        $routes->get('post-test/(:num)/(:num)', 'Pengguna\TopupController::postTest/$1/$2');
        $routes->post('post-post-test/(:num)/(:num)', 'Pengguna\TopupController::postPostTest/$1/$2');
        $routes->post('post-create-biodata', 'Pengguna\TopupController::postCreateBiodata');
    });
    $routes->group('transfer', function($routes) {
        $routes->get('/', 'Pengguna\TransferController::index');
        $routes->get('pernyataan-disiplin/(:num)', 'Pengguna\TransferController::pernyataanDisiplin/$1');
        $routes->post('post-pernyataan-disiplin/(:num)', 'Pengguna\TransferController::postPernyataanDisiplin/$1');
        $routes->get('post-test/(:num)/(:num)', 'Pengguna\TransferController::postTest/$1/$2');
        $routes->post('post-post-test/(:num)/(:num)', 'Pengguna\TransferController::postPostTest/$1/$2');
        $routes->post('post-create-biodata', 'Pengguna\TransferController::postCreateBiodata');
    });
    $routes->group('profile', function($routes) {
        $routes->get('/', 'pengguna\ProfileController::index');
        $routes->post('reset-password', 'pengguna\ProfileController::resetPassword');
    });
});

$routes->group('scan', function($routes) {
    $routes->get('mine_permit/(:any)', 'Public\ScanController::minePermit/$1');
    $routes->get('simper/(:any)', 'Public\ScanController::simper/$1');
});
$routes->group('auth', function($routes) {
    $routes->get('login', 'Auth\AuthController::index');
    $routes->post('login/post-login', 'Auth\AuthController::postLogin');
    $routes->get('register', 'Auth\AuthController::register');
    $routes->post('register/post-register', 'Auth\AuthController::postRegister');
});

$routes->get('logout', 'Auth\AuthController::logout');
   