
        

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Palestra Inizio da Gennaio</title>     
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="bower_components/aos/dist/aos.css" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="d-flex flex-column h-100 bg-dark">
        <main class="flex-shrink-0"> 
        <x-navbar/>
        <div class="container px4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
            
            
            
          {{$slot}}
            </div>
           </div>
        </main>
        <script src="bower_components/aos/dist/aos.js"></script> 
        <x-footer/>
         
    </body>
</html>