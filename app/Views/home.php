<?= view('templates/header', ['title' => $title]) ?>

<h1>Welcome to Nexus POS</h1>

<p>
    Manage customer information and staff accounts through one simple
    Point-of-Sale management interface.
</p>

<div class="menu-grid">
    <a class="menu-card" href="<?= site_url('customers') ?>">
        <h3>Customer Accounts</h3>
        <p>View customer names, email addresses, and contact numbers.</p>
    </a>

    <a class="menu-card" href="<?= site_url('users') ?>">
        <h3>User Accounts</h3>
        <p>View the staff members registered in the POS system.</p>
    </a>

    <a class="menu-card" href="<?= site_url('about') ?>">
        <h3>About the System</h3>
        <p>Learn about the application and its MVC structure.</p>
    </a>
</div>

<?= view('templates/footer') ?>