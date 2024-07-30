<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
                   initial-scale=1.0">
    <title>ADMINISTRADOR</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* #00204a */

        body {
            background-color: #cad7fda4;
            max-width: 100%;
            overflow-x: hidden;
            min-height: 100vh;
        }

        header {
            height: 70px;
            width: 100vw;
            padding: 0 30px;
            background-color: #fff;
            position: fixed;
            z-index: 100;
            box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 27px;
            font-weight: 600;
            color: #005555 !important;
        }

        .icn {
            height: 30px;
        }

        .menuicn {
            cursor: pointer;
        }

        .searchbar,
        .message,
        .logosec {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .searchbar2 {
            display: none;
        }

        .logosec {
            gap: 60px;
        }

        .searchbar input {
            width: 250px;
            height: 42px;
            border-radius: 50px 0 0 50px;
            background-color: var(--background-color3);
            padding: 0 20px;
            font-size: 15px;
            outline: none;
            border: none;
        }

        .searchbtn {
            width: 50px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0px 50px 50px 0px;
            background-color: var(--secondary-color);
            cursor: pointer;
        }

        .message {
            gap: 40px;
            position: relative;
            cursor: pointer;
        }

        .circle {
            height: 7px;
            width: 7px;
            position: absolute;
            background-color: #fa7bb4;
            border-radius: 50%;
            left: 19px;
            top: 8px;
        }

        .dp {
            height: 40px;
            width: 40px;
            background-color: #626262;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .main-container {
            display: flex;
            width: 100vw;
            position: relative;
            top: 70px;
            z-index: 1;
        }

        .dpicn {
            height: 42px;
        }

        .main {
            height: calc(100vh - 70px);
            width: 100%;
            overflow-y: scroll;
            overflow-x: hidden;
            padding: 40px 30px 30px 30px;
        }

        .main::-webkit-scrollbar-thumb {
            background-image:
                linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
        }

        .main::-webkit-scrollbar {
            width: 5px;
        }

        .main::-webkit-scrollbar-track {
            background-color: #9e9e9eb2;
        }

        .box-container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
            gap: 50px;
        }

        .nav {
            min-height: 90vh;
            width: 300px;
            background-color: #fff;
            position: absolute;
            top: 0px;
            left: 00;
            box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            padding: 30px 0 20px 10px;
        }

        .navcontainer {
            height: calc(100vh - 100px);
            width: 300px;
            position: relative;

            transition: all 0.5s ease-in-out;
            margin-top: 40px;
            margin-right: 100px;
        }

        .navcontainer::-webkit-scrollbar {
            display: none;
        }

        .navclose {
            width: 90px;
            overflow-x: hidden;
        }

        .nav-option {
            width: 300px;
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 30px 0 20px;
            gap: 20px;
            transition: all 0.1s ease-in-out;
        }

        .nav-option h3 {
            margin: 0;
        }

        .nav-option:hover {
            border-left: 5px solid #a2a2a2;
            background-color: #dadada;
            cursor: pointer;
        }

        .nav-img {
            height: 30px;
        }

        .nav-upper-options {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .nav-icon {
            width: 30px;
            height: 30px;
        }

        .option1 {
            border-left: 5px solid #005555;
            background-color: var(--Border-color);
            color: white;
            cursor: pointer;
        }

        .option1:hover {
            border-left: 5px solid #005555;
            background-color: var(--Border-color);
        }

        .box {
            height: 130px;
            width: 230px;
            border-radius: 20px;
            box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .box:hover {
            transform: scale(1.08);
        }

        .box:nth-child(1) {
            background-color: var(--one-use-color);
        }

        .box:nth-child(2) {
            background-color: var(--two-use-color);
        }

        .box:nth-child(3) {
            background-color: var(--one-use-color);
        }

        .box:nth-child(4) {
            background-color: var(--two-use-color);
        }

        .box img {
            height: 50px;
        }

        .box .text {
            color: white;
        }

        .topic {
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 1px;
        }

        .topic-heading {
            font-size: 30px;
            letter-spacing: 3px;
        }

        .report-container {
            min-height: 300px;
            max-width: 1200px;
            margin: 70px auto 0px auto;
            background-color: #ffffff;
            border-radius: 30px;
            box-shadow: 3px 3px 10px rgb(188, 188, 188);
            padding: 0px 20px 20px 20px;
        }

        .report-header {
            height: 80px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 20px 10px 20px;
            border-bottom: 2px solid rgba(0, 20, 151, 0.59);
        }

        .recent-Articles {
            font-size: 30px;
            font-weight: 600;
            color: #005555;
        }

        .view {
            height: 35px;
            width: 90px;
            border-radius: 8px;
            background-color: #005555;
            color: white;
            font-size: 15px;
            border: none;
            cursor: pointer;
        }

        .report-body {
            max-width: 1160px;
            overflow-x: auto;
            padding: 20px;
        }

        .report-topic-heading,
        .item1 {
            width: 1120px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .t-op {
            font-size: 18px;
            letter-spacing: 0px;
        }

        .items {
            width: 1120px;
            margin-top: 15px;
        }

        .item1 {
            margin-top: 20px;
        }

        .t-op-nextlvl {
            font-size: 14px;
            letter-spacing: 0px;
            font-weight: 600;
        }

        .label-tag {
            width: 100px;
            text-align: center;
            background-color: rgb(0, 177, 0);
            color: white;
            border-radius: 4px;
        }

        /* Responsive CSS Here */
        @media screen and (max-width: 950px) {
            .nav-img {
                height: 25px;
            }

            .nav-option {
                gap: 30px;
            }

            .nav-option h3 {
                font-size: 15px;
            }

            .report-topic-heading,
            .item1,
            .items {
                width: 800px;
            }
        }

        @media screen and (max-width: 850px) {
            .nav-img {
                height: 30px;
            }

            .nav-option {
                gap: 30px;
            }

            .nav-option h3 {
                font-size: 20px;
            }

            .report-topic-heading,
            .item1,
            .items {
                width: 700px;
            }

            .navcontainer {
                width: 100vw;
                position: absolute;
                transition: all 0.6s ease-in-out;
                top: 0;
                left: -100vw;
            }

            .nav {
                width: 100%;
                position: absolute;
            }

            .navclose {
                left: 00px;
            }

            .searchbar {
                display: none;
            }

            .main {
                padding: 40px 30px 30px 30px;
            }

            .searchbar2 {
                width: 100%;
                display: flex;
                margin: 0 0 40px 0;
                justify-content: center;
            }

            .searchbar2 input {
                width: 250px;
                height: 42px;
                border-radius: 50px 0 0 50px;
                background-color: var(--background-color3);
                padding: 0 20px;
                font-size: 15px;
                border: 2px solid var(--secondary-color);
            }
        }

        @media screen and (max-width: 490px) {
            .message {
                display: none;
            }

            .logosec {
                width: 100%;
                justify-content: space-between;
            }

            .logo {
                font-size: 20px;
            }

            .menuicn {
                height: 25px;
            }

            .nav-img {
                height: 25px;
            }

            .nav-option {
                gap: 25px;
            }

            .nav-option h3 {
                font-size: 12px;
            }

            .nav-upper-options {
                gap: 15px;
            }

            .recent-Articles {
                font-size: 20px;
            }

            .report-topic-heading,
            .item1,
            .items {
                width: 550px;
            }
        }

        @media screen and (max-width: 400px) {
            .recent-Articles {
                font-size: 17px;
            }

            .view {
                width: 60px;
                font-size: 10px;
                height: 27px;
            }

            .report-header {
                height: 60px;
                padding: 10px 10px 5px 10px;
            }

            .searchbtn img {
                height: 20px;
            }
        }

        @media screen and (max-width: 320px) {
            .recent-Articles {
                font-size: 12px;
            }

            .view {
                width: 50px;
                font-size: 8px;
                height: 27px;
            }

            .report-header {
                height: 60px;
                padding: 10px 5px 5px 5px;
            }

            .t-op {
                font-size: 12px;
            }

            .t-op-nextlvl {
                font-size: 10px;
            }

            .report-topic-heading,
            .item1,
            .items {
                width: 300px;
            }

            .report-body {
                padding: 10px;
            }

            .label-tag {
                width: 70px;
            }

            .searchbtn {
                width: 40px;
            }

            .searchbar2 input {
                width: 180px;
            }
        }

        .form-select {
            height: 52px;
        }

        .session {
            margin-left: auto;
            /* You may need to add additional styles like display:inline-block if there are other sibling elements */
        }

        .session p,
        .session a {
            margin: 5px 0;
            /* Adjust the 5px to whatever value you prefer */
            padding: 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="logosec">
            <div class="logo">Bienes Raices</div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png" class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>

        <?php if (isset($_SESSION["user_id"])) : ?>
            <div class="session">
                <p>Bienvenido, <?php echo ($_SESSION["user_name"]) ?> ></p>
                <a href="<?php echo BASE_URL ?>/auth/logout.php">Cerrar Sesion</a>
            </div>
        <?php endif; ?>


        <div class="message">
            <div class="dp">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png" class="dpicn" alt="dp">
            </div>
        </div>
    </header>

    <div class="main-container">
        <?php include 'view/admin/layout/navbar.php'; ?>
        <div class="main">