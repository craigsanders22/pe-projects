<section class="client-section">
  <inner-column>
    <div>
      <div class="top-text">
        <h3 class="attention-voice">What Our Clients Say</h3>
        <p class="quiet-voice">Neque, Pulvinar Vestibulum Non Aliquam.</p>
      </div>

      <div class="carousel-container">
        <ol class="carousel">
          <?php if($page == 1): ?>
          <div class="client-chevron">
            <img src="images/icon/chevron-left.svg" alt="">
          </div>
          <?php $clients = [1, 2]; foreach ($clients as $x): ?>
          <li class="card">
<svg xmlns="http://www.w3.org/2000/svg" width="160" height="24" viewBox="0 0 160 24">
  <path d="M12 0L15.746 7.222 23.272 9.672 18.087 15.556 18.893 23.148 12 19.5 5.107 23.148 5.913 15.556 0.728 9.672 8.254 7.222z" fill="#3064a7" />
  <path d="M48 0L51.746 7.222 59.272 9.672 54.087 15.556 54.893 23.148 48 19.5 41.107 23.148 41.913 15.556 36.728 9.672 44.254 7.222z" fill="#3064a7" />
  <path d="M84 0L87.746 7.222 95.272 9.672 90.087 15.556 90.893 23.148 84 19.5 77.107 23.148 77.913 15.556 72.728 9.672 80.254 7.222z" fill="#3064a7" />
  <path d="M120 0L123.746 7.222 131.272 9.672 126.087 15.556 126.893 23.148 120 19.5 113.107 23.148 113.913 15.556 108.728 9.672 116.254 7.222z" fill="#3064a7" />
  <path d="M156 0L159.746 7.222 167.272 9.672 162.087 15.556 162.893 23.148 156 19.5 149.107 23.148 149.913 15.556 144.728 9.672 152.254 7.222z" fill="#3064a7" />
</svg>




            <div class="card-text">
              <h4 class="calm-voice">"Et, Odio Elementum Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, nostrum."</h4>
              <img src="images/courtney.svg" alt="">
              <p class="calm-voice">Courtney Henry</p>
            </div>
          </li>
          <?php endforeach; ?>
          <div class="client-chevron">
            <img src="images/icon/chevron-right.svg" alt="">
          </div>
          <?php endif; ?>
          <?php if($page == 2): ?>
          <?php $clients = [1]; foreach ($clients as $x): ?>
          <div class="review">
            <li class="card">
              <div class="card-text">
                <h4 class="attention-voice">"Et, Odio Elementum Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, nostrum."</h4>
                <div class="profile">
                  <img src="images/avatar.svg" alt="">
                  <div class="profile-text">
                    <p class="strong-voice">Courtney Henry</p>
                    <h5 class="quiet-voice">Marketing Coordinator</h5>
                  </div>
                </div>
              </div>
            </li>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
          <?php if($page == 3): ?>
          <?php $clients = [1]; foreach ($clients as $x): ?>
          <li class="card">
            <img class="client-picture" src="images/square.jpg" alt="">
            <div class="card-text">
              <h4 class="strong-voice">"Et, Odio Elementum Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, nostrum.Et, Odio Elementum."</h4>
              <div class="profile-text">
                <p class="calm-voice">Courtney Henry</p>
                <p class="quiet-voice">Marketing Coordinator</p>
              </div>
            </div>
          </li>
          <?php endforeach; ?>
          <?php endif; ?>
        </ol>
      </div>
    </div>
  </inner-column>
</section>
