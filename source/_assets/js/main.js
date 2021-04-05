window.axios = require('axios');
window.fuse = require('fuse.js');
window.Vue = require('vue');

// import Search from './components/Search.vue';
import hljs from 'highlight.js/lib/highlight';
import InstagramFeed from './InstagramFeed.min.js';

// Syntax highlighting
hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});

Vue.config.productionTip = false;

// new Vue({
//     components: {
//         Search,
//     },
// }).$mount('#vue-search');

new InstagramFeed({
    'username': 'graceandbutter',
    'container': document.getElementById("insta"),
    'display_profile': false,
    'display_biography': true,
    'display_gallery': true,
    'display_captions': true,
    'callback': null,
    'styling': true,
    'items': 8,
    'host': 'https://images' + ~~(Math.random() * 3333) + '-focus-opensocial.googleusercontent.com/gadgets/proxy?container=none&url=https://www.instagram.com/',
    'items_per_row': 4,
    'margin': 1,
    'lazy_load': true,
    'on_error': console.error
});




document.querySelector(".btn.order").addEventListener("click", (e) => { 
    e.preventDefault();
    console.log('gay');
    document.querySelector(".formbox").scrollIntoView({
        behavior: 'smooth',
    })
 });
