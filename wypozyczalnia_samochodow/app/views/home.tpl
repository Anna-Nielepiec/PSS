{extends file="main.tpl"}

{block name=content}
<!-- hero section start  -->

  <section id="hero" class="position-relative jarallax" style="

        background-image: url(images/Bg.jpg);

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
        <form class="row g-3" action="{$conf->action_url}home">
          <fieldset>
            <div class="row justify-content-center">
              <div class="col-8">
                <input type="text" name="search_text" value="{$searchForm->text}" class="form-control" />
              </div>
            </div>

            <div class="row justify-content-center pt-4">
              <div class="col-auto">
                <button class="btn btn-primary" type="submit">Znajdź samochód</button>
              </div>
            </div>
          
          </fieldset>
        </form>

        

      </div>

    </section>

  </section>
 
 {include file="cars.tpl"}

  </section>



{/block}