<html>
  <head>
    
  </head>
            <style>
            body {
                text-align: center;
                /* padding: 40px 0; */
                background-image: url("images/ps.png");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                
            }
            h1 {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
            }
            p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size:20px;
            margin: 0;
            }
            span {
                color: white;
                font-size: 100px;
                line-height: 200px;
                margin-left:0px;
            }
            .card {
                background: white;
                padding: 60px;
                border-radius: 4px;
                box-shadow: 0 2px 3px #C8D0D8;
                display: inline-block;
                margin-top: 100px;
               


            }
            .retry {
              background-color: pink;
              color: white;
              width: 10%;
              padding: 10px;
              border: none;
              border-radius: 5px;
              cursor: pointer;
              margin-top: 20px;
            }

            .continue {
              background-color: pink;
              color: white;
              width: 10%;
              padding: 10px;
              border: none;
              border-radius: 5px;
              cursor: pointer;
              margin-top: 20px;


            }


            </style>
    <body>
       
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: red; margin:0 auto;">
        <span class="exclamation-point">!</span>
    </div>
    <div>
      <h1>Your payment failed.</h1>
      <p>Please try again.</p>

      
  </div>
</div>
<br>
<br>
      <br>
      <button class="retry">
        <a href="pays.php">Retry</a></button>
        <button class="continue">
        <a href="home.php">Continue Shopping</a></button>

</body>
</html>