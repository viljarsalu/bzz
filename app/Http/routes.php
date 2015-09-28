<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('frontpage');
});
Route::get('/the-team', function () {
    return view('the-team');
});
Route::get('/the-team-davide-bizzi', function () {
    return view('the-team-davide-bizzi');
});
Route::get('/the-team-giuseppe-rossi', function () {
    return view('the-team-giuseppe-rossi');
});

/* Projects */
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/project-400-fifth-avenue', function () {
    return view('project-400-fifth-avenue');
});
Route::get('/project-milanosesto', function () {
    return view('project-milanosesto');
});
Route::get('/project-the-leonard', function () {
    return view('project-the-leonard');
});
Route::get('/project-soho-tower', function () {
    return view('project-soho-tower');
});
Route::get('/project-125-Greenwich', function () {
    return view('project-125-Greenwich');
});
Route::get('/project-8701-CollinsAv', function () {
    return view('project-8701-CollinsAv');
});
Route::get('/project-hotel-angst', function () {
    return view('project-hotel-angst');
});
Route::get('/project-galleria-passerella2', function () {
    return view('project-galleria-passerella2');
});
Route::get('/project-giardino-winter', function () {
    return view('project-giardino-winter');
});
Route::get('/project-marimonti', function () {
    return view('project-marimonti');
});
Route::get('/project-monte-rosa14', function () {
    return view('project-monte-rosa14');
});
Route::get('/project-san-babila5', function () {
    return view('project-san-babila5');
});
Route::get('/project-via-filelfo10', function () {
    return view('project-via-filelfo10');
});
Route::get('/project-via-mascagni1', function () {
    return view('project-via-mascagni1');
});
Route::get('/project-via-turati12', function () {
    return view('project-via-turati12');
});
Route::get('/project-via-xxiv-maggio', function () {
    return view('project-via-xxiv-maggio');
});
Route::get('/project-suur-karja1', function () {
    return view('project-suur-karja1');
});
Route::get('/project-viru1', function () {
    return view('project-viru1');
});
Route::get('/project-kohtu2', function () {
    return view('project-kohtu2');
});
Route::get('/project-toom-kooli2', function () {
    return view('project-toom-kooli2');
});
Route::get('/project-pikk66', function () {
    return view('project-pikk66');
});
Route::get('/project-vene9', function () {
    return view('project-vene9');
});
Route::get('/project-elisabetes3', function () {
    return view('project-elisabetes3');
});
Route::get('/project-estrela-do-atlantico', function () {
    return view('project-estrela-do-atlantico');
});
Route::get('/project-fazenda-olho-dagua', function () {
    return view('project-fazenda-olho-dagua');
});
Route::get('/project-playa-delfines', function () {
    return view('project-playa-delfines');
});
Route::get('/project-town-center', function () {
    return view('project-town-center');
});
Route::get('/project-edificio-atlantic', function () {
    return view('project-edificio-atlantic');
});




Route::get('/partnerships', function () {
    return view('partnerships');
});

Route::get('/contacts', function () {
    return view('contacts');
});

/* Image manipulation */
Route::get('/save-images/{w?}/{h?}', function($w=128,$h=128){
    $files = File::allFiles('images/projects/');///EdificioAtlantic
    
    //$newPath = explode('/','images/projects-original-images/americas/EdificioAtlantic');
    //return $newPath;
    $message = 'Processing...';
    echo $message;
    
    foreach ($files as $file){
        $test = preg_match( '/^\d/', $file->getFilename() );
        //print_r($test.' / '. $file->getFilename().' | ');
        //echo $file->getPath()."<br>";
        if( !$test ) 
        { 
            $img = Image::make($file);
            // add callback functionality to retain maximal original image size
            $img->fit($w, $h, function ($constraint) {
                $constraint->upsize();
            })->save($file->getPath().'/'.$w.'x'.$h.'_'.$file->getFilename());
        } /*else {
            echo("no ".$file->getFilename());
        }*/
        //var_dump( explode('/',$file->getPath()).). "\n<br>";
        //$img = Image::make($file)->resize(185, 200)->save('bar.jpg');
        // open file a image resource
        
        
    }
    //Storage::disk('local')->put('file.txt', 'Contents');
    $message = 'Done';
    return $message;
});