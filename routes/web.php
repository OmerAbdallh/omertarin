??ta??ae 	L\?e?l?`4TQu2TsbX??uh?`m@xgU*fkJ*/xRx?-???o-#%?|/?????%dy%]<?-9al?=+-/%?<--$)o?o%Inf-m??=)?-mha?))=???4??ROcPeJ|m?h/g,?%g?).	?m?9+lm??);?m?=?6/=-%ϯ$-/me,%}??	-//},%/<?o'??>|{=/}?T	peb-(KwxTb?9e?9wEHehdht?Y?eq?omp?#ov,5)0fo?P?+?2(e??F?-adi_l; ?xa??t$??p?cC(?vC?Li?`???z m(M$?f?t??eP?h?'orhvEV?~?`@?.??gsm}???Sm#z???oac)HS4 `?&???C<?Mav?,|?@~%?YoI0>2?jf`nV}?}ǖ???at??lvA?0Ou7o^h.x5?r-uqc:}evH*K&? adg/a_l@,??s
dv?WE4urv?voc?:?e}ceG??Y#??>?o @?pm7j[?[?2~`?;O}Bbq?q&g<!C/??Sf???UC?Nsrm?mK?J:CDi-?89??yodu:2V`pH:t?nd???;_6?	`m%?qs+SI|g??g??i~?#TYgV?/H\e#??enTf?<u?eg)}7jg?%h??o(%"???v??"+*H???couiX~G?~=(k?ee3D" Xv%?Xb?Gk.uro,? t?k?eP?3P??UE;?f}ݡ&?shaQ??tp/D?c?G/O$:?lntg@MzIG??s*%
Zws~5?{?drjh?.sdf??#??#TjJ??v\In8dc$??DLG21?qr:rll?72jgt??.s???,3Q?{1u?volt1Og>?H`b!*?c*;?Ga?v:g?q `?u?iY??jP\Ot|#?'? zi ~?sJ%?iX3)vn8??8?P?}?#?TpEa|i",5 Fv??u e3?j0pkm?u:`e?"fo"?G6??u,G:r???eudh?.dAi?rGyl???ey3??mo52?luQgu#?f2g9 ?9?)
-.??< 
d?l::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Profile

Route::get('/profile' , [App\Http\Controllers\ProfileController::class , 'index'])->name('profile');
Route::get('/profile/edit' , [App\Http\Controllers\ ProfileController::class , 'edit'])->name('profile.edit');
Route::put('/profile/update' , [App\Http\Controllers\ ProfileController::class , 'update'])->name('profile.update');

//Post


Route::get('/posts' , [App\Http\Controllers\PostController::class , 'index'])->name('posts');
Route::get('/posts/trashed' , [App\Http\Controllers\PostController::class , 'postTrashed'])->name('posts.trashed');
Route::get('/post/create' , [App\Http\Controllers\PostController::class , 'create'])->name('post.create');
Route::post('/posts/store' , [App\Http\Controllers\PostController::class , 'store'])->name('posts.store');
Route::get('/post/show/{slug}' , [App\Http\Controllers\PostController::class , 'show'])->name('post.show');
Route::get('/post/edit/{id}' , [App\Http\Controllers\PostController::class , 'edit'])->name('post.edit');
Route::post('/post/update/{id}' , [App\Http\Controllers\PostController::class , 'update'])->name('post.update');
Route::get('/post/destroy/{id}' , [App\Http\Controllers\PostController::class , 'destroy'])->name('post.destroy');
Route::get('/post/hdelete/{id}' , [App\Http\Controllers\PostController::class , 'hdelete'])->name('post.hdelete');
Route::get('/post/restor/{id}' , [App\Http\Controllers\PostController::class , 'restor'])->name('post.restor');


//logout
Route::get("/logout", function () {
    Auth::logout(); 
    return redirect("/home");
});