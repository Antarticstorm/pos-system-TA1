<?= view('templates/header', ['title' => $title]) ?>

<h1>About Simple POS</h1>

<p>
    This website is the first version of a basic Point-of-Sale system.
</p>

<p>
    It demonstrates how routes, controllers, and views work together
    using the CodeIgniter 4 MVC architecture.
</p>

<p>
    Customer and user records are currently stored in static PHP arrays.
    A database can be added in a future version.
</p>

<p>
    &copy; <?= esc($year ?? date('Y')) ?> Simple POS
</p>

<?= view('templates/footer') ?>