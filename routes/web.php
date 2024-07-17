<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//Rutas con controladores
Route::get('/', HomeController::class);

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('posts', PostController::class);

Route::get('prueba', function () {
    $post = Post::find(1);
    dd($post->is_active);
    // return $post->created_at->diffForHumans();
});

// //Ruta raiz
// Route::get('/', function () {
//     return view('welcome');
// });

// //Ruta basica para devolver un texto
// Route::get('/posts', function () {
//     return "Nuevo post";
// });

// //Ruta con parametro y respuesta dinamica
// Route::get('/saludar/{nombre}', function ($nombre) {
//     return "¡Hola, $nombre! ¿Cómo estás hoy?";
// });

// //Ruta con parametro opcional y respuesta dinamica
// Route::get('/opcional/{nombre?}', function ($nombre = null) {
//     if ($nombre) {
//         return "¡Hola, $nombre! ¿Cómo estás hoy?";
//     } else {
//         return "Por favor, ingresa un nombre.";
//     }
// });

// //Ruta para redireccionar a la raiz
// Route::get('/ir-a-inicio', function () {
//     return redirect('/');
// });

// //Ruta con codigo de estado HTTP personalizado
// Route::get('/error404', function () {
//     return abort(404);
// });

// //Ruta con middleware
// Route::get('/admin', function () {
//     return view('admin');
// })->middleware('auth'); //Redirecciona hacia la ruta login

// //Ruta para para login
// Route::get('/login', function () {
//     return 'login';
// })->name('login');

//Crear nuevo post
    // $post = new Post;

    // $post->title = 'Mi primer post A';
    // $post->content = 'Contenido del primer post A';
    // $post->categoria = 'Categoria A';

    // $post->save();

    // return $post;

//Actualizar registro
    // $post = Post::where('title', 'Mi primer post 2')->first();
    // $post->id = 2;
    // $post->save();
    // return $post;

    //listar registros
    // $posts = Post::orderBy('categoria', 'asc')->select('id','title', 'categoria')->take(2)->get();
    // return $posts;

    // $post = Post::find(1);
    // $post->delete();
    // return "Eliminado correctamente";