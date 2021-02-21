<main class="main">
<?php
    include(TEMPLATE_PATH . "/messages.php");
?>

<table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Título</th>
            <th>Subtítulo</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($article as $a): ?>
                <tr>
                    <td><?= $a['title'] ?></td>
                    <td><?= $a['subtitle'] ?></td>
                    <td>
                        <a href="publish.php?update=<?= $a['id'] ?>" 
                            class="btn btn-warning rounded-circle mr-2">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $a['id'] ?>"
                            class="btn btn-danger rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</main>