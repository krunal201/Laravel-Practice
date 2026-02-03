<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-light">
    <div class="container my-5 d-flex justify-content-center">
        <div class="card p-3 shadow-sm bg-white" style="max-width: 500px; width: 100%;">
            <h3 class="mb-3 text-center">Add Event</h3>
            <form action="{{ route('event.uploadEvent') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-2">
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="title" id=""
                        class="form-control form-control-sm"><br>
                </div>

                <div class="mb-2">
                    <label for="" class="form-label">Description</label>
                    <input type="text" name="description" id=""
                        class="form-control form-control-sm">
                </div>

                <div class="mb-2">
                    <label for="" class="form-label">Cate_id</label>
                    <input type="number" name="cat_id" id=""
                        class="form-control form-control-sm"><br>
                </div>

                <div class="mb-2">
                    <label for="" class="form-label">Date</label>
                    <input type="date" name="date" id=""
                        class="form-control form-control-sm"><br>
                </div>

                <div class="mb-2">
                    <label for="" class="form-label">Time</label>
                    <input type="time" name="time" id=""
                        class="form-control form-control-sm"><br>
                </div>

                <div class="mb-2">
                    <label for="" class="form-label">location</label>
                    <input type="text" name="location" id=""
                        class="form-control form-control-sm"><br>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Image</label>
                    <input type="file" name="file" id=""
                        class="form-control form-control-sm"><br>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>

                <!-- Description: <br>
        : <input type="" name="" id=""><br>
        : <input type="date" name="date" id=""><br>
        Time: <input type="time" name="time" id=""><br>
        Location:<input type="text" name="location" id=""><br>
        Image: <input type="file" name="file" id=""><br>
         -->
            </form>
        </div>
    </div>
</body>

</html>
<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>