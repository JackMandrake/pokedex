<div class="row mx-0 ">
        <?php foreach($resultPokedex as $pokedex): ?>
        <div class="col-md-4 border-radius">
          <div class="card border-0 text-white text-center pokemon">
            <img src="img/<?= $pokedex->getNumero() ?>.png"
              alt="Card image" class="card-img-top pokeimage">
            <div class="d-flex align-items-center">
              <div class="w-100 py-3 card-body pokemon">
                <h4 class="mb-4 card-text font-weight-bold poketext">
                 <a href="<?= $router->generate('detail') ?>">#<?= $pokedex->getNumero() ?> <?= $pokedex->getNom() ?></a>
                </h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>