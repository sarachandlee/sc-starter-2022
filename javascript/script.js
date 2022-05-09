/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
var button = document.querySelector('#site-navigation button');
var menu = document.querySelector("#primary-menu");
button.addEventListener("click", () => {
    menu.classList.toggle("hidden");
})
