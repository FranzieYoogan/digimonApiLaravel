<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <link rel="stylesheet" href="{{asset('css/home.css')}}">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        <!-- Styles -->
       
    </head>

    <body onload="iconHeaderEvent();" class="antialiased">

     

        {{-- @foreach($api->content as $key => $data)
          
        <h1>{{$data->name}}</h1>

        @endforeach --}}
                
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/"> <img id="iconHeader" class="iconHeader" src="{{asset('img/icon/digimonEdit.jpg')}}" alt=""></a>
         
              <button  onclick="toggleEvent()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="listStyle collapse navbar-collapse" id="navbarSupportedContent">
             
                <form method="POST" action="" class="d-flex" >
                    @csrf
                    <ul id="list" class="list navbar-nav me-auto mb-2 mb-lg-0" >
                        <li class="nav-item">
                          <a onmouseover="anchorEvent()" id="anchorHome" class="anchorHome nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item" style="margin-right: 2em">
                          <a id="anchorAbout" class="anchorAbout nav-link" href="/about">About</a>
                        </li>


                        <script>
                            function anchorEvent() {
    
                                document.getElementById("anchorHome").style.color = '#5e7f64';
    
                            }
    
                            </script>

                        <script>


                            var click = 0

                                function toggleEvent() {
                                    click++;
                            
                                        if(click == 1) {

                                            document.getElementById('list').style.visibility = 'visible';
                                            document.getElementById('anchorHome').style.opacity = '1';
                                            document.getElementById('anchorHome').style.transition = '0s';
                                            document.getElementById('anchorAbout').style.transition = '0s';
                                            document.getElementById('anchorAbout').style.opacity = '1';
                                            document.getElementById('content').style.visibility = 'hidden';
                                            
                                        } else if(click == 2) {
                                            document.getElementById('anchorHome').style.transition = '0s';
                                            document.getElementById('anchorAbout').style.transition = '0s';
                                            document.getElementById('anchorHome').style.opacity = '0';
                                            document.getElementById('anchorAbout').style.opacity = '0';
                                            document.getElementById('list').style.visibility = 'hidden';
                                            document.getElementById('content').style.visibility = 'visible';
                                            click = 0;
                                        }
                                

                                }

                        </script>
                        
                    
                      
                  <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
                  <button class="buttonStyle btn btn-outline-success" type="submit" name="submit">Search</button>
                
                </ul>
                </form>
              </div>
            </div>
          </nav>

          <script>
            
            function iconHeaderEvent() {
                document.getElementById("anchorAbout").style.color = '#5e7f64';
                document.getElementById("anchorHome").style.color = '#5e7f64';
               document.getElementById("iconHeader").style.opacity = '1';
               document.getElementById("iconHeader").style.right = '-0.5em';

               if(window.location.href == "http://localhost:8000/") {

                document.getElementById("anchorAbout").style.opacity = '1';
                document.getElementById("anchorHome").style.color = '#9bc8cd';
                document.getElementById("anchorHome").style.transition = '3s';
                document.getElementById("anchorAbout").style.transition = '3s';
                document.getElementById("anchorAbout").style.color = '#5e7f64';
                document.getElementById("anchorHome").style.opacity = '1';
               }

               if(window.location.href == "http://localhost:8000/about") {

                document.getElementById("anchorAbout").style.opacity = '1';
                document.getElementById("anchorHome").style.opacity = '1';
                document.getElementById("anchorHome").style.transition = '3s';
                document.getElementById("anchorAbout").style.transition = '3s';
                document.getElementById("anchorAbout").style.color = '#9bc8cd';
document.getElementById("anchorHome").style.color = '#5e7f64';

}
               
   
           }
   
               </script>

            <section id="content" class="content">
        

            <h1 style="display: block">About</h1>
        

      

        </section>
        
    </body>
</html>
