<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div style="margin-top: 50px;" class="container">
        <table style="vertical-align: middle;" class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>

                    <th scope="col">Judul</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($eBooks as $key => $eBook) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>

                        <td><?= $eBook['judul']; ?></td>
                        <td><a class="btn btn-success" href="/book/<?= $eBook['id']; ?>">Detail</a></td>
                        <td>
                            <form action="/book/delete/<?= $eBook['id']; ?>" method="post">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?');">delete</button>
                            </form>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>