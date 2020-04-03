<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('systemassets/css/style.css')}}">
    <title>Document</title>
</head>
<body>
<body>

@include('customer::layout.navbar')
@yield('content')
@include('customer::layout.footer')





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>
      $('.btn-tab').click(function() {
        var target = $(this).attr('data-tab');
        $('.tabs').hide();
        $('.'+target).show();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
{{-- <script src="{{asset('systemassets/js/main.js')}}"></script> --}}

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
    $('#lenses').on('change',function(){
        var lens = $(this).val();
        if(lens){
            $.ajax({
                type : 'get',
                url : "{{route('customer.getProduct')}}",
                data:{'id': lens},
                success:function(data){
                $('.products').html(data.products);
                $('#filter-options').html(data.options);
                $('#Product_Control').removeClass('hidden');
                }
            });

        }else{
            $('.products').html('<option value="">Select Lens frist</option>');
        }
    });
</script>
<script>
    $('.edit_employee').on('click',function(){

        var form = document.getElementById("formEditEmployee");
	
        // Setting new attributes
        form.setAttribute("action", $(this).attr('urlFormEdit'));

        var input = document.getElementById("inputEditEmployee");
	
        // Setting new attributes
        input.setAttribute("value", $(this).attr('nameFormEdit'));
    });
</script>
<script>
    $('.refraction-input').on('focus',function(){
        // $(this).on('write',function(){
        //     var min = $(this).attr('valid-min');
        //     var max = $(this).attr('valid-max');
        //     var value = $(this).val();

        //     if(value > 0 && min > value < max){
    
        //         $('.print-error').html('The value is incorrect');
        //     }
        // });

        // $('.print-error').html();
        
        $('.print-rang').html($(this).attr('valid-rang'));

    });
    $('#refraction-balance').on('click',function(){
        $('#L-sphere').val($('#R-sphere').val());
        $('#L-cylnder').val($('#R-cylnder').val());
        $('#L-axis').val($('#R-axis').val());
        $('#L-addition').val($('#R-addition').val());
    });
</script>
</body>
</html>