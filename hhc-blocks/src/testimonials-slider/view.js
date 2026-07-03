/**
 * Use this file for JavaScript code that you want to run in the front-end 
 * on posts/pages that contain this block.
/**
* Swiper Initalizer component.
*/
import Swiper from 'swiper/bundle';

import { SwiperInit } from './swiper-init';

window.addEventListener('load', () => {
    if(typeof swiper_settings !== 'undefined') {
        document.querySelectorAll('.swiper').forEach( ( el ) => {
            SwiperInit(el, swiper_settings);
        });
    }
});