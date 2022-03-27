    <!DOCTYPE html>
    <html>
        <head>
            <title>WELCOME</title>
            <link rel="stylesheet" type="text/css" href=" css/01homeawal.css">
            
    </head>
    <body>
            <header class="header">
            <div class="halaman-informasi-keluhan">
              <ul>
                <h1> SISTEM INFORMASI SURVEI KEPUASAN MASYARAKAT</h1>
                  </div>
                  <hr></hr>
                  <form style="float:right; height: 100px; top: 20px;">
               
                  </form>
            
          </header>
    
       
        <hr></hr>
        
        <div class="welcome-box">
        <h2> CHOOSE LOGIN</h2>
     
        <form name="welcome" action="/loginAdmin" method="POST">
     @csrf
            <input type="image" src="img/welcomeAdmin2.jpeg" class = "welcomeAdmin" alt="Submit button " >
            </form>
            <form name="welcome" action="/login " method="POST">
        @csrf
           
            <input type="image" src="img/welcomeUser3.jpeg"  class = "welcomeUser1" alt="Submit button">
            
            
        </form>
        
    </div>
    
    </body>

    </html>





