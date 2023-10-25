<!DOCTYPE html>
<html lang="pt">
  <head>
  <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="./css/style01.css">
    <script src="js/responsive-nav.js"></script>
    <script>
        document.addEventListiner('DOMContentLoaded', () => {
            let id_home = document.getElementById("home");
            let id_a = document.getElementById("a_home");

            id_a.addEventListiner("click", () => {
                if(id_home){
                    id_home.classList.add('active')
                }
            })
        })
    </script>
  </head>
  <body>

    <header>
      <a href="home.php" class="logo" data-scroll>BOTZAP</a>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item " id="home"><a id="a_home" href="home.php" data-scroll>HOME</a></li>
          <li class="menu-item"><a href="config.php" data-scroll>CONFIGURAÇÕES</a></li>      
          <li class="menu-item"><a href="#" data-scroll>ADMIN</a></li>      
          <li class="menu-item"><a href="logout.php" data-scroll>SAIR</a></li>
        </ul>
      </nav>
    </header>

    <section id="home">

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }
      
      form, div {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        max-width: 500px;
        margin: 0 auto;
      }

      .conteudo{
        max-width: 800px;
      }
      
      h1 {
        margin-bottom: 10px;
      }
      
      table {
        width: 100%;
        margin-top: 10px;
        border-collapse: collapse;
      }
      
      th,
      td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      
      th {
        background-color: #eee;
      }
      
      td:first-child {
        font-weight: bold;
      }

      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        }
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 60%;
            margin-top: 5px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
  </head>