<?php
$title = 'Создание поста в системе в системе';
@include_once __DIR__ . '/../header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6 border border-1 rounded-2 mt-2 p-2">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="inputLogin" class="form-label">Тема поста:</label>
                        <input type="text" name="name"  id="inputLogin" placeholder="Укажите тему поста" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Текст поста:</label>
                        <textarea type="password" name="descriptions"  id="inputPassword" placeholder="Укажите текст поста:" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Создать пост</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>


<?php @include_once __DIR__ . '/../footer.php'; ?>