<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <form action="{{ route('pic') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <br>
        <label for="">task 1</label>
        <div class="row">
            <label for=""></label>
            <label class="file" style="margin-left: 0px !important">
                <input type="file" name="image" class="form-control">
            </label>
        </div>
        <button type="submit">submit</button>
    </form>
    <br>
    <br>
    <form action="">
        <label for="">task 2</label>
        <div>
            <label for="first_number">First Number :</label>
            <input type="text" id="first_number">
        </div>
        <div>
            <label for="second_number">Second Number :</label>
            <input type="text" id="second_number">
        </div>
        <div>
            <label for="second_number">result :</label>
            <input type="text" id="result" readonly>
        </div>
        <div>
            <button type="submit" id="plus">Plus</button>
            <button type="submit" id="minus">Minus</button>
            <button type="submit" id="multiply">Multiply</button>
            <button type="submit" id="divide">Divide</button>
        </div>
    </form>

    <br>
    <br>
    <label for="">task 3</label><br>
    <label for="">Comment : kindly click the "Hello word" to change the red color</label><br><br>
    <div id="target">Hello word</div>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
</body>
<script>
    $(document).ready(function() {


        $('#plus').click(function() {
            if (($('#first_number').val() == '' || $.trim($('#first_number').val()) == '') &&
                ($('#second_number').val() == '' || $.trim($('#second_number').val()) == '')) {
                alert('both numbers are empty')
                return false;
            } else if ($('#first_number').val() == '' || $.trim($('#first_number').val()) == '') {
                alert('first number empty')
                return false;
            } else if ($('#second_number').val() == '' || $.trim($('#second_number').val()) == '') {
                alert('second number empty')
                return false;
            }
            var first_number = parseFloat($('#first_number').val());
            if (!$.isNumeric(first_number)) {
                alert('first input is not a number');
            }
            var second_number = parseFloat($('#second_number').val());
            if (!$.isNumeric(second_number)) {
                alert('second input is not a number');
            }
            var result = first_number + second_number;
            $('#result').val(result);
            return false;
        });

        $('#minus').click(function() {
            if (($('#first_number').val() == '' || $.trim($('#first_number').val()) == '') &&
                ($('#second_number').val() == '' || $.trim($('#second_number').val()) == '')) {
                alert('both numbers are empty')
                return false;
            } else if ($('#first_number').val() == '' || $.trim($('#first_number').val()) == '') {
                alert('first number empty')
                return false;
            } else if ($('#second_number').val() == '' || $.trim($('#second_number').val()) == '') {
                alert('second number empty')
                return false;
            }
            var first_number = parseFloat($('#first_number').val());
            if (!$.isNumeric(first_number)) {
                alert('first input is not a number');
            }
            var second_number = parseFloat($('#second_number').val());
            if (!$.isNumeric(second_number)) {
                alert('second input is not a number');
            }
            var result = first_number - second_number;
            $('#result').val(result);
            return false;
        });


        $('#multiply').click(function() {
            if (($('#first_number').val() == '' || $.trim($('#first_number').val()) == '') &&
                ($('#second_number').val() == '' || $.trim($('#second_number').val()) == '')) {
                alert('both numbers are empty')
                return false;
            } else if ($('#first_number').val() == '' || $.trim($('#first_number').val()) == '') {
                alert('first number empty')
                return false;
            } else if ($('#second_number').val() == '' || $.trim($('#second_number').val()) == '') {
                alert('second number empty')
                return false;
            }
            var first_number = parseFloat($('#first_number').val());
            if (!$.isNumeric(first_number)) {
                alert('first input is not a number');
            }
            var second_number = parseFloat($('#second_number').val());
            if (!$.isNumeric(second_number)) {
                alert('second input is not a number');
            }
            var result = first_number * second_number;
            $('#result').val(result);
            return false;
        });



        $('#divide').click(function() {
            if (($('#first_number').val() == '' || $.trim($('#first_number').val()) == '') &&
                ($('#second_number').val() == '' || $.trim($('#second_number').val()) == '')) {
                alert('both numbers are empty')
                return false;
            } else if ($('#first_number').val() == '' || $.trim($('#first_number').val()) == '') {
                alert('first number empty')
                return false;
            } else if ($('#second_number').val() == '' || $.trim($('#second_number').val()) == '') {
                alert('second number empty')
                return false;
            }
            var first_number = parseFloat($('#first_number').val());
            if (!$.isNumeric(first_number)) {
                alert('first input is not a number');
            }
            var second_number = parseFloat($('#second_number').val());
            if (!$.isNumeric(second_number)) {
                alert('second input is not a number');
            }
            var result = first_number / second_number;
            $('#result').val(result);
            return false;
        });


        $('#target').click(function() {
            $('#target').css('color', 'red');
        });

    });
</script>

</html>
