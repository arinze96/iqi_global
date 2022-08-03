<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class,"index"])->name("app.home");
Route::get('/about', [UserController::class,"returnAbout"])->name("about");
Route::get('/stocks', [UserController::class,"returnstocks"])->name("stocks");
Route::get('/forex', [UserController::class,"returnforex"])->name("forex");
Route::get('/shares', [UserController::class,"returnshares"])->name("shares");
Route::get('/indices', [UserController::class,"returnindices"])->name("indices");
Route::get('/energies', [UserController::class,"returnenergies"])->name("energies");
Route::get('/precious_metal', [UserController::class,"returnprecious_metal"])->name("precious_metal");
Route::get('/bitcoin', [UserController::class,"returnbitcoin"])->name("bitcoin");
Route::get('/bitcoin_cash', [UserController::class,"returnbitcoin_cash"])->name("bitcoin_cash");
Route::get('/litecoin', [UserController::class,"returnlitecoin"])->name("litecoin");
Route::get('/ethereum', [UserController::class,"returnethereum"])->name("ethereum");
Route::get('/ripple', [UserController::class,"returnripple"])->name("ripple");
Route::get('/monero', [UserController::class,"returnmonero"])->name("monero");
Route::get('/dogecoin', [UserController::class,"returndogecoin"])->name("dogecoin");
Route::get('/dash', [UserController::class,"returndash"])->name("dash");
Route::get('/aeon', [UserController::class,"returnaeon"])->name("aeon");
Route::get('/grin', [UserController::class,"returngrin"])->name("grin");
Route::get('/beam', [UserController::class,"returnbeam"])->name("beam");
Route::get('/zcash', [UserController::class,"returnzcash"])->name("zcash");
Route::get('/pricing', [UserController::class,"returnPricing"])->name("pricing");
Route::get('/usdt', [UserController::class,"returnUSDT"])->name("usdt");
Route::get('/giveaway', [UserController::class,"returnGiveaway"])->name("giveaway");
Route::get('/diamondclub', [UserController::class,"returnDiamondClub"])->name("diamondclub");
Route::get('/investmentplans', [UserController::class,"returnInvestmentPlan"])->name("investmentplans");
Route::get("/register",[UserController::class,"register"])->name("user.register");
Route::get("/contact",[UserController::class,"returnContact"])->name("user.contact");
Route::get("/verifyEmail",[UserController::class,"verifyEmail"])->name("user.verifyEmail");
Route::get("/completeverifyEmail/{token}/{id}",[UserController::class,"completeverifyEmail"])->name("user.completeverifyEmail");

Route::get("/register/{ref?}",[UserController::class,"register"])->name("user.register");
Route::post("/register/{ref?}",[UserController::class,"register"])->name("user.register.post");
// Route::get("/forgot-password",[UserController::class,"forgotPasswordAdmin"])->name("user.forgot-password");
// Route::match(["get","post"],"/forgot-password",[UserController::class,"forgotPasswordAdmin"])->name("admin.forgot.password");
Route::get("/login",[UserController::class,"login"])->name("user.login");
Route::get("/faq",[UserController::class,"returnFAQ"])->name("user.faq");
Route::get("/privacy",[UserController::class,"returnPrivacy"])->name("user.privacy");
Route::get("/terms",[UserController::class,"returnTerms"])->name("user.terms");
Route::get("/wiki",[UserController::class,"returnwiki"])->name("user.wiki");
Route::get("/algorithm",[UserController::class,"returnalgorithm"])->name("user.algorithm");
Route::get("/basics",[UserController::class,"returnbasics"])->name("user.basics");
Route::get("/refprogram",[UserController::class,"returnrefprogram"])->name("user.refprogram");
Route::get("/comparison",[UserController::class,"returncomparison"])->name("user.comparison");
Route::get("/refFAQ",[UserController::class,"returnRefFAQ"])->name("user.refFAQ");
Route::get("/withdrawalList",[UserController::class,"returnWithdrawalList"])->name("user.withdrawal_list");
Route::get("/depositeList",[UserController::class,"returnDepositeList"])->name("user.deposit_list");
Route::get("/topInvestors",[UserController::class,"returnTopInvestor"])->name("user.top_investors");
Route::post("/login",[UserController::class,"login"])->name("user.login.post");
// Route::post("/person_loan",[UserController::class,"loan"])->name("user.loan");
// Route::post("/person_loan",[UserController::class,"loan"])->name("user.loan.post");
Route::get("/static/{name}",[UserController::class,"staticPages"])->name("user.pages.view");

