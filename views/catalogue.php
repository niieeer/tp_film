<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
    <title>Catalogue</title>
</head>

<body>
    <?php include_once('../includes/header.php'); ?>
    <!-- <div id="tags">
        
        </div> -->
    <form id="searchForm">
        <input type="text" class="form-control" id="searchText" placeholder="Recherche un film">
    </form>
    <div class="movies_container">

    </div>
    <?php include_once('../includes/footer.php'); ?>
</body>
<!-- <script src="../js/getGenre.js  "></script> -->
<script src="../js/search.js"></script>


</html>