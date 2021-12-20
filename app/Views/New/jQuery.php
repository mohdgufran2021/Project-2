<div class="container col-12">
    <div class="col-5">

        <input type="button" value="Input Button">
        <button>Click to Hide</button>


        <h2>This is Jquery 1.</h2>
        <p class="row">My Name is Gufran.</p>

        <h2 href="#">This is Jquery 2.</h2>
        <p>My Name is kamran.</p>


        <div id="1">
        <h2>This is Jquery 3.</h2>
        <p class="row">My Name is Salman.</p>

        <h2>This is Jquery 4.</h2>
        <p>My Name is Kashan.</p>
        </div>

        <a target="_blank" style="background-color: #6a1a21; color: white">Anchor Tag 1</a>
        <a target="_self" style="background-color: #6a1a21; color: white">Anchor Tag 2</a>

        <ul>
            <li>Mango</li>
            <li>Apple</li>
            <li>Banana</li>
            <li>Kiwi</li>
        </ul>

        <ul>
            <li>Kamran</li>
            <li>Gufran</li>
        </ul>

        <ul>
            <li>Delhi</li>
            <li>Noida</li>
            <li>Faizabad</li>
            <li>Kiwi</li>
        </ul>


        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Roll Number</th>
                <th>City</th>
            </tr>

            <tr>
                <td>Gufran</td>
                <td>1804040</td>
                <td>Lucknow</td>
            </tr>

            <tr>
                <td>Kamran</td>
                <td>1804041</td>
                <td>Faizabad</td>
            </tr>

            <tr>
                <td>A</td>
                <td>1</td>
                <td>L</td>
            </tr>

            <tr>
                <td>K</td>
                <td>2</td>
                <td>F</td>
            </tr>

            <tr>
                <td>G</td>
                <td>10</td>
                <td>Lu</td>
            </tr>

            <tr>
                <td>Ka</td>
                <td>180</td>
                <td>Faiz</td>
            </tr>
        </table>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    //1
    /*
   $(document).ready( function ()
    {
        $("button").click( function ()
        {
            $("p").hide();
        });
    });
    */



    //2    ( $("*") )selects all elements.
    /*
    $(document).ready( function ()
    {
        $("button").click( function ()
        {
            $("*").hide();
        });
    });
    */



    //3  ( $(this) ) Selects all elements.
    /*
     $(document).ready( function ()
         {
             $("button").click( function ()
              {
               $(this).hide();
              });
         })
     */




    //4 ( $("p.intro") ) selects all <p> with class intro.
    /*
       $(document).ready( function ()
       {
           $("button").click( function ()
           {
               $("p.row").hide();
           })
       })
   */



    //5  ( $("p:first") ) select the first <p> element.
    /*
         $(document).ready( function ()
        {
            $("button").click( function ()
            {
                $("p:first").hide();
            })
        })
    */




    //6 ( $("ul li:first") )    select the first <li> of the first <ul>.
    /*
        $(document).ready( function ()
        {
            $("button").click( function ()
            {
                $("ul li:first").hide();
            });
        });
    */



    //7   ( $("ul li:first-child") )   select the first element of every <ul>.
    /*
        $(document).ready(function () {
            $("button").click(function () {
                $("ul li:first-child").hide();
            });
        });
    */



    //8   ( $("[href]") )   select all elements with an href attribute.
    /*
        $(document).ready(function () {
            $("button").click(function () {
                $("[href]").hide();
            });
        });
    */



    //9    ( $("a[target='_blank']") )   select all <a> elements with a target attribute value is equal to "_bank".
    /*
        $(document).ready(function () {
            $("button").click(function () {
                $("a[target='_blank']").hide();
            });
        });
    */



    //10   ( $("a[target='_blank']") )   select all <a> elements with a target attribute value is not equal to "_bank".
    /*
         $(document).ready(function () {
            $("button").click(function () {
                $("a[target!='_blank']").hide();
            });
        });
    */



    //11   ( $(":button") )   select all <button> elements and <input> elements with type="button".
    /*
            $(document).ready(function () {
                $("button").click(function () {
                    $(":button").hide();
                });
            });
     */



    //12   ( $("tr:even") )   select all even <tr> elements.
    /*

        $(document).ready( function ()
        {
            $("button").click( function ()
            {
                $("tr:even").hide();
            });
        })
    */



    //13   ( $("tr:odd") )   select all odd <tr> elements.
    /*
        $(document).ready( function ()
        {
            $("button").click( function ()
            {
                $("tr:odd").hide();
            });
        })
        */




    //14   select all  <p> elements and hide slowly.
    /*
    $(document).ready( function ()
    {
        $("p").click( function ()
        {
            $(this).hide("slow");
        });
    });
    */



    //15   Toggle Between Hiding and Showing a <p> element.
    /*

        $(document).ready( function ()
        {
             $("button").click(function(){
                $("p").toggle();
             });
        });
    */


  //16   fadeOut("slow") = fade the all elements.
  /*
        $(document).ready( function ()
        {
             $("button").click(function(){
                $("div").fadeOut("slow");
             });
        });
    */





    //17   Fade the all elements with opacity 0.2 = fadeTo( "slow",0.2 ).
    /*
     $(document).ready(function () {
         $("button").click(function () {
             $("div").fadeTo("slow",0.5);
         });
     });
    */



    //18   fadeToggle() = fade selected element toggle.
   /*
    $(document).ready(function () {

        $("button").click(function(){
            $("#1").fadeToggle("1000");
        });
    });
    */




    //18   fadeToggle() = fade selected element toggle.
/*

    $(document).ready(function () {

        $("button").click(function(){
            $("#1").slideToggle();
        });
    });
*/




    //19   animate() = .
    /*

        $(document).ready(function () {
            $("button").click(function(){
                $("#1").animate({left: '250px'});
            });
        });
    */




    //20   animate() = .

    $(document).ready(function () {
        $("button").click(function(){
            $("#1").animate({height: '200px'});
        });
    });


</script>
