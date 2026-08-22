import Groundwork from '@tghp/groundwork.js';
const groundworkMain = new Groundwork('main');

import siteHeaderComponent from './components/site-header'
import heroSliderComponent from "./components/hero-slider";
groundworkMain.components.add('site-header', siteHeaderComponent);
groundworkMain.components.add('hero-slider', heroSliderComponent);
groundworkMain.run();