        <div class="row-filter margin-bottom-20 ">
            <div class="filter-gallery">
                    <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#">
                                    <img data-filter="Bộ chăn ga" class="filter-button" data-catid="4463" style="width: 75px;height: 75px;display: block;margin: auto;border-radius: 50%;cursor: pointer;border: 0.5px solid #aaaaaa0f;" src="./assets/image/heh.jpg">
                                    <button style=" display: block; margin-bottom: 25px; margin: auto;" data-filter="Bộ chăn ga" class="filter-button" data-catid="4463">Bộ chăn ga</button>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img data-filter="Bộ ga chun" class="filter-button" data-catid="4491" style="width: 75px;height: 75px;display: block;margin: auto;border-radius: 50%;cursor: pointer;border: 0.5px solid #aaaaaa0f;" src="./assets/image/images.jpg" >
                                    <button style=" display: block; margin-bottom: 25px; margin: auto;" data-filter="Bộ ga chun" class="filter-button" data-catid="4491">Bộ ga chun</button>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img data-filter="Đệm" class="filter-button " data-catid="4504" style="width: 75px;height: 75px;display: block;margin: auto;border-radius: 50%;cursor: pointer;border: 0.5px solid #aaaaaa0f;" src="./assets/image/haha.jpg">
                                    <button style=" display: block; margin-bottom: 25px; margin: auto;" data-filter="Đệm" class="filter-button" data-catid="4504">Đệm</button>
                                </a>
                                
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img data-filter="Đệm" class="filter-button " data-catid="4504" style="width: 75px;height: 75px;display: block;margin: auto;border-radius: 50%;cursor: pointer;border: 0.5px solid #aaaaaa0f;" src="./assets/image/haha.jpg">
                                    <button style=" display: block; margin-bottom: 25px; margin: auto;" data-filter="Đệm" class="filter-button" data-catid="4504">Đệm</button>
                                </a>
                                
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
             <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                <script>
                    var swiper = new Swiper('.filter-gallery', {
                    slidesPerView: 4,
                    direction: getDirection(),
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    on: {
                        resize: function () {
                        swiper.changeDirection(getDirection());
                        },
                    },
                    });

                    function getDirection() {
                    var windowWidth = window.innerWidth;
                    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

                    return direction;
                    }
                </script>