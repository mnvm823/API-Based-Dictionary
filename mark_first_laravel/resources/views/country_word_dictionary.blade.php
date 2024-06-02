<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DICTIONARY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    /> 
    <!-- Stylesheet -->
    <!-- <link href="{{ asset('style_Country.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('style_Word.css') }}" rel="stylesheet">

</head>
  <body>


      <div class="d-flex">

        <div class="p-2  mb-2 flex-fill .bg-dark.bg-gradient">
          <audio id="sound"></audio>
          <div class="container_2">
            <h1 class="text-center mb-3" >Dictionary</h1>
            <div class="search-box_2">
              <input
              type="text"
              placeholder="Type the word here.."
              id="inp-word"
              />
              <!-- <button id="search-btn_Word">Search</button> -->
              <button type="button" class="btn btn-info rounded-3 text-dark-emphasis m-3" id="search-btn_Word">Search</button>

            </div>
            <div class="result_Word" id="result_Word"></div>
          </div>
          <!-- Script -->
          <script src="{{ asset('script_Word.js') }}" defer></script>
        </div>
    </div>










    
    <!-- Script -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>