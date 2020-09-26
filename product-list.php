<?php
include("./products.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>List HS</title>
</head>

<body>

    <form method="POST" id="addForm">
        nhap ten:
        <input type="text" name="tenAdd" id="tenAdd">
        nhap tuoi:
        <input type="text" name="tuoiAdd" id="tuoiAdd">
        <button type="submit" class="btn btn-light" id="submit">Submit</button>
    </form>
    <div id="result">
        <?php

        foreach ($hs as $value) {
            $name = $value['name'];
            $tuoi = $value['tuoi'];

            print("<h1> ten: $name || tuoi: $tuoi </h1>");
        }

        ?>
    </div>


    <script>
        $(document).ready(function() {
            $('form').on("submit", function(e) {
                e.preventDefault();
                let ten = $('#tenAdd').val();
                let tuoi = $('#tuoiAdd').val();
                //console.log(ten);
                $.ajax({
                    type: "POST",
                    url: "product-add.php",
                    data: {
                        "tenAdd": ten,
                        "tuoiAdd": tuoi
                    },
                    success: function(data) {
                        console.log(data);
                        // $('.result').html(data);
                        // $('#contactform')[0].reset();
                        $('#result').append(data);
                    }
                });
            });
        });
    </script>


        <?php
        // session_destroy();        
        ?>
</body>

</html>