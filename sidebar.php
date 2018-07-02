<div class="side">
  
  <h3 class="all_authors">Tous les auteurs</h3>
  <ul class="list">
    <?php wp_list_authors(array('show_fullname' => 1,
    'optioncount'   => 1,
    'orderby'       => 'author',
    'order'         => 'ASC',
    'number'        => 3));?>
    <?php 
    // wp_get_archives('type=monthly'); 
    ?>
  </ul>

</div>