Route::match(["get","post"],"/master/forgot-password",[UserController::class,"forgotPasswordAdmin"])->name("admin.forgot.password");
Route::match(["get","post"],"/master/reset-password/{email}/{token}",[UserController::class,"resePasswordAdmin"])->name("admin.reset.password");



// Customer Authenticated  Routes

Route::get("/customer/dashboard",[UserController::class,"dashboard"])->middleware(["auth"])->name("user.dashboard.view");
Route::get("/customer/deposit/{account}",[AccountController::class,"deposit"])->middleware(["auth"])->name("user.deposit.view");
Route::post("/account/process-deposit",[AccountController::class,"currencyConverter"])->middleware(["auth"])->name("user.deposit.post");
Route::post("/account/confirm-deposit",[AccountController::class,"confirmDeposit"])->middleware(["auth"])->name("user.deposit.confirm.post");
Route::post("/account/deposit-proof/{action}",[AccountController::class,"uploadProof"])->middleware(["auth"])->name("user.deposit.proof.post");
Route::get('/testmail', [UserController::class,"testmail"])->name("testmail");

//wallet
Route::match(["get","post"],"/wallet",[AccountController::class,"wallet"])->middleware(["auth"])->name("user.wallet.view");
Route::match(["get","post"],"/loan",[UserController::class,"loan"])->middleware(["auth"])->name("user.loan");

// withdrawal
Route::match(["get","post"],"/customer/withdraw",[AccountController::class,"withdrawFunds"])->middleware(["auth"])->name("user.withdraw.view");

// conversion 
Route::match(["post","get"],"/customer/convert",[AccountController::class,"convertFunds"])->middleware(["auth"])->name("user.conversion.view");

// plan
Route::match(["get","post"],"/customer/plan/{name}",[AccountController::class,"plans"])->middleware(["auth"])->name("user.plan.view");

// statistics
Route::get("/customer/statistics",[AccountController::class,"statistics"])->middleware(["auth"])->name("user.statistics.view");

// partners
Route::get("/customer/partners",[AccountController::class,"partners"])->middleware(["auth"])->name("user.partners.view");

// history
Route::get("/customer/history/{name}",[AccountController::class,"history"])->middleware(["auth"])->name("user.history.view");

// history
Route::match(["get","post"],"/customer/setting/{name}",[AccountController::class,"setting"])->middleware(["auth"])->name("user.setting.view");

// logout
Route::get("/customer/logout",[UserController::class,"logout"])->middleware(["auth"])->name("user.logout.view");






Route::get('/update', function () {
  Artisan::call('update:accurral');
});




// Administrator Non authenticated Route
Route::get("/admin/login",[UserController::class,"loginAdmin"])->name("admin.login");
Route::post("/admin/login",[UserController::class,"loginAdmin"])->name("admin.login.post");


