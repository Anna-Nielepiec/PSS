

 <!-- Great cars section start  -->

  <section id="card">

    <div class="container ">

      <h2 class="text-uppercase text-center text-dark pt-5">

        Samochody do wynajęcia

      </h2>

      <div class="row">

      {foreach $cars as $car}

        <div class="col-md-6 col-lg-4">

          <div class="post pt-5 pb-3">

            <div class="image-zoom">

              <a href="{url action='car_details' id=$car.id}" class="ratio ratio-4x3"><img src="{$conf->app_url}/{$car.main_image}" alt="" class="img-fluid object-fit-cover" /></a>

            </div>

            <div class="text-center text-dark text-uppercase pt-2">

                <h4>{$car.brand} {$car.model}</h4>

            </div>
          </div>

        </div>
          

          {/foreach}

          <div style="margin-top: 50px; position: relative; display:flex;">
              {if $page != 1}
                  <a class="pure-button" href="{url action='home' page=$page-1}" title="Previous page" style="font-size: 200%; color: black; "><<i class="fas fa-angle-left"></i></a>
              {/if}
              <p style="font-size: 150%; position: absolute; right: 50%; margin-top: 0;">- {$page} -</p>
              {if $page < $max_page}
                  <a class="pure-button" href="{url action='home' page=$page+1}" title="Next page" style="font-size: 200%; color: black;text-align: right; flex-grow: 1;">><i class="fas fa-angle-right"></i></a>
              {/if}
          </div>
         

      

       

      </div>

    </div>

  </section>
