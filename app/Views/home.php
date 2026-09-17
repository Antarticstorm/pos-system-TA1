<?= view('templates/header', ['title' => $title]) ?>

<h1>Welcome to Simple POS</h1>

<p>
    Simple POS is a basic Point-of-Sale management website built with
    CodeIgniter 4.
</p>

<h2>Available Pages</h2>

<ul>
    <li>View information about the POS system.</li>
    <li>View customer account records.</li>
    <li>View user and staff account records.</li>
</ul>

<p>
    Use the navigation menu above to explore the website.
</p>

<?= view('templates/footer') ?>