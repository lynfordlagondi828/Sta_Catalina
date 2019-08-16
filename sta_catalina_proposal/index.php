<html>
    <head>
        <title>Municipality of Sta. Catalina</title>
        <link rel="icon" href="images/logo.jpg" type="image/jpg">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
        <link rel="stylesheet" href="jq-carousel-plugin.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
        <script src="jq-csrousel-plugin.js"></script>
        <style rel="stylesheet" type="text/css">

            html,body{
                width: 100%;
                height: 100%;
            }
            #box{
                position: relative;  
                width: 100%;
                height: 100%;
                overflow: hidden;   
                /* display: flex;
                justify-content: center;         */
            }
    </style>
    </head>

    <body>
        <!--Navigation Header!-->
        <?php require_once 'nav_bar.php'; ?>

        <script>
        $(function(){
            $("#box").jqCarouselImg({
                imgLen:5,
                imgUrl:[ 'images/mayor.jpg','images/sta.jpg','images/pakol.jpg','images/santahanon.jpg','images/senior.jpg',],
                speed:4000,
                direction:false,
            })
        });
    </script>
    <div style="background:#6200EE" id="box">
        <h5 style="color:white">&nbsp;<u>Republic of the Philippines</u></h5>
        <h3 style="color:white">&nbsp;Municipality of Sta. Catalina</h3>
        <h3 style="color:white">&nbsp;Santahanon</h3>
    </div>
    <div class="content"></div>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </body>
</html>