// Admin Authenticated Route
Route::get("/admin/dashboard",[UserController::class,"dashboardAdmin"])->middleware(["auth","isAdmin"])->name("admin.dashboard.view");
Route::match(["get","post"],"/admin/deposits/{name}/{id?}",[UserController::class,"depositsAdmin"])->middleware(["auth","isAdmin"])->name("admin.deposit.view");
// Route::match(["get","post"],"/admin/addref/{name}",[UserController::class,"depositsAdmin"])->middleware(["auth","isAdmin"])->name("admin.deposit.view");
Route::match(["get","post"],"/admin/loans/{name}/{id?}",[UserController::class,"loanAdmin"])->middleware(["auth","isAdmin"])->name("admin.loan.view");
Route::match(["get","post"],"/admin/withdraw/{name}/{id?}",[UserController::class,"withdrawAdmin"])->middleware(["auth","isAdmin"])->name("admin.withdraw.view");
Route::match(["get","post"],"/admin/investment/{name}/{id?}",[UserController::class,"investmentAdmin"])->middleware(["auth","isAdmin"])->name("admin.investment.view");
Route::match(["get","post"],"/admin/wallet/{name?}/{id?}/",[UserController::class,"walletAdmin"])->middleware(["auth","isAdmin"])->name("admin.wallet.view");
Route::match(["get","post"],"/admin/users/{name?}/{id?}",[UserController::class,"usersAdmin"])->middleware(["auth","isAdmin"])->name("admin.users.view");
Route::get("/admin/plans",[UserController::class,"plansAdmin"])->middleware(["auth","isAdmin"])->name("admin.plans.view");
Route::match(["get","post"],"/admin/application/{name?}",[UserController::class,"applicationAdmin"])->middleware(["auth","isAdmin"])->name("admin.application.view");
Route::match(["get","post"],"/admin/fake-transactions/{name?}/{id?}",[UserController::class,"fakeTransaction"])->middleware(["auth","isAdmin"])->name("admin.fake_transaction.view");
Route::get("/admin/profile",[UserController::class,"profileAdmin"])->middleware(["auth","isAdmin"])->name("admin.profile.view");
// logout
Route::get("/admin/logout",[UserController::class,"logoutAdmin"])->middleware(["auth"])->name("admin.logout");
Route::get("/admin/wallet/edit/{id}",[UserController::class,"editWalletAdmin"])->middleware(["auth","isAdmin"])->name("admin.wallet.edit.view");
Route::get("/admin/customer/edit-profile/{id}",[UserController::class,"editCustomerProfileAdmin"])->middleware(["auth","isAdmin"])->name("admin.customer.profile.view");
Route::get("/admin/customer/edit-password/{id}",[UserController::class,"editCustomerPasswordAdmin"])->middleware(["auth","isAdmin"])->name("admin.customer.password.view");
Route::match(["post","get"],"/admin/edit-plan/{id}",[UserController::class,"editPlanAdmin"])->middleware(["auth","isAdmin"])->name("admin.edit.plan.view");
Route::match(["post"],"/admin/delete-plan/{id}",[UserController::class,"deletePlanAdmin"])->middleware(["auth","isAdmin"])->name("admin.delete.plan.post");
Route::match(['get', 'post'], "/admin/add-plan",[UserController::class,"addPlanAdmin"])->middleware(["auth","isAdmin"])->name("admin.add.plan.view");
Route::get("/admin/edit-application/{id}",[UserController::class,"editApplicationAdmin"])->middleware(["auth","isAdmin"])->name("admin.edit.application.view");




Route::get('/linkstorage', function () {
  Artisan::call('storage:link');
});

// Route::get('/', [UserController::class,'index'])->name('index');
// Route::get('/index', [UserController::class,'index'])->name('index');
// Route::get('/about', [UserController::class,"about"])->name("about");
// Route::get('/contact', [UserController::class,"contact"])->name("contact");
// Route::get('/faq', [UserController::class,"faq"])->name("faq");
// Route::get('/investmentplans', [UserController::class,"investmentplans"])->name("investmentplans");
// Route::get('/login', [UserController::class,"login"])->name("login");
// Route::get('/terms', [UserController::class,"terms"])->name("terms");
// Route::get('/register', [UserController::class,"register"])->name("register");
