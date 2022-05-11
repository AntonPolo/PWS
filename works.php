<div class="container-xxl w-content">
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <?php

    $limit_start = 0;
    $limit_end = 9;
    if (isset($_GET['go'])) {
      $limit_start += $_GET['go'];
    }
    $photos = get_all_photo("$limit_start,$limit_end");
    $i = 0;
    foreach ($photos as $photo) :

    ?>

      <div class="col">
        <div class="card">
          <div class="w-image">
            <img src="<?php echo $photo['photo_url']; ?>" class="card-img-top" alt="..." id="Img<?php echo $i; ?>">
          </div>

          <div id="Modal<?php echo $i; ?>" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img-card<?php echo $i; ?>" style="transform: scale(1);">


          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $photo['photo_title']; ?></h5>
          </div>
        </div>
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById(`Modal<?php echo $i; ?>`);

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById(`Img<?php echo $i; ?>`);
        var modalImg = document.getElementById(`img-card<?php echo $i; ?>`);
        img.onclick = function() {
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName(`close`)[<?php echo $i; ?>];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
      </script>
    <?php
      $i++;
    endforeach;
    ?>



  </div>

  <?php
  $count_arr = get_count_photos();
  $count_1 = $count_arr[0];
  $count = $count_arr[0];
  $go = 9;
  $page_count = 0;
  for ($i = 1;; $i++) {
    if ($count > 0) {
      $page_count++;
    } else {
      break;
    }
    $count -= 9;
  }
  $page_num = $_GET['page_num'];
  if ($page_count > 2) {
  ?>

  <nav aria-label="Page navigation" class="navigation">
    <ul class="pagination justify-content-center">


      <? if ($_GET['go'] > 0) : ?>
        <li class="page-item">
          <a class="page-link" href="./?page=my_works&go=<? print($_GET['go'] - 9); ?>&page_num=<? echo $_GET['page_num'] - 1; ?>">Прошлая</a>
        </li>

      <? endif; ?>


      <?
      if ($page_num <= 4 || $page_count < 8) {
      ?>
        <li class="page-item"><a class="page-link<?php if ($page_num == 1) {
                                                    echo " active-num";
                                                  } ?>" href="./?page=my_works&go=0&page_num=1">1</a></li>
      <?
      } else {
      ?>
        <li class="page-item"><a class="page-link<?php if ($page_num == 1) {
                                                    echo " active-num";
                                                  } ?>" href="./?page=my_works&go=0&page_num=1">1</a></li>
        <p>...</p>
      <?
      }
      ?>

      <?php

      for ($i = 2; $i <= $page_count - 1; $i++) {



        if ($page_num > 4 && $page_num < ($page_count - 2)) {
          if ($i <= ($page_num + 2) && $i >= ($page_num - 2)) {
            echo "<li class='page-item'><a class='page-link";
            if ($page_num == $i) {
              echo " active-num";
            }
            echo "' href='./?page=my_works&go=$go&page_num=$i'>$i</a></li>";
          }
        } elseif ($page_num <= 4) {

          if ($i >= 2 && $i <= 6) {
            echo "<li class='page-item'><a class='page-link";
            if ($page_num == $i) {
              echo " active-num";
            }
            echo "' href='./?page=my_works&go=$go&page_num=$i'>$i</a></li>";
          }
        } elseif ($page_num > ($page_count - 3)) {

          if ($i >= ($page_count - 5) && $i <= $page_count) {
            echo "<li class='page-item'><a class='page-link";
            if ($page_num == $i) {
              echo " active-num";
            }
            echo "' href='./?page=my_works&go=$go&page_num=$i'>$i</a></li>";
          }
        }



        $go += 9;
      }

      ?>



      <?
      if ($page_num > ($page_count - 4) || $page_count < 8) {
      ?>
        <li class="page-item"><a class="page-link<?php if ($page_num == $page_count) {
                                                    echo " active-num";
                                                  } ?>" href="./?page=my_works&go=<? echo $go; ?>&page_num=<? echo $page_count; ?>"><? echo $page_count; ?></a></li>
      <?
      } else {
      ?>
        <p>...</p>
        <li class="page-item"><a class="page-link<?php if ($page_num == $page_count) {
                                                    echo " active-num";
                                                  } ?>" href="./?page=my_works&go=<? echo $go; ?>&page_num=<? echo $page_count; ?>"><? echo $page_count; ?></a></li>

      <?
      }
      
      ?>




      <? if (($_GET['go'] + 9) < $count_1) : ?>
        <li class="page-item">
          <a class="page-link" href="./?page=my_works&go=<? print($_GET['go'] + 9); ?>&page_num=<? echo $_GET['page_num'] + 1; ?>">Следующая</a>
        </li>

      <? endif; 
      } else {
        if ($_GET['go'] > 0) :
          ?>
              <a href="./?page=my_works&go=<? print($_GET['go'] - 9); ?>&page_num=<? echo $_GET['page_num'] - 1; ?>">&#10094;</a>
          <?
          endif;
          $go = 0;
          for ($i = 1; $i <= $page_count; $i++) {

              echo "<li class='page-item'><a class='";
              if ($page_num == $i) {
                  echo " a-active";
              }
              echo "' href='./?page=my_works&go=$go&page_num=$i'>$i</a></li>";

              $go += 15;
          }
          //Шаг вперёд
          if (($_GET['go'] + 15) < $count_1) :
          ?>
              <a href="./?page=my_works&go=<? print($_GET['go'] + 9); ?>&page_num=<? echo $_GET['page_num'] + 1; ?>">&#10095;</a>
      <?
          endif;
      }
      ?>



    </ul>
  </nav>
</div>