// dropdowm 
function dropMBL(id){
    if(document.querySelector(id).classList.contains('ddm_show')){
      document.querySelector(id).classList.remove('ddm_show');
    }else{
      document.querySelector(id).classList.add('ddm_show');
    }
  }

// slider
  const myCarouselElement = document.querySelector('#carouselExample')

      const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000,
        touch: false
      })