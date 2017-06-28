<!DOCTYPE html>
<HTML>
  <head>
    <link href="style.css"  rel="stylesheet" />
    <script  type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
    $("document").ready(function(){
      var a=0;
      var b=0;
      $('.menubar').css({'transform':'translate(500px,0px)','transition' : 'all 0.4s ease-in-out'});
      $('.menubar').hide();

    	$('#menubutton').click(function(){
        b=0;
        if(a==0&&b==0){
          $('#menubutton').css({'transform': 'rotate(90deg)','transition' : 'all 0.4s ease-in-out'});
          $('.menubar').show(50);
          $('.menubar').css({'transform':'translate(0px,0px)','transition' : 'all 0.4s ease-in-out'});

          a=1;b=1;
        }
        if(a==1&&b==0){
          $('#menubutton').css({'transform': 'rotate(0deg)','transition' : 'all 0.4s ease-in-out'});
          $('.menubar').css({'transform':'translate(500px,0px)','transition' : 'all 0.4s ease-in-out'});
          $('.menubar').hide(200);
          a=0;b=1;
        }

      });

    });
    </script>
  </head>
  <body>
    <div class="menubar">
      <ul>
        <li>Home</li>
        <li>Add Items</li>
        <li>Edit Items</li>
        <li>Help</li>
        <li>Contact Us</li>
      </ul>
    </div>
    <div class="header">
      <div class="title">
        Smart Shop
      </div>
      <div class="menu">
        <img src="menu.png" id="menubutton" />
      </div>
    </div>
    <div class="bar1">
      <div class="heading">
        Total Amount : Rs 500
      </div>
    </div>
    <div class="body">
      <div class="filling">
        Total Amount : Rs 500
      </div>
    </div>
  </body>
</HTML>
