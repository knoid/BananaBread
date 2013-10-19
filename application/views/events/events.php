<div class="main-band">
  <div class="band-data">
      <span class="title-big">Getting Better</span><br>
      <span class="sub-title">Viernes 18</span><br>
      <span class="sub-title">La Trastienda</span>
  </div>
  <p class="band-tags">Estas escuchando: <a href="evnets/search/rock">Rock</a> / <a href="evnets/search/covers">Covers</a> / <a href="evnets/search/palermo">Palermo</a></p>
  <div class="listening">
    <iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/2365500&amp;color=e87c05&amp;auto_play=false&amp;show_artwork=false"></iframe>
  </div>
</div>

<div class="search-input">
  <input type="text" name="query" value="" placeholder="Busca musica, artistas, generos, zona" class="span7">
</div>

<div class="row-fluid real-data">
  <div class="span6 band-list">
    <p class="title">Bandas cerca tuyo</p class="title">
    <ul class="unstyled">
    <?php foreach($events->result() as $event) { ?>
        <li>
          <div class="band-display">
            <img src="<?php echo base_url('assets/images/banda1.png') ?>" alt="" class="pull-left">
            <div class="band-data">
              <p class="band-title">
                <a href="<?php echo site_url('events/show/'.$event->band_id) ?>"><?php echo $event->name; ?></a>
              </p>
              <p>En: ducimus qui blanditiis cupiditate non provident voluptatum deleniti.<br/>Viernes 18 de Octubre</p>
              <p>play youutbe o algo</p>
            </div>
          </div>
        </li>
    <?php } ?>
    </ul>
  </div>

  <div class="span6 band-list">
    <p class="title">Te recomendamos</p class="title">
    <ul class="unstyled">
      <li>
        <div class="band-display">
          <img src="<?php echo base_url('assets/images/banda1.png') ?>" alt="" class="pull-left">
          <div class="band-data">
            <p class="band-title">Titulo de banda</p>
            <p>En: ducimus qui blanditiis cupiditate non provident voluptatum deleniti.<br/>Viernes 18 de Octubre</p>
            <p>play youutbe o algo</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
