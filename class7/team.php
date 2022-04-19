
<?php

$team_arrays = [
    [
        'img'   => 'https://www.innofication.com/assets/img/team/5.jpg',
        'name'  => 'Zinnah Ali', 
        'skill' => 'Wordpress Developer'
    ],
    [
        'img'   => 'https://binarywebsolution.com/img/team/team-24.jpg',
        'name'  => 'Rana Islam', 
        'skill' => 'Ios Developer'
    ],
    [
        'img'   => 'https://binarywebsolution.com/img/team/team-23.jpg',
        'name'  => 'Mohammod Ali', 
        'skill' => 'JavaScript Developer'
    ],
    [
        'img'   => 'https://www.team.gsamdani.com/wp-content/uploads/2016/05/tm3.jpg',
        'name'  => 'Rony Islam', 
        'skill' => 'Web Designer'
    ],
    [
        'img'   => 'https://binarywebsolution.com/img/team/team-23.jpg',
        'name'  => 'imran Ali', 
        'skill' => 'Laravel Developer'
    ],
    [
        'img'   => 'https://www.team.gsamdani.com/wp-content/uploads/2016/05/tm1.jpg',
        'name'  => 'Korim Khan', 
        'skill' => 'React Developer'
    ],
    [
        'img'   => 'https://www.ultimatebeaver.com/wp-content/uploads/2021/04/photo-gallery-img-02.jpg',
        'name'  => 'Mofij Ali', 
        'skill' => 'Java Developer'
    ],
    [
        'img'   => 'http://www.team.gsamdani.com/wp-content/uploads/2016/05/tm9.jpg',
        'name'  => 'Cokina Khatun', 
        'skill' => ' SEO Expert'
    ],
    [
        'img'   => 'https://visitbig.co.uk/wp-content/uploads/2019/10/team1.jpg',
        'name'  => 'Rohim khan', 
        'skill' => 'Full Stack developer'
    ],
];

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Aassignet 7: Team Section</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <div class="container">
        <div class="team-header text-center w-75 m-auto">
            <h2>Our Team </h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis aliquam laborum reprehenderit reiciendis, architecto voluptatem consequuntur, distinctio corrupti modi eos corporis quod soluta numquam! Dolorum voluptas inventore repellendus saepe quo! </p>
        </div>
        <div class="row">
        <?php
        foreach ($team_arrays as $key => $team_array) {
            
        ?>
            <div class="col-md-4 my-5">
                <div class="team">
                    <div class="team-body text-center">
                        <img src="<?= $team_array['img']; ?>" alt="">
                        <h4><?= $team_array['name']; ?></h4>
                        <h6> <?= $team_array['skill']; ?> </h6>
                        <div class="team-icon">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-facebook-f"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>