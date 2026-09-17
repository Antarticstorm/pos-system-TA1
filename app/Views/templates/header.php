<?php
$currentPage = service('uri')->getSegment(1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'Nexus POS') ?></title>

    <style>
        :root {
            --background: #171d25;
            --surface: #1b2838;
            --surface-light: #22384f;
            --blue: #66c0f4;
            --blue-dark: #1a9fff;
            --green: #75b022;
            --text: #d6d7d8;
            --muted: #8f98a0;
            --border: #2a475e;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top right, #29455f 0, transparent 35%),
                linear-gradient(135deg, #1b2838, #16202d 60%, #101820);
        }

        .top-header {
            background: #171a21;
            min-height: 105px;
            padding: 0 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.45);
            position: relative;
            z-index: 10;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: white;
        }

        .brand-icon {
            width: 45px;
            height: 45px;
            border: 3px solid white;
            border-radius: 50%;
            display: grid;
            place-items: center;
            color: var(--blue);
            font-size: 21px;
            font-weight: bold;
        }

        .brand-name {
            font-size: 27px;
            font-weight: 300;
            letter-spacing: 2px;
        }

        nav {
            display: flex;
            gap: 6px;
            position: relative;
            z-index: 11;
        }

        nav a {
            display: inline-block;
            padding: 13px 16px;
            color: #dcdedf;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
            border-bottom: 3px solid transparent;
            cursor: pointer;
            transition: 0.2s ease;
        }

        nav a:hover,
        nav a.active {
            color: var(--blue);
            border-bottom-color: var(--blue-dark);
            background: rgba(102, 192, 244, 0.08);
        }

        .hero-bar {
            padding: 30px 8%;
            background: linear-gradient(
                90deg,
                rgba(27, 40, 56, 0.95),
                rgba(42, 71, 94, 0.75)
            );
            border-bottom: 1px solid var(--border);
        }

        .hero-bar h2 {
            max-width: 1100px;
            margin: auto;
            color: white;
            font-weight: 300;
            letter-spacing: 1px;
        }

        main {
            width: 84%;
            max-width: 1100px;
            min-height: 500px;
            margin: 35px auto;
            padding: 30px;
            background: rgba(27, 40, 56, 0.92);
            border: 1px solid var(--border);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.35);
        }

        h1 {
            margin-top: 0;
            color: white;
            font-size: 30px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-bottom: 1px solid var(--border);
            padding-bottom: 15px;
        }

        h2 {
            color: var(--blue);
            font-weight: 400;
        }

        p {
            line-height: 1.7;
            color: var(--text);
        }

        a {
            color: var(--blue);
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 30px;
        }

        .menu-card {
            min-height: 155px;
            padding: 22px;
            color: white;
            text-decoration: none;
            background: linear-gradient(135deg, #29465f, #1d3145);
            border: 1px solid #31536d;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s, filter 0.2s;
        }

        .menu-card:hover {
            transform: translateY(-4px);
            filter: brightness(1.2);
        }

        .menu-card h3 {
            color: var(--blue);
            margin-top: 0;
            font-size: 21px;
        }

        .menu-card p {
            color: #c7d5e0;
        }

        table {
            width: 100%;
            margin-top: 25px;
            border-collapse: collapse;
            background: #16202d;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        th {
            padding: 15px;
            text-align: left;
            color: white;
            background: linear-gradient(90deg, #2a475e, #31566f);
            border-bottom: 2px solid var(--blue-dark);
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 1px;
        }

        td {
            padding: 14px 15px;
            color: #c7d5e0;
            border-bottom: 1px solid #26394b;
        }

        tbody tr:nth-child(even) {
            background: #1d2d3d;
        }

        tbody tr:hover {
            background: #29445c;
        }

        .record-count {
            display: inline-block;
            margin-top: 20px;
            padding: 9px 15px;
            color: #d2efa9;
            background: rgba(117, 176, 34, 0.18);
            border-left: 3px solid var(--green);
        }

        footer {
            padding: 25px;
            color: var(--muted);
            background: #171a21;
            text-align: center;
            border-top: 1px solid #282e39;
        }

        @media (max-width: 750px) {
            .top-header {
                padding: 20px;
                flex-direction: column;
                gap: 20px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            nav a {
                padding: 10px;
            }

            main {
                width: 94%;
                padding: 20px;
                overflow-x: auto;
            }

            .menu-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header class="top-header">
    <a class="brand" href="<?= site_url('/') ?>">
        <span class="brand-icon">N</span>
        <span class="brand-name">NEXUS POS</span>
    </a>

    <nav>
        <a href="<?= site_url('/') ?>"
           class="<?= empty($currentPage) ? 'active' : '' ?>">
            Home
        </a>

        <a href="<?= site_url('about') ?>"
           class="<?= $currentPage === 'about' ? 'active' : '' ?>">
            About
        </a>

        <a href="<?= site_url('customers') ?>"
           class="<?= $currentPage === 'customers' ? 'active' : '' ?>">
            Customers
        </a>

        <a href="<?= site_url('users') ?>"
           class="<?= $currentPage === 'users' ? 'active' : '' ?>">
            Users
        </a>
    </nav>
</header>

<section class="hero-bar">
    <h2><?= esc($title ?? 'Nexus POS') ?></h2>
</section>

<main>