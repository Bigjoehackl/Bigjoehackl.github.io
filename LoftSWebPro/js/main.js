var label = document.querySelector('.courses__link');
var linkLabel = this.label;

linkLabel.addEventListener('click', function (e) {
    e.preventDefault(e.currentTarget);
    console.log("hello");
});

// label = function () {
//     for (var i in label){
//         label[i].addEventListener('click', function (e) {
//             e.preventDefault();
//         })
//     }
// }