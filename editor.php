<!DOCTYPE html>
<html lang="tr">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></scrip>
    <scrip src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></scrip>
    <scrip src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js">
        </script>
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>

<body>

<?php  include("func.php"); ?>
<?php  include("getallword.php"); ?>

    <div class="container" style="background-color: #FDEBD0 ;border-style: double; ">

        <div class="form-floating m-2 " style="border-style: double;">
            <textarea onmouseleave="myFunction3()"     class="form-control shadow-lg p-3  bg-white rounded " placeholder="Buraya anlamını giriniz" id="floatingTextarea2" style="height: 220px ;border-style: double;"></textarea>

        </div>

        <div class="text-sm-right m-3"> <button class="btn btn-success btn-lg " id="datagetir" type="button">Analiz</button> </div>
        <div id="datalara"></div>
        </div>



         <script>
            function myFunction2(event) {
                                    
                var value = $(event).siblings('input').val();   
                var meaning=$(event).siblings('textarea').val(); 
                            
                $.ajax({
                        type: 'POST',
                        url: 'wordsave.php',
                        data: {meaning: meaning, value: value},
                    })
                    .done(function(selectedSeats2) {                  

                    })
                    .fail(function() {
                  
                    });                
                return false;
            }
        </script> 
        <div>
            <script>
                $(document).ready(function() {
                    $('#datagetir').click(function() {

                        var x = document.getElementById("floatingTextarea2").value;



                        $.ajax({
                            type: 'POST',
                            url: 'datasave.php',
                            data: "deger=" + x,
                            success: function(data) {
                                $('#datalara').html(data);
                            }
                        }).done(function(selectedSeats2) {

                        }).fail(function() {

                        });

                        return false;

                    });
                });
            </script>

            <script>
                function myFunction3() {
                
                    var x = document.getElementById("floatingTextarea2").value;
     
                      if(x){ 

                    $.ajax({
                        type: 'POST',
                        url: 'datasave.php',
                        data: "deger=" + x,
                        success: function(data) {
                            $('#datalara').html(data);
                        }
                    }).done(function(selectedSeats2) {

                    }).fail(function() {

                    });

                    return false;

                } }
            </script>
<script>
            function knowfunc(event) {
                                     
                var value = $(event).siblings('input').val();                   
             
               
                $.ajax({
                        type: 'POST',
                        url: 'updateknow.php',
                        data: {value: value},
                    })
                    .done(function(selectedSeats2) { 

                    })
                    .fail(function() {
                    });
               
                return false;         

            }
        </script>
</body>
</html>