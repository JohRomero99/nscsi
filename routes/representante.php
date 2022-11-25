<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\completarPerfilController;
use App\Http\Controllers\Auth\ActualizarCorreoController;
use App\Http\Controllers\Representante\RepresentanteController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\CarritoController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\facturaTarjetaController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\PaymentezController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\cobroTarjetaController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\eliminarTarjetaController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\listadoTarjetaController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\reembolsoTarjetaController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\verificarTarjetaController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\pagosRealizadosController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\ambienteProduccionController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\informacionTrasanccionController;
use App\Http\Controllers\Representante\PasarelaPagos\Paymentez\guardarTarjetaController;
use App\Http\Controllers\Representante\PasarelaPagos\homeController;

// Route::get('', [RepresentanteController::class,'index'])->name('representante.home');

Route::get('home', [RepresentanteController::class,'home'])->name('representante.home');

// Rutas para actualizar y guardar contraseña.
Route::get('actualizar-contrasena', [completarPerfilController::class,'vistaActualizarContrasena'])->name('vista-actualizar-contrasena');
Route::post('actualizar-contrasena', [completarPerfilController::class,'datosActualizarContrasena'])->name('datos-actualizar-contrasena');

// Rutas para completar el Perfil y guardar de usuario.
Route::get('actualizar-perfil/{id}', [completarPerfilController::class,'vistaActualizarPerfil'])->name('vista-actualizar-perfil');
Route::post('actualizar-perfil/{id}', [completarPerfilController::class,'datosActualizarPerfil'])->name('datos-actualizar-perfil');

// Rutas para ingresar y guardar el correo.
Route::get('actualizar-correo', [completarPerfilController::class,'vistaActualizarCorreo'])->name('vista-actualizar-correo');
Route::post('actualizar-correo', [completarPerfilController::class,'datosActualizarCorreo'])->name('datos-actualizar-correo');

// Relaciones de persona con user y user con perfil.
Route::get('relacion-persona-user', [completarPerfilController::class,'relacionPersonaUser'])->name('relacion-persona-user');
Route::get('relacion-user-perfil', [completarPerfilController::class,'relacionUserPerfil'])->name('relacion-user-perfil');

// Rutas para actualizar correo y contraseña en el módulo de Usuario.
Route::post('/actualizar/correo/', [ActualizarCorreoController::class, 'correo'])->name('actualizar.correo');
Route::get('/actualizar/perfil/', [ActualizarCorreoController::class, 'vista'])->name('actualizar.vista');
Route::post('/actualizar/perfil/{id}', [ActualizarCorreoController::class, 'datos'])->name('actualizar.datos');
Route::get('/update/password/', [ActualizarCorreoController::class, 'updatePassword'])->name('update.password');

// Rutas para mostrar los saldos.
Route::get('/shopping/cart/', [carritoController::class, 'cart'])->name('shopping.cart');
Route::get('/shopping/cart/resume/', [carritoController::class, 'resume'])->name('shopping.resume');
Route::post('/shopping/cart/resume/update/', [carritoController::class, 'resumeUptade'])->name('shopping.resumeUptade');
Route::get('/shopping/cart/pay/{total}', [carritoController::class, 'pay'])->name('shopping.pay');
Route::get('/metodo/pago', [PaymentezController::class, 'metodoPago'])->name('metodo.pago');

// Rutas API Paymentez.
Route::post('/paymentez/buy/{token}', [cobroTarjetaController::class, 'paymentezBuy'])->name('paymentez.buy');
Route::get('/paymentez/add/card', [listadoTarjetaController::class, 'addcard'])->name('paymentez.agregarTarjeta');
Route::get('/paymentez/list/cards', [listadoTarjetaController::class, 'listcards'])->name('paymentez.formaPago');
Route::post('/paymentez/delete/card/{token}', [eliminarTarjetaController::class, 'deletecard'])->name('paymentez.delete');
Route::get('/paymentez/history', [reembolsoTarjetaController::class, 'paymenyhistory'])->name('paymentez.history');
Route::get('/paymentez/refound/{id}', [reembolsoTarjetaController::class, 'refound'])->name('paymentez.refound');
Route::get('/paymentez/verify/otp/{transaction}/{ruta}/{saldos}/{id}/{tamano}', [verificarTarjetaController::class, 'otp'])->name('paymentez.otp');
Route::post('/paymentez/verify/{transaction}/{ruta}', [verificarTarjetaController::class, 'verify'])->name('paymentez.verify');
Route::get('guardar/tarjetar/{bin}/{status}/{token}/{holder_name}/{expiry_year}/{expiry_month}/{transaction_reference}/{type}/{number}', [guardarTarjetaController::class, 'saveCards'])->name('guardar.tarjeta');

// Rutas para generar pdf y mostrar factura./
Route::get('/pagos-realizados', [pagosRealizadosController::class, 'pagosRealizados'])->name('pagos.realizados');
Route::get('/paymentez/facture/{id}', [facturaTarjetaController::class, 'facture'])->name('paymentez.facture');
Route::get('download-pdf/{voucher}', [facturaTarjetaController::class, 'downloadPdf'])->name('download-pdf');

// Ruta para enviar Correos.
Route::get('paymentez/mail/pago/{transaction}', [mailController::class, 'emailPago'])->name('email.pago');

//Url de ambiente y producción
Route::get('ambiente-produccion-vista', [ambienteProduccionController::class, 'ambienteProduccionVista'])->name('ambiente-produccion-vista');
Route::get('ambiente-produccion-datos', [ambienteProduccionController::class, 'ambienteProduccionDatos'])->name('ambiente-produccion-datos');

Route::get('informacion-transaccion', [informacionTrasanccionController::class, 'informacionTrasanccion'])->name('info-trasanccion');

Route::get('prueba/{id}/{saldos}', [informacionTrasanccionController::class, 'prueba'])->name('prueba');


