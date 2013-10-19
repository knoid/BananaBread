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
    <ul class="left-bands unstyled">
      <li class="loading">Cargando...</li>
      <script type="template/band" id="template-band">
        <li>
          <div class="band-display">
            <img src="%%IMG%%" alt="" class="pull-left">
            <div class="band-data">
              <p class="band-title">
                <a href="%%URL%%">%%NAME%%</a>
              </p>
              <p>%%DESC%%<br/>%%DAY%%</p>
            </div>
          </div>
        </li>
      </script>
    </ul>
  </div>

  <div class="span6 band-list">
    <p class="title">Te recomendamos</p class="title">
    <ul class="right-bands unstyled">
      <li class="loading">Cargando...</li>
    </ul>
  </div>
</div>
<input type="hidden" name="tags" value="<?php echo implode(",",$tags); ?>" id="tags">
<div id="map" style="width:1px;height:1px;"></div>