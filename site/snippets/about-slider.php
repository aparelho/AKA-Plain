<div class="slider-wrapper">

	  <?php foreach($page->images()->sortBy('sort', 'asc')->limit(3) as $image): ?>

                        <?php $thumbcarousel = $image->resize(1200); ?>
                          
                          <div class="carousel-cell" style="background-image: url(<?php echo $thumbcarousel->url() ?>);"></div>
      <?php endforeach ?>
</div>


 <script type="text/javascript">
    var elem = document.querySelector('.slider-wrapper');
    var flkty = new Flickity(elem, {
      // options
      cellAlign: 'left',
      contain: true,
      draggable: '>1',
      wrapAround: true,
      autoPlay: 5000,
      setGallerySize: false,
      prevNextButtons: false
    });

    // element argument can be a selector string
    //   for an individual element
    var flkty = new Flickity('.slider-wrapper', {
      // options
    });
  </script>