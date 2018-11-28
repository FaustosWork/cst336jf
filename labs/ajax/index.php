<!DOCTYPE html>
<html>
    <head> 
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="public/js/index.js" type= "module"></script>
    </head>
    
    <body>
        <main class="container row align center">
            <h1>Sign Up</h1>
             <form class="col l8 offset-l2">
                <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Username" id="username" type="text">
                    </div>
                    
                    <div class="input-field col s6">
                      <input placeholder="ZIP Code" id="zip-code" type="number">
                    </div>
                    
                    <div class="input-field col s6">
                        <select>
                        </select>
                    </div>
                    
                    <div class="input-field col s6">
                        <select>
                        </select>
                    </div>
                    
                    <div class="input-field col s6">
                      <input placeholder="Password" id="password" type="password">
                    </div>
                    <div class="input-field col s6">
                      <input placeholder="Confirm Password" id="confirm-password" type="password">
                    </div>
                </div>
                <br>
                <p id="form-status" class="error"></p>
                <br>
                <a id="confirm" class="waves-effect waves-light btn">Press this useless button to continue</a>
            </form>
            <div id="city-cont" class="col s12">
                <h3 id="city"></h3>
                <h5 id="lat-lng"><span id="lat"></span> <span id="lng"></span></h5>
            </div>
        </main>
    </body>
    
</html>