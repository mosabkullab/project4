<LOOCTYPE HTML>
    <HTML lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>documents</title>
            </head>
            <body>
                <h1> My Name Is {{$name}}</h1>

            <form action="send" method="post">
                 @csrf
                    Name:
                    <input type="text" name="myname" id="myname">
                    <input type="submit"  value="send">

            </body>
            </html>
