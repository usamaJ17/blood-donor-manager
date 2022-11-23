<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#0ed3cf">
	<script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">

</head>
<body >
    <form action="{{route('pleg_submit')}}" method="POST" id="form"> 
        @csrf
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Paragraph</label>
        <textarea name="text" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
        <br>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id='button'>Remove Pleg</button>
    </form>
    <div>
        <p id='response'></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
         var url="{{route('pleg_submit')}}";
            $('#form').on('submit', function(e) {
                e.preventDefault(); 

                $("#button").text('Sending ...');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(this).serialize(),
                    success: function( msg ) {
                        $("#button").text('Remove Pleg');
                        $('#response').text(msg);
                        $("#form")[0].reset();
                        navigator.clipboard.writeText(msg);
                    },
                    error: function (data) {
                        $("#button").text('Remove Pleg');
                        $('#response').text(msg);
                        $("#form")[0].reset();
                    }
                });
            });
    </script>

</body>