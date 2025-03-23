{extends file="main.tpl"}

{block name=content}
<!-- hero section start  -->

  <section id="hero" class="position-relative jarallax" style="

        background-image: url(/wypozyczalnia_samochodow_a/public/images/Bg.jpg);

        background-repeat: no-repeat;

        background-size: cover;

        background-position: center;

        height: 800px;

      ">

    <div class="container-fluid">

      <div class="hero-content container justify-content-center text-center">

        <div class="row">

          <div class="detail mb-4">

            <h1 class="text-white">Znajdź swój idealny samochód</h1>

          </div>

        </div>

      </div>

    </div>



    <!-- search section start  -->

    <section id="search position-absolute top-50 start-50 translate-middle">
      <div class="container search-block p-5">
        <form id="car-search-form" class="row g-3"  method="post" action="{$conf->action_root}cars" onsubmit="ajaxPostForm('car-search-form', '{$conf->action_root}cars', 'car-listing');document.getElementById('car-listing').scrollIntoView({ behavior: 'smooth' });  return false;">
          <fieldset>
            <div class="row justify-content-center">
              <div class="col-8">
                <input type="text" id="search_text" name="search_text" class="form-control" />
                <input type="hidden" id="page" name="page" value="1" />
              </div>
            </div>

            <div class="row justify-content-center pt-4">
              <div class="col-auto">
                <button class="btn btn-primary" type="submit">Znajdź samochód</button>
              </div>
              <div class="col-auto">
                  <button class="btn btn-dark" type="button" onclick="resetSearch('{$conf->action_root}cars'); document.getElementById('car-listing').scrollIntoView({ behavior: 'smooth' });">Resetuj wyszukiwanie</button>
              </div>
            </div>
          
          </fieldset>
        </form>

        

      </div>

    </section>

  </section>
 <div id="car-listing" >
 {include file="cars.tpl"}
 </div>

  </section>



{/block}