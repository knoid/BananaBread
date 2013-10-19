<div style="margin: 0 10px;overflow:hidden;">
  <div class="show-band-top">
    <div class="pull-left">
      <img src="<?php echo base_url('assets/images/banda1-gr.png'); ?>" alt="">
    </div>
      <p class="title"><?php echo $band->name; ?></p>
      <?php echo $band->description; ?>
  </div>

  <div class="next-shows">
    <h3>Pr&oacute;ximos Shows</h3>
    <div class="event-display">
      <div class="day pull-left">18</div>
      <div class="event-description">
        <p class="title">Evento interesante</p>
        <p class="description">Alguna descripcion</p>
      </div>
    </div>
    <div class="event-display">
      <div class="day pull-left">18</div>
      <div class="event-description">
        <p class="title">Evento interesante</p>
        <p class="description">Alguna descripcion</p>
      </div>
    </div>

    <button type="buttton" class="btn btn-big disabled">Venta de entradas</button>
    
  </div>

  <div class="medias" >
    <div class="title">
      <img src="<?php echo base_url('assets/images/youtube.png'); ?>"/>
      <img class="abierta" src="<?php echo base_url('assets/images/flechita-abajo.png'); ?>" alt="" style="display: none;">
      <img class="cerrada" src="<?php echo base_url('assets/images/flechita-derecha.png'); ?>" alt="">
    </div>
    <div class="description" style="display:none;">
      <div class="span3"><iframe width="100%" height="215" src="//www.youtube.com/embed/7GCLZfTD_xA" frameborder="0" allowfullscreen></iframe></div>
      <div class="span3"><iframe width="100%" height="215" src="//www.youtube.com/embed/F7hVAH3f2g0" frameborder="0" allowfullscreen></iframe></div>
      <div class="span3"><iframe width="100%" height="215" src="//www.youtube.com/embed/Rh0G2dd3tCA" frameborder="0" allowfullscreen></iframe></div>
    </div>
  </div>

  <div class="medias" >
    <div class="title">
      <img src="<?php echo base_url('assets/images/soundcloud.png'); ?>"/>
      <img class="abierta" src="<?php echo base_url('assets/images/flechita-abajo.png'); ?>" alt="" style="display: none;">
      <img class="cerrada" src="<?php echo base_url('assets/images/flechita-derecha.png'); ?>" alt="">
    </div>
    <div class="description" style="display:none;">
      <iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/68323400"></iframe>
      <iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/68322738"></iframe>
      <iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/68322084"></iframe>
    </div>
  </div>


  <script>
    $(function() {
      $(".medias").on("click", ".abierta", function() {
        var $this = $(this);
        $this.hide().next().show().closest('.medias').find('.description').hide();
      }).on("click", ".cerrada", function() {
        var $this = $(this);
        $this.hide().prev().show().closest('.medias').find('.description').show();
      })
    });
  </script>

</div>
