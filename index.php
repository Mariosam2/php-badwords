<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>
    <div class="container">
        <form action="badwords.php">
            <div class="mb-3">
                <label for="paragraph" class="form-label">Write some text here...</label>
                <textarea class="form-control" name="paragraph" id="paragraph" rows="3"></textarea>
                <div class="mb-3">
                    <label for="" class="form-label">Bad Word</label>
                    <input type="text" name="badword" id="badword" class="form-control" placeholder="Yoda" aria-describedby="helpBadWord">
                    <small id="helpBadWord" class="text-muted">Word to censure</small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>



</body>

</html>