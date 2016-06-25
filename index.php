<!DOCTYPE html>
<html>
<head>
	<title>Progetto Find and Compare - Di Leo Raffaele</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 18px;
            }
        </style>
</head>
<body>
	<div class="container">
            <div class="content">
                <div class="title">Find and Compare two Links below:</div>
                <form method="post" action="findCompare.php">
                    <hr />
                    <label>1) URL</label><input type="text" name="url1"  value="http://www."></input><br />
                    <label>2) URL</label><input type="text" name="url2"  value="http://www."></input><br />
                    <hr />
                    <input type="submit" value="GO!" ></input>
                </form>
            </div>
        </div>
</body>
</html>