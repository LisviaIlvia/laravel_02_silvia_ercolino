<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rotte Parametriche</title>
    {{-- 
    Per eliminare le CDN, come prima cosa, dopo aver installato Node.js 
    * installo nel progetto nmp:
        - npm i
        verrà creata la cartella node_modules
    * adesso posso installare bootstrap:
        - npm i bootstrap      
         aggiungerà alla cartella node_modules la cartella di bootstrap

    Adesso posso usare le cartelle css e js presenti nella cartella resources. Mi sposto qui anche il file di css custom.
    importo nelle cartelle app.css e app.js bootstrap per rendelo disponibile sul browser.

    Lanciando il comando:
        - npm run dev 
        evito di dover refreshare ogni volta la pagina
    --}}

{{-- Uso la derettiva @vite per rendere disponibili bootstrap css e js nel mio codice --}}
    @vite(['resources/css/app.css', 'resources/js/app.js']);

</head>

<body>

    <x-navbar></x-navbar>

    {{ $slot }}

    <x-footer/>

</body>

</html>
